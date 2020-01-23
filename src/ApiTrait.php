<?php


namespace Seacommerce\Unit4\Multivers\Sdk;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

trait ApiTrait
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var string
     */
    protected $accessToken;
    /**
     * @var array
     */
    private $clientConfig;

    public function __construct(Configuration $config, array $clientConfig = [])
    {
        $this->config = $config;
        $this->clientConfig = $clientConfig;
        $this->client = $this->createClient($clientConfig);
    }

    public function createClient(array $clientConfig = [])
    {
        $stack = HandlerStack::create();

        $stack->push(Middleware::retry(function ($retryAttempts, RequestInterface $request, ResponseInterface $response, $ex) {
            if ($response && $response->getStatusCode() === 401 && $retryAttempts < 2) {
                $this->accessToken = null; // Force re-authentication.
                return true;
            }
            return false;
        }));

        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            return $this->authenticateRequest($request);
        }));

        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            $path = $request->getUri()->getPath();
            $path = preg_replace('/%/', '!_', $path);
            $newUri = $request->getUri()->withPath($path);
            return $request->withUri($newUri);
        }));

        $config = [
            'handler' => $stack,
            'headers' => [
                'User-Agent' => $this->config->getUserAgent()
            ]
        ];
        if ($this->config->getProxy()) {
            $config['proxy'] = $this->config->getProxy();
        }

        if(!empty($clientConfig)) {
            $config = array_merge($config, $clientConfig);
        }

        $client = new Client($config);

        return $client;
    }

    private function authenticateRequest(RequestInterface $request)
    {
        if (!isset($this->accessToken)) {
            $this->acquireAccessToken();
        }

        return $request->withHeader('Authorization', 'Bearer ' . $this->accessToken);
    }

    private function acquireAccessToken()
    {
        if (!isset($this->accessToken)) {
            $authUri = rtrim(trim($this->config->getHost()), '/') . '/OAuth/Token';

            $config = [
                'headers' => [
                    'User-Agent' => $this->config->getUserAgent()
                ]
            ];
            if ($this->config->getProxy()) {
                $config['proxy'] = $this->config->getProxy();
            }

            $authClient = new Client(array_merge($this->clientConfig, $config));

            $response = $authClient->post($authUri, [
                'form_params' => [
                    'refresh_token' => $this->config->getRefreshToken(),
                    'client_id' => $this->config->getClientId(),
                    'client_secret' => $this->config->getClientSecret(),
                    'redirect_uri' => $this->config->getRedirectUrl(),
                    'grant_type' => 'refresh_token',
                ],
                'headers' => [
                    'User-Agent' => 'PHP Multivers Client SDK',
                    'Accept' => 'application/json',
                ]
            ]);
            $tokenData = json_decode($response->getBody()->getContents(), true);
            $this->accessToken = $tokenData['access_token'];
        }
    }
}
