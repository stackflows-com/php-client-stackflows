# Stackflows\Clients\Stackflows\OperationsApi

All URIs are relative to https://stage-backoffice.stackflows.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelDiagramsCommentsCreate()**](OperationsApi.md#businessModelDiagramsCommentsCreate) | **POST** /api/v2/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
[**businessModelDiagramsCommentsDelete()**](OperationsApi.md#businessModelDiagramsCommentsDelete) | **DELETE** /api/v2/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
[**businessModelDiagramsCommentsList()**](OperationsApi.md#businessModelDiagramsCommentsList) | **GET** /api/v2/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
[**businessModelDiagramsCreate()**](OperationsApi.md#businessModelDiagramsCreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
[**businessModelDiagramsDelete()**](OperationsApi.md#businessModelDiagramsDelete) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete Business Model Diagram
[**businessModelDiagramsList()**](OperationsApi.md#businessModelDiagramsList) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
[**businessModelDiagramsPublish()**](OperationsApi.md#businessModelDiagramsPublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
[**businessModelDiagramsShow()**](OperationsApi.md#businessModelDiagramsShow) | **GET** /api/v2/business-model-diagrams/{diagram} | View Business Model Diagram
[**businessModelDiagramsUpdate()**](OperationsApi.md#businessModelDiagramsUpdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update Business Model Diagram
[**businessModelExceptionsCreate()**](OperationsApi.md#businessModelExceptionsCreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
[**businessModelExceptionsDelete()**](OperationsApi.md#businessModelExceptionsDelete) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete Business Model Exception
[**businessModelExceptionsList()**](OperationsApi.md#businessModelExceptionsList) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
[**businessModelExceptionsShow()**](OperationsApi.md#businessModelExceptionsShow) | **GET** /api/v2/business-model-exceptions/{exception} | View Business Model Exception
[**businessModelExceptionsUpdate()**](OperationsApi.md#businessModelExceptionsUpdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update Business Model Exception
[**businessModelPublicationsList()**](OperationsApi.md#businessModelPublicationsList) | **GET** /api/v2/business-model-publications | List Business Model Publications
[**businessModelPublicationsShow()**](OperationsApi.md#businessModelPublicationsShow) | **GET** /api/v2/business-model-publications/{publication} | View Business Model Publication
[**businessModelsCommentsList()**](OperationsApi.md#businessModelsCommentsList) | **GET** /api/v2/business-models/{model}/comments | List Business Model Comments
[**businessModelsCreate()**](OperationsApi.md#businessModelsCreate) | **POST** /api/v2/business-models | Create Business Model
[**businessModelsDelete()**](OperationsApi.md#businessModelsDelete) | **DELETE** /api/v2/business-models/{model} | Delete Business Model
[**businessModelsDeleteBulk()**](OperationsApi.md#businessModelsDeleteBulk) | **DELETE** /api/v2/business-models | Delete Business Models
[**businessModelsList()**](OperationsApi.md#businessModelsList) | **GET** /api/v2/business-models | List Business Models
[**businessModelsPostRevision()**](OperationsApi.md#businessModelsPostRevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Business Model Diagram
[**businessModelsShow()**](OperationsApi.md#businessModelsShow) | **GET** /api/v2/business-models/{model} | View Business Model
[**businessModelsShowRevision()**](OperationsApi.md#businessModelsShowRevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Business Model Diagram
[**businessModelsShowRevisions()**](OperationsApi.md#businessModelsShowRevisions) | **GET** /api/v2/business-models/{model}/revisions | List Business Model Disgrams
[**businessModelsTag()**](OperationsApi.md#businessModelsTag) | **POST** /api/v2/business-models/{taggable}/tag | Tag Business Model
[**businessModelsUpdate()**](OperationsApi.md#businessModelsUpdate) | **PUT** /api/v2/business-models/{model} | Update Business Model
[**businessProcessesCreate()**](OperationsApi.md#businessProcessesCreate) | **POST** /api/v2/business-processes | Create Business Process Tag
[**businessProcessesDelete()**](OperationsApi.md#businessProcessesDelete) | **DELETE** /api/v2/business-processes/{tag} | Delete Business Process Tag
[**businessProcessesDeleteBulk()**](OperationsApi.md#businessProcessesDeleteBulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
[**businessProcessesList()**](OperationsApi.md#businessProcessesList) | **GET** /api/v2/business-processes | List Business Process Tags
[**businessProcessesShow()**](OperationsApi.md#businessProcessesShow) | **GET** /api/v2/business-processes/{tag} | View Business Process Tag
[**businessProcessesUpdate()**](OperationsApi.md#businessProcessesUpdate) | **PUT** /api/v2/business-processes/{tag} | Update Business Process Tag
[**categoriesCreate()**](OperationsApi.md#categoriesCreate) | **POST** /api/v2/categories | Create Category
[**categoriesDelete()**](OperationsApi.md#categoriesDelete) | **DELETE** /api/v2/categories/{category} | Delete Category
[**categoriesList()**](OperationsApi.md#categoriesList) | **GET** /api/v2/categories | List Categories
[**categoriesShow()**](OperationsApi.md#categoriesShow) | **GET** /api/v2/categories/{id} | View Category
[**categoriesUpdate()**](OperationsApi.md#categoriesUpdate) | **PUT** /api/v2/categories/{id} | Update Category
[**tagsCreate()**](OperationsApi.md#tagsCreate) | **POST** /api/v2/tags | Create Tag
[**tagsDelete()**](OperationsApi.md#tagsDelete) | **DELETE** /api/v2/tags/{tag} | Delete Tag
[**tagsList()**](OperationsApi.md#tagsList) | **GET** /api/v2/tags | List Tags
[**tagsShow()**](OperationsApi.md#tagsShow) | **GET** /api/v2/tags/{id} | View Tag
[**tagsUpdate()**](OperationsApi.md#tagsUpdate) | **PUT** /api/v2/tags/{id} | Update Tag
[**tasksCreate()**](OperationsApi.md#tasksCreate) | **POST** /api/v2/tasks | Create Task
[**tasksDelete()**](OperationsApi.md#tasksDelete) | **DELETE** /api/v2/tasks/{task} | Delete Task
[**tasksList()**](OperationsApi.md#tasksList) | **GET** /api/v2/tasks | List Tasks
[**tasksShow()**](OperationsApi.md#tasksShow) | **GET** /api/v2/tasks/{id} | View Task
[**tasksUpdate()**](OperationsApi.md#tasksUpdate) | **PUT** /api/v2/tasks/{id} | Update Task


## `businessModelDiagramsCommentsCreate()`

```php
businessModelDiagramsCommentsCreate($diagram, $businessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

Create Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$businessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsCommentsCreate($diagram, $businessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **businessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelDiagramsCommentsCreateRequest**](../Model/BusinessModelDiagramsCommentsCreateRequest.md)|  |
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

## `businessModelDiagramsCommentsDelete()`

```php
businessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

Delete Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsCommentsDelete: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsCommentsList()`

```php
businessModelDiagramsCommentsList($diagram, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

List Business Model Diagram Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsCommentsList($diagram, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsCreate()`

```php
businessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Create Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xml = 'xml_example'; // string | 
$businessModelId = 'businessModelId_example'; // string | 
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | of the process diagram

try {
    $result = $apiInstance->businessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xml** | **string**|  |
 **businessModelId** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **snapshot** | **\SplFileObject****\SplFileObject**| of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelDiagramsDelete()`

```php
businessModelDiagramsDelete($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Delete Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsDelete($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelDiagramsList()`

```php
businessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

List Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelDiagramsPublish()`

```php
businessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Publish Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->businessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **authBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest**](../Model/AuthBusinessModelDiagramsPublishRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelDiagramsShow()`

```php
businessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

View Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$includesnapshotsdeploysdeploysStatistics = ipsum; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **includesnapshotsdeploysdeploysStatistics** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelDiagramsUpdate()`

```php
businessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Update Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$xml = 'xml_example'; // string | 
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | Snapshot of the process diagram

try {
    $result = $apiInstance->businessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelDiagramsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **xml** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **snapshot** | **\SplFileObject****\SplFileObject**| Snapshot of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsCreate()`

```php
businessModelExceptionsCreate($businessModelExceptionsCreateRequest, $contentType, $accept)
```

Create Business Model Exception



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessModelExceptionsCreateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->businessModelExceptionsCreate($businessModelExceptionsCreateRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelExceptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessModelExceptionsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest**](../Model/BusinessModelExceptionsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsDelete()`

```php
businessModelExceptionsDelete($exception, $contentType, $accept)
```

Delete Business Model Exception



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = voluptas; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->businessModelExceptionsDelete($exception, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelExceptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsList()`

```php
businessModelExceptionsList($contentType, $accept)
```

List Business Model Exceptions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->businessModelExceptionsList($contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelExceptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsShow()`

```php
businessModelExceptionsShow($exception, $contentType, $accept)
```

View Business Model Exception



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = voluptas; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->businessModelExceptionsShow($exception, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelExceptionsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsUpdate()`

```php
businessModelExceptionsUpdate($exception, $businessModelExceptionsUpdateRequest, $contentType, $accept)
```

Update Business Model Exception



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = voluptas; // string | 
$businessModelExceptionsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->businessModelExceptionsUpdate($exception, $businessModelExceptionsUpdateRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelExceptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **businessModelExceptionsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest**](../Model/BusinessModelExceptionsUpdateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelPublicationsList()`

```php
businessModelPublicationsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource
```

List Business Model Publications



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelPublicationsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelPublicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource**](../Model/BusinessBaseModelPublicationResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelPublicationsShow()`

```php
businessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource
```

View Business Model Publication



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication = 06782810-b1fd-11ec-aa6d-81d2d76a2f0f; // string | 
$appendstatisticsoutliers = et; // string | Possible appends
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelPublicationsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication** | **string**|  |
 **appendstatisticsoutliers** | **string**| Possible appends | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource**](../Model/BusinessBaseModelPublicationResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsCommentsList()`

```php
businessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

List Business Model Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
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

## `businessModelsCreate()`

```php
businessModelsCreate($businessModelsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Create Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessModelsCreateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsCreate($businessModelsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelsCreateRequest**](../Model/BusinessModelsCreateRequest.md)|  |
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

## `businessModelsDelete()`

```php
businessModelsDelete($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Delete Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsDelete($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsDeleteBulk()`

```php
businessModelsDeleteBulk($contentType, $accept, $businessModelsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Delete Business Models



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessModelsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsDeleteBulkRequest

try {
    $result = $apiInstance->businessModelsDeleteBulk($contentType, $accept, $businessModelsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessModelsDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelsDeleteBulkRequest**](../Model/BusinessModelsDeleteBulkRequest.md)|  | [optional]

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

## `businessModelsList()`

```php
businessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

List Business Models



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = molestiae; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = laudantium; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = eum; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = sint; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = et; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = officia; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = corrupti; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeownercompanycategorytagscommentsCounttagsCountdiagrams** | **string**| Possible includes | [optional]
 **filterWithAnyTagstestTaganotherTestTag** | **string**| Will return models that has any of specified tags | [optional]
 **filterWithoutAnyTags1** | **string**| Will return list of all models that has no tags at all | [optional]
 **filterAutocompletetes** | **string**| Retrieve list that has \&quot;tes\&quot; at the start of their name | [optional]
 **filterSearchtes** | **string**| Retrieve list that has \&quot;tes\&quot; in their name | [optional]
 **filterCategories12** | **string**| Filter by specific categories | [optional]
 **filterUncategorized** | **bool**| List only uncategorized process models. | [optional]
 **filterSubscribable** | **bool**| List only subscribable process models. | [optional]
 **sortnameCreatedAtUpdatedAt** | **string**| Sorting example | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsPostRevision()`

```php
businessModelsPostRevision($model, $xml, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Submit Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$xml = 'xml_example'; // string | An xml of a diagram.
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | A snapshot image of a diagram

try {
    $result = $apiInstance->businessModelsPostRevision($model, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsPostRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **xml** | **string**| An xml of a diagram. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **snapshot** | **\SplFileObject****\SplFileObject**| A snapshot image of a diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsShow()`

```php
businessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

View Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = officiis; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **includeownercompanycategorytagscommentsCounttagsCountdiagrams** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsShowRevision()`

```php
businessModelsShowRevision($model, $revision, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

View Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$revision = dolorem; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShowRevision($model, $revision, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsShowRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **revision** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsShowRevisions()`

```php
businessModelsShowRevisions($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

List Business Model Disgrams



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShowRevisions($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsShowRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsTag()`

```php
businessModelsTag($taggable, $contentType, $accept, $businessModelsTagRequest): \Stackflows\Clients\Stackflows\Model\TagResource
```

Tag Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taggable = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessModelsTagRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsTagRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsTagRequest

try {
    $result = $apiInstance->businessModelsTag($taggable, $contentType, $accept, $businessModelsTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taggable** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessModelsTagRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelsTagRequest**](../Model/BusinessModelsTagRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelsUpdate()`

```php
businessModelsUpdate($model, $contentType, $accept, $businessModelsUpdateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
```

Update Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessModelsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsUpdateRequest

try {
    $result = $apiInstance->businessModelsUpdate($model, $contentType, $accept, $businessModelsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessModelsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessModelsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelsUpdateRequest**](../Model/BusinessModelsUpdateRequest.md)|  | [optional]

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

## `businessProcessesCreate()`

```php
businessProcessesCreate($contentType, $accept, $businessProcessesCreateRequest): \Stackflows\Clients\Stackflows\Model\TagResource
```

Create Business Process Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessProcessesCreateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessProcessesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessProcessesCreateRequest

try {
    $result = $apiInstance->businessProcessesCreate($contentType, $accept, $businessProcessesCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessProcessesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessProcessesCreateRequest**](../Model/BusinessProcessesCreateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessProcessesDelete()`

```php
businessProcessesDelete($tag, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

Delete Business Process Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 6; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesDelete($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessProcessesDeleteBulk()`

```php
businessProcessesDeleteBulk($contentType, $accept, $businessProcessesDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\TagResource
```

Delete Business Process Tags



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessProcessesDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\BusinessProcessesDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessProcessesDeleteBulkRequest

try {
    $result = $apiInstance->businessProcessesDeleteBulk($contentType, $accept, $businessProcessesDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessProcessesDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessProcessesDeleteBulkRequest**](../Model/BusinessProcessesDeleteBulkRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessProcessesList()`

```php
businessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

List Business Process Tags



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeprocessModels = rerum; // string | Will add process models to the response
$includeprocessModelsCount = 13; // int | Will add process models count to the response
$filterAutocompletetes = non; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = nihil; // string | Retrieve list that has \"tes\" in their name
$sortnameCreatedAtUpdatedAt = nostrum; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeprocessModels** | **string**| Will add process models to the response | [optional]
 **includeprocessModelsCount** | **int**| Will add process models count to the response | [optional]
 **filterAutocompletetes** | **string**| Retrieve list that has \&quot;tes\&quot; at the start of their name | [optional]
 **filterSearchtes** | **string**| Retrieve list that has \&quot;tes\&quot; in their name | [optional]
 **sortnameCreatedAtUpdatedAt** | **string**| Sorting example | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessProcessesShow()`

```php
businessProcessesShow($tag, $includeprocessModels, $includeprocessModelsCount, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

View Business Process Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 6; // int | 
$includeprocessModels = ipsam; // string | Will add process models to the response
$includeprocessModelsCount = 7; // int | Will add process models count to the response
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesShow($tag, $includeprocessModels, $includeprocessModelsCount, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **int**|  |
 **includeprocessModels** | **string**| Will add process models to the response | [optional]
 **includeprocessModelsCount** | **int**| Will add process models count to the response | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessProcessesUpdate()`

```php
businessProcessesUpdate($tag, $contentType, $accept, $businessProcessesUpdateRequest): \Stackflows\Clients\Stackflows\Model\TagResource
```

Update Business Process Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 6; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessProcessesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessProcessesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessProcessesUpdateRequest

try {
    $result = $apiInstance->businessProcessesUpdate($tag, $contentType, $accept, $businessProcessesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->businessProcessesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **businessProcessesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessProcessesUpdateRequest**](../Model/BusinessProcessesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesCreate()`

```php
categoriesCreate($categoriesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Create Category



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoriesCreateRequest = new \Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesCreate($categoriesCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->categoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoriesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest**](../Model/CategoriesCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesDelete()`

```php
categoriesDelete($category, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Delete Category



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = 59; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesDelete($category, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->categoriesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesList()`

```php
categoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

List Categories



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filterRoot = true; // bool | Use combination with include=children for full tree list.
$filterSiblings = 145; // int | ID of a category which siblings should be retrieved.
$filterAutocomplete = tes; // string | Autocomplete.
$filterSearch = tes; // string | Search.
$fieldsBusinessProcessLatestDiagram = snapshot; // string | Include fields from the latest release record.
$include = children,business-models,business-models.comments-count,business-models.owner,business-models.latest-diagram; // string | Includes relations.
$filterSearchBusinessModels = Some model; // string | Search categories that has models based on specified keyword.
$sort = name,-created_at,-updated_at Sorting example; // string | Sort by specific field.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->categoriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterRoot** | **bool**| Use combination with include&#x3D;children for full tree list. | [optional]
 **filterSiblings** | **int**| ID of a category which siblings should be retrieved. | [optional]
 **filterAutocomplete** | **string**| Autocomplete. | [optional]
 **filterSearch** | **string**| Search. | [optional]
 **fieldsBusinessProcessLatestDiagram** | **string**| Include fields from the latest release record. | [optional]
 **include** | **string**| Includes relations. | [optional]
 **filterSearchBusinessModels** | **string**| Search categories that has models based on specified keyword. | [optional]
 **sort** | **string**| Sort by specific field. | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesShow()`

```php
categoriesShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

View Category



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 59; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->categoriesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesUpdate()`

```php
categoriesUpdate($id, $contentType, $accept, $categoriesUpdateRequest): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Update Category



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 59; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$categoriesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest

try {
    $result = $apiInstance->categoriesUpdate($id, $contentType, $accept, $categoriesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->categoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **categoriesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest**](../Model/CategoriesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsCreate()`

```php
tagsCreate($tagsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

Create Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tagsCreateRequest = new \Stackflows\Clients\Stackflows\Model\TagsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\TagsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsCreate($tagsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tagsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\TagsCreateRequest**](../Model/TagsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsDelete()`

```php
tagsDelete($tag, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

Delete Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 6; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsDelete($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tagsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsList()`

```php
tagsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

List Tags



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tagsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsShow()`

```php
tagsShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

View Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 6; // int | The ID of the tag.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tagsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the tag. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsUpdate()`

```php
tagsUpdate($id, $tagsUpdateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

Update Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 6; // int | The ID of the tag.
$tagsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\TagsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\TagsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsUpdate($id, $tagsUpdateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tagsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the tag. |
 **tagsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\TagsUpdateRequest**](../Model/TagsUpdateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksCreate()`

```php
tasksCreate($tasksCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Create Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tasksCreateRequest = new \Stackflows\Clients\Stackflows\Model\TasksCreateRequest(); // \Stackflows\Clients\Stackflows\Model\TasksCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksCreate($tasksCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasksCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\TasksCreateRequest**](../Model/TasksCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksDelete()`

```php
tasksDelete($task, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Delete Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task = 0075cf60-e057-11ec-a230-5dad8a23a9e6; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksDelete($task, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tasksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksList()`

```php
tasksList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

List Tasks



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksShow()`

```php
tasksShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

View Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 0075cf60-e057-11ec-a230-5dad8a23a9e6; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tasksShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksUpdate()`

```php
tasksUpdate($id, $contentType, $accept, $tasksUpdateRequest): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Update Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 0075cf60-e057-11ec-a230-5dad8a23a9e6; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$tasksUpdateRequest = new \Stackflows\Clients\Stackflows\Model\TasksUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\TasksUpdateRequest

try {
    $result = $apiInstance->tasksUpdate($id, $contentType, $accept, $tasksUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->tasksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **tasksUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\TasksUpdateRequest**](../Model/TasksUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
