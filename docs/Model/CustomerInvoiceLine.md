# # CustomerInvoiceLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** |  | [optional] 
**canChange** | **bool** |  | [optional] 
**cannotChangeReason** | **string** |  | [optional] 
**costCentreId** | **string** |  | [optional] 
**costCentreIdRequired** | **bool** |  | [optional] 
**costUnitId** | **string** |  | [optional] 
**costUnitIdRequired** | **bool** |  | [optional] 
**creditAmount** | **float** |  | [optional] 
**creditAmountCur** | **float** |  | [optional] 
**currencyId** | **string** |  | [optional] 
**debitAmount** | **float** |  | [optional] 
**debitAmountCur** | **float** |  | [optional] 
**description** | **string** |  | [optional] 
**documentNumber** | **int** |  | [optional] 
**entryType** | **int** | 0 &#x3D; BasicEntry 1 &#x3D; CustomerEntry 2 &#x3D; SupplierEntry 3 &#x3D; ProjectEntry 4 &#x3D; FixedAssetEntry 5 &#x3D; InterCompanyEntry 6 &#x3D; UnMatchedBankTransactionsEntry -1 &#x3D; Internal | [optional] 
**exchangeRate** | **float** |  | [optional] 
**isSubAdminSpecificationRequired** | **bool** |  | [optional] 
**journalSection** | **int** |  | [optional] 
**lineNumbers** | **int[]** |  | [optional] 
**quantity** | **float** |  | [optional] 
**subAdminSpecifications** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\SubAdminSpec[]**](SubAdminSpec.md) |  | [optional] 
**subTransaction** | **string** |  | [optional] 
**teleBankGuid** | **string** |  | [optional] 
**transactionDate** | **string** |  | 
**vatAmount** | **float** |  | [optional] 
**vatAmountCur** | **float** |  | [optional] 
**vatCodeId** | **int** |  | [optional] 
**vatType** | **int** | 0 &#x3D; Goods 1 &#x3D; Services 2 &#x3D; Investments 3 &#x3D; NoVat 4 &#x3D; NotApplicable 5 &#x3D; Purchase 6 &#x3D; Sales 7 &#x3D; Empty | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


