# Seacommerce\Unit4\Multivers\Sdk\CustomerInfoApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerInfoByCustomerId**](CustomerInfoApi.md#getCustomerInfoByCustomerId) | **GET** /api/{database}/CustomerInfo/{customerId} | Gets the specified CustomerInfo.


# **getCustomerInfoByCustomerId**
> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInfo getCustomerInfoByCustomerId($database, $customerId)

Gets the specified CustomerInfo.

Gets the specified CustomerInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 

try {
    $result = $apiInstance->getCustomerInfoByCustomerId($database, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInfoApi->getCustomerInfoByCustomerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInfo**](../Model/CustomerInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

