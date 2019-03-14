# Seacommerce\Unit4\Multivers\Sdk\ProductInfoApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductInfoByProductId**](ProductInfoApi.md#getProductInfoByProductId) | **GET** /api/{database}/ProductInfo/{productId} | Gets the specified ProductInfo.


# **getProductInfoByProductId**
> \Seacommerce\Unit4\Multivers\Sdk\Model\ProductInfo getProductInfoByProductId($database, $productId)

Gets the specified ProductInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productId = 'productId_example'; // string | 

try {
    $result = $apiInstance->getProductInfoByProductId($database, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInfoApi->getProductInfoByProductId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ProductInfo**](../Model/ProductInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

