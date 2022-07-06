# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentBusinessModelCommentsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authBusinessModelDiagramsCommentsCreate()**](AuthenticatedEnvironmentBusinessModelCommentsApi.md#authBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | Create
[**authBusinessModelDiagramsCommentsDelete()**](AuthenticatedEnvironmentBusinessModelCommentsApi.md#authBusinessModelDiagramsCommentsDelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete
[**authBusinessModelDiagramsCommentsList()**](AuthenticatedEnvironmentBusinessModelCommentsApi.md#authBusinessModelDiagramsCommentsList) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | List


## `authBusinessModelDiagramsCommentsCreate()`

```php
authBusinessModelDiagramsCommentsCreate($diagram, $authBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$authBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsCreate($diagram, $authBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelCommentsApi->authBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **authBusinessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest**](../Model/AuthBusinessModelDiagramsCommentsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsCommentsDelete()`

```php
authBusinessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelCommentsApi->authBusinessModelDiagramsCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**| The ID of an diagram. |
 **comment** | **string**| The ID of an comment. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsCommentsList()`

```php
authBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelCommentsApi->authBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **include** | **string**| Specify a list of includes. | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
