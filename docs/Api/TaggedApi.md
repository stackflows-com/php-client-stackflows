# Stackflows\Clients\Stackflows\TaggedApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postTaggedBusinessModelsStart()**](TaggedApi.md#postTaggedBusinessModelsStart) | **POST** /api/v2/tagged/business-models | Starts Business Process Models by Tag


## `postTaggedBusinessModelsStart()`

```php
postTaggedBusinessModelsStart($postTaggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelModel[]
```

Starts Business Process Models by Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TaggedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postTaggedBusinessModelsStart($postTaggedBusinessModelsStartRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggedApi->postTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTaggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest**](../Model/PostTaggedBusinessModelsStartRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelModel[]**](../Model/BusinessProcessModelModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
