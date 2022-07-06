# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentTaggedBusinessModelsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authTaggedBusinessModelsStart()**](AuthenticatedEnvironmentTaggedBusinessModelsApi.md#authTaggedBusinessModelsStart) | **POST** /api/v2/auth/environment/tagged/business-process-models | Starts business processes by tags


## `authTaggedBusinessModelsStart()`

```php
authTaggedBusinessModelsStart($authTaggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Starts business processes by tags



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentTaggedBusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\AuthTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\AuthTaggedBusinessModelsStartRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authTaggedBusinessModelsStart($authTaggedBusinessModelsStartRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentTaggedBusinessModelsApi->authTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authTaggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthTaggedBusinessModelsStartRequest**](../Model/AuthTaggedBusinessModelsStartRequest.md)|  |
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
