# Seacommerce\Unit4\Multivers\Sdk\CustomerGroupInfoApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerGroupInfoByCustomerGroupId**](CustomerGroupInfoApi.md#getCustomerGroupInfoByCustomerGroupId) | **GET** /api/{database}/CustomerGroupInfo/{customerGroupId} | Gets the specified CustomerGroupInfo.



## getCustomerGroupInfoByCustomerGroupId

> \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo getCustomerGroupInfoByCustomerGroupId($database, $customerGroupId, $fiscalYear)

Gets the specified CustomerGroupInfo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerGroupInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerGroupId = 'customerGroupId_example'; // string | 
$fiscalYear = 'fiscalYear_example'; // string | 

try {
    $result = $apiInstance->getCustomerGroupInfoByCustomerGroupId($database, $customerGroupId, $fiscalYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupInfoApi->getCustomerGroupInfoByCustomerGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerGroupId** | **string**|  |
 **fiscalYear** | **string**|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo**](../Model/CustomerGroupInfo.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

