# Seacommerce\Unit4\Multivers\Sdk\CustomerInvoiceInfoApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerInvoiceInfoByInvoiceId**](CustomerInvoiceInfoApi.md#getCustomerInvoiceInfoByInvoiceId) | **GET** /api/{database}/CustomerInvoiceInfo/{invoiceId} | 
[**getCustomerInvoiceInfoOnlyHeader**](CustomerInvoiceInfoApi.md#getCustomerInvoiceInfoOnlyHeader) | **GET** /api/{database}/CustomerInvoiceInfo/OnlyHeader/{invoiceId} | 


# **getCustomerInvoiceInfoByInvoiceId**
> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceInfo getCustomerInvoiceInfoByInvoiceId($database, $invoiceId)



Gets the specified CustomerInvoiceInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 

try {
    $result = $apiInstance->getCustomerInvoiceInfoByInvoiceId($database, $invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceInfoApi->getCustomerInvoiceInfoByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceInfo**](../Model/CustomerInvoiceInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInvoiceInfoOnlyHeader**
> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceInfo getCustomerInvoiceInfoOnlyHeader($database, $invoiceId)



Gets the specified CustomerInvoiceInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 

try {
    $result = $apiInstance->getCustomerInvoiceInfoOnlyHeader($database, $invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceInfoApi->getCustomerInvoiceInfoOnlyHeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceInfo**](../Model/CustomerInvoiceInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

