# Seacommerce\Unit4\Multivers\Sdk\ProductApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct**](ProductApi.md#createProduct) | **POST** /api/{database}/Product | Creates a new Product with the specified values
[**deleteProduct**](ProductApi.md#deleteProduct) | **DELETE** /api/{database}/Product/{productId} | Deletes the specified Product
[**getProduct**](ProductApi.md#getProduct) | **GET** /api/{database}/Product/{productId} | Gets the specified Product.
[**updateProduct**](ProductApi.md#updateProduct) | **PUT** /api/{database}/Product/{productId} | Updates the specified Product


# **createProduct**
> \Seacommerce\Unit4\Multivers\Sdk\Model\Product createProduct($database, $product)

Creates a new Product with the specified values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$product = new \Seacommerce\Unit4\Multivers\Sdk\Model\Product(); // \Seacommerce\Unit4\Multivers\Sdk\Model\Product | 

try {
    $result = $apiInstance->createProduct($database, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **product** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Product**](../Model/Product.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProduct**
> deleteProduct($database, $productId)

Deletes the specified Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productId = 'productId_example'; // string | 

try {
    $apiInstance->deleteProduct($database, $productId);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \Seacommerce\Unit4\Multivers\Sdk\Model\Product getProduct($database, $productId)

Gets the specified Product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productId = 'productId_example'; // string | 

try {
    $result = $apiInstance->getProduct($database, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Product**](../Model/Product.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \Seacommerce\Unit4\Multivers\Sdk\Model\Product updateProduct($database, $productId, $product)

Updates the specified Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$productId = 'productId_example'; // string | 
$product = new \Seacommerce\Unit4\Multivers\Sdk\Model\Product(); // \Seacommerce\Unit4\Multivers\Sdk\Model\Product | 

try {
    $result = $apiInstance->updateProduct($database, $productId, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **productId** | **string**|  |
 **product** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Product**](../Model/Product.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

