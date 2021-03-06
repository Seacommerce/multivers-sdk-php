# Seacommerce\Unit4\Multivers\Sdk\CustomTableApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomTableByTableName**](CustomTableApi.md#getCustomTableByTableName) | **GET** /api/{database}/CustomTable/{tableName} | Gets the specified CustomTable.
[**updateCustomTableByTableName**](CustomTableApi.md#updateCustomTableByTableName) | **PUT** /api/{database}/CustomTable/{tableName} | Updates the specified CustomTable



## getCustomTableByTableName

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable getCustomTableByTableName($database, $tableName)

Gets the specified CustomTable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$tableName = 'tableName_example'; // string | 

try {
    $result = $apiInstance->getCustomTableByTableName($database, $tableName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomTableApi->getCustomTableByTableName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **tableName** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable**](../Model/CustomTable.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomTableByTableName

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable updateCustomTableByTableName($database, $tableName, $customTable)

Updates the specified CustomTable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$tableName = 'tableName_example'; // string | 
$customTable = new \Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable(); // \Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable | 

try {
    $result = $apiInstance->updateCustomTableByTableName($database, $tableName, $customTable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomTableApi->updateCustomTableByTableName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **tableName** | **string**|  |
 **customTable** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable**](../Model/CustomTable.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomTable**](../Model/CustomTable.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

