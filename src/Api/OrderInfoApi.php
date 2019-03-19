<?php
/**
 * OrderInfoApi
 * PHP version 5
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UNIT4 Multivers WebApi
 *
 * Unofficial SDK for the UNIT4 Multivers WebApi version 1.10.0 (by Seacommerce).
 *
 * OpenAPI spec version: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Seacommerce\Unit4\Multivers\Sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Seacommerce\Unit4\Multivers\Sdk\ApiException;
use Seacommerce\Unit4\Multivers\Sdk\Configuration;
use Seacommerce\Unit4\Multivers\Sdk\HeaderSelector;
use Seacommerce\Unit4\Multivers\Sdk\ObjectSerializer;

/**
 * OrderInfoApi Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderInfoApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOrderInfoByInvoiceId
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database database (required)
     * @param  string $invoiceId invoiceId (required)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo
     */
    public function getOrderInfoByInvoiceId($database, $invoiceId)
    {
        list($response) = $this->getOrderInfoByInvoiceIdWithHttpInfo($database, $invoiceId);
        return $response;
    }

    /**
     * Operation getOrderInfoByInvoiceIdWithHttpInfo
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $invoiceId (required)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderInfoByInvoiceIdWithHttpInfo($database, $invoiceId)
    {
        $request = $this->getOrderInfoByInvoiceIdRequest($database, $invoiceId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderInfoByInvoiceIdAsync
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $invoiceId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderInfoByInvoiceIdAsync($database, $invoiceId)
    {
        return $this->getOrderInfoByInvoiceIdAsyncWithHttpInfo($database, $invoiceId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderInfoByInvoiceIdAsyncWithHttpInfo
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $invoiceId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderInfoByInvoiceIdAsyncWithHttpInfo($database, $invoiceId)
    {
        $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo';
        $request = $this->getOrderInfoByInvoiceIdRequest($database, $invoiceId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrderInfoByInvoiceId'
     *
     * @param  string $database (required)
     * @param  string $invoiceId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderInfoByInvoiceIdRequest($database, $invoiceId)
    {
        // verify the required parameter 'database' is set
        if ($database === null || (is_array($database) && count($database) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database when calling getOrderInfoByInvoiceId'
            );
        }
        // verify the required parameter 'invoiceId' is set
        if ($invoiceId === null || (is_array($invoiceId) && count($invoiceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoiceId when calling getOrderInfoByInvoiceId'
            );
        }

        $resourcePath = '/api/{database}/OrderInfo/ByInvoiceId/{invoiceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($database !== null) {
            $resourcePath = str_replace(
                '{' . 'database' . '}',
                ObjectSerializer::toPathValue($database),
                $resourcePath
            );
        }
        // path params
        if ($invoiceId !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoiceId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrderInfoByOrderId
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database database (required)
     * @param  string $orderId orderId (required)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo
     */
    public function getOrderInfoByOrderId($database, $orderId)
    {
        list($response) = $this->getOrderInfoByOrderIdWithHttpInfo($database, $orderId);
        return $response;
    }

    /**
     * Operation getOrderInfoByOrderIdWithHttpInfo
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $orderId (required)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderInfoByOrderIdWithHttpInfo($database, $orderId)
    {
        $request = $this->getOrderInfoByOrderIdRequest($database, $orderId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderInfoByOrderIdAsync
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $orderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderInfoByOrderIdAsync($database, $orderId)
    {
        return $this->getOrderInfoByOrderIdAsyncWithHttpInfo($database, $orderId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderInfoByOrderIdAsyncWithHttpInfo
     *
     * Gets the specified OrderInfo.
     *
     * @param  string $database (required)
     * @param  string $orderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderInfoByOrderIdAsyncWithHttpInfo($database, $orderId)
    {
        $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo';
        $request = $this->getOrderInfoByOrderIdRequest($database, $orderId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrderInfoByOrderId'
     *
     * @param  string $database (required)
     * @param  string $orderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderInfoByOrderIdRequest($database, $orderId)
    {
        // verify the required parameter 'database' is set
        if ($database === null || (is_array($database) && count($database) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database when calling getOrderInfoByOrderId'
            );
        }
        // verify the required parameter 'orderId' is set
        if ($orderId === null || (is_array($orderId) && count($orderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderId when calling getOrderInfoByOrderId'
            );
        }

        $resourcePath = '/api/{database}/OrderInfo/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($database !== null) {
            $resourcePath = str_replace(
                '{' . 'database' . '}',
                ObjectSerializer::toPathValue($database),
                $resourcePath
            );
        }
        // path params
        if ($orderId !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($orderId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
