# Unit4\Api\Client\OrderChargeVatTypeNVLApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderChargeVatTypeNVL**](OrderChargeVatTypeNVLApi.md#getOrderChargeVatTypeNVL) | **GET** /api/{database}/OrderChargeVatTypeNVL | 


# **getOrderChargeVatTypeNVL**
> object[] getOrderChargeVatTypeNVL($database)



Gets a name value list of OrderChargeVatTypeNVL that matches the specified criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Unit4\Api\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Unit4\Api\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Unit4\Api\Client\Api\OrderChargeVatTypeNVLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 

try {
    $result = $apiInstance->getOrderChargeVatTypeNVL($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderChargeVatTypeNVLApi->getOrderChargeVatTypeNVL: ', $e->getMessage(), PHP_EOL;
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

