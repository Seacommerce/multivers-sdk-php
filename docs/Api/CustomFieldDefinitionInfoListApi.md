# Seacommerce\Unit4\Multivers\Sdk\CustomFieldDefinitionInfoListApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomFieldDefinitionInfoListByEntities**](CustomFieldDefinitionInfoListApi.md#getCustomFieldDefinitionInfoListByEntities) | **GET** /api/{database}/CustomFieldDefinitionInfoList/{entities} | Gets a list of CustomFieldDefinitionInfo that matches the specified criteria



## getCustomFieldDefinitionInfoListByEntities

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomFieldDefinitionInfo[] getCustomFieldDefinitionInfoListByEntities($database, $entities, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of CustomFieldDefinitionInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomFieldDefinitionInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$entities = 'entities_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getCustomFieldDefinitionInfoListByEntities($database, $entities, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldDefinitionInfoListApi->getCustomFieldDefinitionInfoListByEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **entities** | **string**|  |
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomFieldDefinitionInfo[]**](../Model/CustomFieldDefinitionInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

