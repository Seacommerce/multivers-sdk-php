# Seacommerce\Unit4\Multivers\Sdk
Unofficial SDK for the UNIT4 Multivers WebApi version 1.10.0 (by Seacommerce).

- API version: 1.10.0
- Package version: 110.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://seacommerce.nl](https://seacommerce.nl)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Seacommerce/multivers-sdk-php.git"
    }
  ],
  "require": {
    "seacommerce/multivers-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Seacommerce\Unit4\Multivers\Sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

try {
    $result = $apiInstance->getCustomFieldDefinitionInfoListByEntities($database, $entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldDefinitionInfoListApi->getCustomFieldDefinitionInfoListByEntities: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomFieldDefinitionInfoListApi* | [**getCustomFieldDefinitionInfoListByEntities**](docs/Api/CustomFieldDefinitionInfoListApi.md#getcustomfielddefinitioninfolistbyentities) | **GET** /api/{database}/CustomFieldDefinitionInfoList/{entities} | Gets a list of CustomFieldDefinitionInfo that matches the specified criteria
*CustomTableApi* | [**getCustomTableByTableName**](docs/Api/CustomTableApi.md#getcustomtablebytablename) | **GET** /api/{database}/CustomTable/{tableName} | Gets the specified CustomTable.
*CustomTableApi* | [**updateCustomTableByTableName**](docs/Api/CustomTableApi.md#updatecustomtablebytablename) | **PUT** /api/{database}/CustomTable/{tableName} | Updates the specified CustomTable
*CustomTableInfoListApi* | [**getCustomTableInfoList**](docs/Api/CustomTableInfoListApi.md#getcustomtableinfolist) | **GET** /api/{database}/CustomTableInfoList | Gets a list of CustomTable that matches the specified criteria
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /api/{database}/Customer | Creates a new Customer with the specified values
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /api/{database}/Customer/{customerId} | Deletes the specified Customer
*CustomerApi* | [**deleteCustomerAndOrganization**](docs/Api/CustomerApi.md#deletecustomerandorganization) | **DELETE** /api/{database}/Customer/CustomerAndOrganization/{customerId} | Deletes the specified Customer
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /api/{database}/Customer/{customerId} | Gets the specified Customer.
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /api/{database}/Customer/{customerId} | Updates the specified Customer
*CustomerGroupInfoApi* | [**getCustomerGroupInfoByCustomerGroupId**](docs/Api/CustomerGroupInfoApi.md#getcustomergroupinfobycustomergroupid) | **GET** /api/{database}/CustomerGroupInfo/{customerGroupId} | Gets the specified CustomerGroupInfo.
*CustomerGroupInfoListApi* | [**getCustomerGroupInfoList**](docs/Api/CustomerGroupInfoListApi.md#getcustomergroupinfolist) | **GET** /api/{database}/CustomerGroupInfoList | Gets a list of CustomerGroupInfo that matches the specified criteria
*CustomerGroupNVLApi* | [**getCustomerGroupNVL**](docs/Api/CustomerGroupNVLApi.md#getcustomergroupnvl) | **GET** /api/{database}/CustomerGroupNVL | Gets a name value list of CustomerGroupNVL that matches the specified criteria
*CustomerInfoApi* | [**getCustomerInfoByCustomerId**](docs/Api/CustomerInfoApi.md#getcustomerinfobycustomerid) | **GET** /api/{database}/CustomerInfo/{customerId} | Gets the specified CustomerInfo.
*CustomerInfoListApi* | [**getCustomerInfoList**](docs/Api/CustomerInfoListApi.md#getcustomerinfolist) | **GET** /api/{database}/CustomerInfoList | Gets a list of CustomerInfo that matches the specified criteria
*CustomerNVLApi* | [**getCustomerNVL**](docs/Api/CustomerNVLApi.md#getcustomernvl) | **GET** /api/{database}/CustomerNVL | Gets a name value list of CustomerNVL that matches the specified criteria
*CustomerPersonNVLApi* | [**getCustomerPersonNVLByCustomerId**](docs/Api/CustomerPersonNVLApi.md#getcustomerpersonnvlbycustomerid) | **GET** /api/{database}/CustomerPersonNVL/{customerId} | Gets a name value list of CustomerPersonNVL that matches the specified criteria
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /api/{database}/Product | Creates a new Product with the specified values
*ProductApi* | [**deleteProduct**](docs/Api/ProductApi.md#deleteproduct) | **DELETE** /api/{database}/Product/{productId} | Deletes the specified Product
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /api/{database}/Product/{productId} | Gets the specified Product.
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PUT** /api/{database}/Product/{productId} | Updates the specified Product
*ProductGroupApi* | [**createProductGroup**](docs/Api/ProductGroupApi.md#createproductgroup) | **POST** /api/{database}/ProductGroup | Creates a new ProductGroup with the specified values
*ProductGroupApi* | [**deleteProductGroup**](docs/Api/ProductGroupApi.md#deleteproductgroup) | **DELETE** /api/{database}/ProductGroup/{productGroupId} | Deletes the specified ProductGroup
*ProductGroupApi* | [**getProductGroup**](docs/Api/ProductGroupApi.md#getproductgroup) | **GET** /api/{database}/ProductGroup/{productGroupId} | Gets the specified ProductGroup.
*ProductGroupApi* | [**updateProductGroup**](docs/Api/ProductGroupApi.md#updateproductgroup) | **PUT** /api/{database}/ProductGroup/{productGroupId} | Updates the specified ProductGroup
*ProductGroupNVLApi* | [**getProductGroupNVL**](docs/Api/ProductGroupNVLApi.md#getproductgroupnvl) | **GET** /api/{database}/ProductGroupNVL | Gets a name value list of ProductGroupNVL that matches the specified criteria
*ProductInfoApi* | [**getProductInfoByProductId**](docs/Api/ProductInfoApi.md#getproductinfobyproductid) | **GET** /api/{database}/ProductInfo/{productId} | Gets the specified ProductInfo.
*ProductInfoListApi* | [**getProductInfoList**](docs/Api/ProductInfoListApi.md#getproductinfolist) | **GET** /api/{database}/ProductInfoList | Gets a list of ProductInfo that matches the specified criteria
*ProductNVLApi* | [**getProductNVL**](docs/Api/ProductNVLApi.md#getproductnvl) | **GET** /api/{database}/ProductNVL | Gets a name value list of ProductNVL that matches the specified criteria
*ProductTypeNVLApi* | [**getProductTypeNVL**](docs/Api/ProductTypeNVLApi.md#getproducttypenvl) | **GET** /api/{database}/ProductTypeNVL | Gets a name value list of ProductTypeNVL that matches the specified criteria
*VatCodeInfoListApi* | [**getVatCodeInfoList**](docs/Api/VatCodeInfoListApi.md#getvatcodeinfolist) | **GET** /api/{database}/VatCodeInfoList | Gets a list of VatCodeInfo that matches the specified criteria


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Component](docs/Model/Component.md)
 - [CustomFieldDefinitionInfo](docs/Model/CustomFieldDefinitionInfo.md)
 - [CustomTable](docs/Model/CustomTable.md)
 - [CustomTableRow](docs/Model/CustomTableRow.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerGroupInfo](docs/Model/CustomerGroupInfo.md)
 - [CustomerInfo](docs/Model/CustomerInfo.md)
 - [Product](docs/Model/Product.md)
 - [ProductDescription](docs/Model/ProductDescription.md)
 - [ProductGroup](docs/Model/ProductGroup.md)
 - [ProductGroupRelation](docs/Model/ProductGroupRelation.md)
 - [ProductInfo](docs/Model/ProductInfo.md)
 - [ProductSupplier](docs/Model/ProductSupplier.md)
 - [Stock](docs/Model/Stock.md)
 - [VatCodeInfo](docs/Model/VatCodeInfo.md)
 - [VatCodePercentageInfo](docs/Model/VatCodePercentageInfo.md)


## Documentation For Authorization


## production

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://api.online.unit4.nl/v110/OAuth/Authorize
- **Scopes**: 
 - **http://UNIT4.Multivers.API/Web/WebApi/***: Grants access to the entire api.

## sandbox

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://sandbox.api.online.unit4.nl/v110/OAuth/Authorize
- **Scopes**: 
 - **http://UNIT4.Multivers.API/Web/WebApi/***: Grants access to the entire api.


## Author




