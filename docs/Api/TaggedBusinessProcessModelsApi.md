# Stackflows\Clients\Stackflows\TaggedBusinessProcessModelsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**taggedBusinessModelsStart()**](TaggedBusinessProcessModelsApi.md#taggedBusinessModelsStart) | **POST** /api/v2/tagged/business-models | Starts business processes by tags


## `taggedBusinessModelsStart()`

```php
taggedBusinessModelsStart($taggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Starts business processes by tags



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TaggedBusinessProcessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\TaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\TaggedBusinessModelsStartRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->taggedBusinessModelsStart($taggedBusinessModelsStartRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggedBusinessProcessModelsApi->taggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\TaggedBusinessModelsStartRequest**](../Model/TaggedBusinessModelsStartRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
