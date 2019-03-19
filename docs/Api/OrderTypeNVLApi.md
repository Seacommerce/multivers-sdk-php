# Seacommerce\Unit4\Multivers\Sdk\OrderTypeNVLApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderTypeNVL**](OrderTypeNVLApi.md#getOrderTypeNVL) | **GET** /api/{database}/OrderTypeNVL | Gets a name value list of OrderTypeNVL that matches the specified criteria


# **getOrderTypeNVL**
> object[] getOrderTypeNVL($database)

Gets a name value list of OrderTypeNVL that matches the specified criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderTypeNVLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 

try {
    $result = $apiInstance->getOrderTypeNVL($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTypeNVLApi->getOrderTypeNVL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |

### Return type

**object[]**

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

