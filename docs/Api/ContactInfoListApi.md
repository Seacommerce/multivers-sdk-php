# Seacommerce\Unit4\Multivers\Sdk\ContactInfoListApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactInfoListByEmailAndByName**](ContactInfoListApi.md#getContactInfoListByEmailAndByName) | **GET** /api/{database}/ContactInfoList/{email}/{name} | Gets a list of ContactInfo that matches the specified criteria
[**getContactInfoListByOrganizationId**](ContactInfoListApi.md#getContactInfoListByOrganizationId) | **GET** /api/{database}/ContactInfoList/{organizationId} | Gets a list of ContactInfo that matches the specified criteria



## getContactInfoListByEmailAndByName

> \Seacommerce\Unit4\Multivers\Sdk\Model\ContactInfo[] getContactInfoListByEmailAndByName($database, $email, $name, $organizationId, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of ContactInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ContactInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$email = 'email_example'; // string | 
$name = 'name_example'; // string | 
$organizationId = 'organizationId_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getContactInfoListByEmailAndByName($database, $email, $name, $organizationId, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactInfoListApi->getContactInfoListByEmailAndByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **email** | **string**|  |
 **name** | **string**|  |
 **organizationId** | **string**|  | [optional]
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ContactInfo[]**](../Model/ContactInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactInfoListByOrganizationId

> \Seacommerce\Unit4\Multivers\Sdk\Model\ContactInfo[] getContactInfoListByOrganizationId($database, $organizationId, $email, $name, $select, $filter, $orderby, $top, $skip, $expand)

Gets a list of ContactInfo that matches the specified criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ContactInfoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$organizationId = 'organizationId_example'; // string | 
$email = 'email_example'; // string | 
$name = 'name_example'; // string | 
$select = 'select_example'; // string | 
$filter = 'filter_example'; // string | 
$orderby = 'orderby_example'; // string | 
$top = 'top_example'; // string | 
$skip = 'skip_example'; // string | 
$expand = 'expand_example'; // string | 

try {
    $result = $apiInstance->getContactInfoListByOrganizationId($database, $organizationId, $email, $name, $select, $filter, $orderby, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactInfoListApi->getContactInfoListByOrganizationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **organizationId** | **string**|  |
 **email** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **select** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **orderby** | **string**|  | [optional]
 **top** | **string**|  | [optional]
 **skip** | **string**|  | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ContactInfo[]**](../Model/ContactInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

