# Seacommerce\Unit4\Multivers\Sdk\OrderContactPersonNVLApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderContactPersonNVLByCustomerId**](OrderContactPersonNVLApi.md#getOrderContactPersonNVLByCustomerId) | **GET** /api/{database}/OrderContactPersonNVL/{customerId} | 


# **getOrderContactPersonNVLByCustomerId**
> object[] getOrderContactPersonNVLByCustomerId($database, $customerId)



Gets a name value list of OrderContactPersonNVL that matches the specified criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderContactPersonNVLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 

try {
    $result = $apiInstance->getOrderContactPersonNVLByCustomerId($database, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderContactPersonNVLApi->getOrderContactPersonNVLByCustomerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |

### Return type

**object[]**

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

