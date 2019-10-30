# Seacommerce\Unit4\Multivers\Sdk\CustomerInvoiceApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerInvoice**](CustomerInvoiceApi.md#createCustomerInvoice) | **POST** /api/{database}/CustomerInvoice | Creates a new CustomerInvoice with the specified values
[**deleteCustomerInvoiceByInvoiceId**](CustomerInvoiceApi.md#deleteCustomerInvoiceByInvoiceId) | **DELETE** /api/{database}/CustomerInvoice/{invoiceId} | Deletes the specified CustomerInvoice
[**getCustomerInvoiceByInvoiceId**](CustomerInvoiceApi.md#getCustomerInvoiceByInvoiceId) | **GET** /api/{database}/CustomerInvoice/{invoiceId} | Gets the specified CustomerInvoice.
[**updateCustomerInvoiceByInvoiceId**](CustomerInvoiceApi.md#updateCustomerInvoiceByInvoiceId) | **PUT** /api/{database}/CustomerInvoice/{invoiceId} | Updates the specified CustomerInvoice



## createCustomerInvoice

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice createCustomerInvoice($database, $customerInvoice)

Creates a new CustomerInvoice with the specified values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerInvoice = new \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice(); // \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice | 

try {
    $result = $apiInstance->createCustomerInvoice($database, $customerInvoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->createCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerInvoice** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice**](../Model/CustomerInvoice.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomerInvoiceByInvoiceId

> deleteCustomerInvoiceByInvoiceId($database, $invoiceId)

Deletes the specified CustomerInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 

try {
    $apiInstance->deleteCustomerInvoiceByInvoiceId($database, $invoiceId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->deleteCustomerInvoiceByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerInvoiceByInvoiceId

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice getCustomerInvoiceByInvoiceId($database, $invoiceId)

Gets the specified CustomerInvoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 

try {
    $result = $apiInstance->getCustomerInvoiceByInvoiceId($database, $invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->getCustomerInvoiceByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerInvoiceByInvoiceId

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice updateCustomerInvoiceByInvoiceId($database, $invoiceId, $customerInvoice)

Updates the specified CustomerInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 
$customerInvoice = new \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice(); // \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice | 

try {
    $result = $apiInstance->updateCustomerInvoiceByInvoiceId($database, $invoiceId, $customerInvoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceApi->updateCustomerInvoiceByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |
 **customerInvoice** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice**](../Model/CustomerInvoice.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

