# Seacommerce\Unit4\Multivers\Sdk\ProductGroupApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductGroup**](ProductGroupApi.md#deleteProductGroup) | **DELETE** /api/{database}/ProductGroup/{productGroupId} | Deletes the specified ProductGroup
[**getProductGroup**](ProductGroupApi.md#getProductGroup) | **GET** /api/{database}/ProductGroup/{productGroupId} | Gets the specified ProductGroup.
[**postProductGroupBy**](ProductGroupApi.md#postProductGroupBy) | **POST** /api/{database}/ProductGroup | Creates a new ProductGroup with the specified values
[**putProductGroup**](ProductGroupApi.md#putProductGroup) | **PUT** /api/{database}/ProductGroup/{productGroupId} | Updates the specified ProductGroup


# **deleteProductGroup**
> deleteProductGroup($database, $productGroupId)

Deletes the specified ProductGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productGroupId = 'productGroupId_example'; // string | 

try {
    $apiInstance->deleteProductGroup($database, $productGroupId);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->deleteProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productGroupId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductGroup**
> \Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup getProductGroup($database, $productGroupId)

Gets the specified ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productGroupId = 'productGroupId_example'; // string | 

try {
    $result = $apiInstance->getProductGroup($database, $productGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->getProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productGroupId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductGroupBy**
> \Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup postProductGroupBy($database)

Creates a new ProductGroup with the specified values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 

try {
    $result = $apiInstance->postProductGroupBy($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->postProductGroupBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductGroup**
> \Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup putProductGroup($database, $productGroupId)

Updates the specified ProductGroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productGroupId = 'productGroupId_example'; // string | 

try {
    $result = $apiInstance->putProductGroup($database, $productGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->putProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productGroupId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

