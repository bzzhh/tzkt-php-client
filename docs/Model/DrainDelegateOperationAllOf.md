# # DrainDelegateOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;drain_delegate&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the drained delegate | [optional]
**target** | [**OneOfAlias**](OneOfAlias.md) | Information about the recipient account | [optional]
**amount** | **int** | Amount sent from the drained baker to the target | [optional]
**fee** | **int** | Amount sent from the drained baker to the block baker | [optional]
**allocation_fee** | **int** | The amount of funds burned from the drained baker for account creation (micro tez) | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
