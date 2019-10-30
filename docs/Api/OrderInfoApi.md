# Seacommerce\Unit4\Multivers\Sdk\OrderInfoApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderInfoByInvoiceId**](OrderInfoApi.md#getOrderInfoByInvoiceId) | **GET** /api/{database}/OrderInfo/ByInvoiceId/{invoiceId} | Gets the specified OrderInfo.
[**getOrderInfoByOrderId**](OrderInfoApi.md#getOrderInfoByOrderId) | **GET** /api/{database}/OrderInfo/{orderId} | Gets the specified OrderInfo.



## getOrderInfoByInvoiceId

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo getOrderInfoByInvoiceId($database, $invoiceId)

Gets the specified OrderInfo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoByInvoiceId($database, $invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoApi->getOrderInfoByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoByOrderId

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo getOrderInfoByOrderId($database, $orderId)

Gets the specified OrderInfo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$orderId = 'orderId_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoByOrderId($database, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoApi->getOrderInfoByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **orderId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

