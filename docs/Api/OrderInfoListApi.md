# Seacommerce\Unit4\Multivers\Sdk\OrderInfoListApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderInfoListByCustomerId**](OrderInfoListApi.md#getOrderInfoListByCustomerId) | **GET** /api/{database}/OrderInfoList/{customerId} | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListByCustomerIdAndByFiscalYear**](OrderInfoListApi.md#getOrderInfoListByCustomerIdAndByFiscalYear) | **GET** /api/{database}/OrderInfoList/{customerId}/{fiscalYear} | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen**](OrderInfoListApi.md#getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen) | **GET** /api/{database}/OrderInfoList/{customerId}/{minDate}/{maxDate}/{minPrice}/{maxPrice}/{fiscalYear}/{onlyOpen} | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListByProjectId**](OrderInfoListApi.md#getOrderInfoListByProjectId) | **GET** /api/{database}/OrderInfoList/ByProjectId/{projectId} | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListOpenOrders**](OrderInfoListApi.md#getOrderInfoListOpenOrders) | **GET** /api/{database}/OrderInfoList/OpenOrders | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListOrdersForInvoice**](OrderInfoListApi.md#getOrderInfoListOrdersForInvoice) | **GET** /api/{database}/OrderInfoList/OrdersForInvoice/{invoiceId} | Gets a list of OrderInfo that matches the specified criteria
[**getOrderInfoListOrdersReadyToPrintInvoice**](OrderInfoListApi.md#getOrderInfoListOrdersReadyToPrintInvoice) | **GET** /api/{database}/OrderInfoList/OrdersReadyToPrintInvoice | Gets a list of OrderInfo that matches the specified criteria



## getOrderInfoListByCustomerId

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListByCustomerId($database, $customerId, $minDate, $maxDate, $minPrice, $maxPrice, $fiscalYear, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 
$minDate = 'minDate_example'; // string | 
$maxDate = 'maxDate_example'; // string | 
$minPrice = 'minPrice_example'; // string | 
$maxPrice = 'maxPrice_example'; // string | 
$fiscalYear = 'fiscalYear_example'; // string | 
$onlyOpen = 'onlyOpen_example'; // string | 
$pageSize = 'pageSize_example'; // string | 
$pageNumber = 'pageNumber_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListByCustomerId($database, $customerId, $minDate, $maxDate, $minPrice, $maxPrice, $fiscalYear, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListByCustomerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |
 **minDate** | **string**|  | [optional]
 **maxDate** | **string**|  | [optional]
 **minPrice** | **string**|  | [optional]
 **maxPrice** | **string**|  | [optional]
 **fiscalYear** | **string**|  | [optional]
 **onlyOpen** | **string**|  | [optional]
 **pageSize** | **string**|  | [optional]
 **pageNumber** | **string**|  | [optional]
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListByCustomerIdAndByFiscalYear

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListByCustomerIdAndByFiscalYear($database, $customerId, $fiscalYear, $minDate, $maxDate, $minPrice, $maxPrice, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 
$fiscalYear = 'fiscalYear_example'; // string | 
$minDate = 'minDate_example'; // string | 
$maxDate = 'maxDate_example'; // string | 
$minPrice = 'minPrice_example'; // string | 
$maxPrice = 'maxPrice_example'; // string | 
$onlyOpen = 'onlyOpen_example'; // string | 
$pageSize = 'pageSize_example'; // string | 
$pageNumber = 'pageNumber_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListByCustomerIdAndByFiscalYear($database, $customerId, $fiscalYear, $minDate, $maxDate, $minPrice, $maxPrice, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListByCustomerIdAndByFiscalYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |
 **fiscalYear** | **string**|  |
 **minDate** | **string**|  |
 **maxDate** | **string**|  |
 **minPrice** | **string**|  |
 **maxPrice** | **string**|  |
 **onlyOpen** | **string**|  |
 **pageSize** | **string**|  | [optional]
 **pageNumber** | **string**|  | [optional]
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen($database, $customerId, $minDate, $maxDate, $minPrice, $maxPrice, $fiscalYear, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 
$minDate = 'minDate_example'; // string | 
$maxDate = 'maxDate_example'; // string | 
$minPrice = 'minPrice_example'; // string | 
$maxPrice = 'maxPrice_example'; // string | 
$fiscalYear = 'fiscalYear_example'; // string | 
$onlyOpen = 'onlyOpen_example'; // string | 
$pageSize = 'pageSize_example'; // string | 
$pageNumber = 'pageNumber_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen($database, $customerId, $minDate, $maxDate, $minPrice, $maxPrice, $fiscalYear, $onlyOpen, $pageSize, $pageNumber, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListByCustomerIdAndByMinDateAndByMaxDateAndByMinPriceAndByMaxPriceAndByFiscalYearAndByOnlyOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |
 **minDate** | **string**|  |
 **maxDate** | **string**|  |
 **minPrice** | **string**|  |
 **maxPrice** | **string**|  |
 **fiscalYear** | **string**|  |
 **onlyOpen** | **string**|  |
 **pageSize** | **string**|  |
 **pageNumber** | **string**|  |
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListByProjectId

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListByProjectId($database, $projectId, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$projectId = 'projectId_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListByProjectId($database, $projectId, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListByProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **projectId** | **string**|  |
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListOpenOrders

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListOpenOrders($database, $customerId, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListOpenOrders($database, $customerId, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListOpenOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  | [optional]
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListOrdersForInvoice

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListOrdersForInvoice($database, $invoiceId, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$invoiceId = 'invoiceId_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListOrdersForInvoice($database, $invoiceId, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListOrdersForInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **invoiceId** | **string**|  |
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderInfoListOrdersReadyToPrintInvoice

> \Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[] getOrderInfoListOrdersReadyToPrintInvoice($database, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of OrderInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\OrderInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getOrderInfoListOrdersReadyToPrintInvoice($database, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInfoListApi->getOrderInfoListOrdersReadyToPrintInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\OrderInfo[]**](../Model/OrderInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

