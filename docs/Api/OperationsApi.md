# Stackflows\Clients\Stackflows\OperationsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBusinessModelDiagrams()**](OperationsApi.md#deleteBusinessModelDiagrams) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete Business Model Diagram
[**deleteBusinessModelDiagramsComments()**](OperationsApi.md#deleteBusinessModelDiagramsComments) | **DELETE** /api/v2/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
[**deleteBusinessModelExceptions()**](OperationsApi.md#deleteBusinessModelExceptions) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete Business Model Exception
[**deleteBusinessModels()**](OperationsApi.md#deleteBusinessModels) | **DELETE** /api/v2/business-models/{model} | Delete Business Model
[**deleteBusinessModelsDeleteBulk()**](OperationsApi.md#deleteBusinessModelsDeleteBulk) | **DELETE** /api/v2/business-models | Delete Business Models
[**deleteBusinessProcesses()**](OperationsApi.md#deleteBusinessProcesses) | **DELETE** /api/v2/business-processes/{tag} | Delete Business Process Tag
[**deleteBusinessProcessesDeleteBulk()**](OperationsApi.md#deleteBusinessProcessesDeleteBulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
[**deleteCategories()**](OperationsApi.md#deleteCategories) | **DELETE** /api/v2/categories/{category} | Delete Category
[**deleteTags()**](OperationsApi.md#deleteTags) | **DELETE** /api/v2/tags/{tag} | Delete Tag
[**deleteTasks()**](OperationsApi.md#deleteTasks) | **DELETE** /api/v2/tasks/{task} | Delete Task
[**getBusinessModelDiagramsCommentsList()**](OperationsApi.md#getBusinessModelDiagramsCommentsList) | **GET** /api/v2/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
[**getBusinessModelDiagramsList()**](OperationsApi.md#getBusinessModelDiagramsList) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
[**getBusinessModelDiagramsShow()**](OperationsApi.md#getBusinessModelDiagramsShow) | **GET** /api/v2/business-model-diagrams/{diagram} | View Business Model Diagram
[**getBusinessModelExceptionsList()**](OperationsApi.md#getBusinessModelExceptionsList) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
[**getBusinessModelExceptionsShow()**](OperationsApi.md#getBusinessModelExceptionsShow) | **GET** /api/v2/business-model-exceptions/{exception} | View Business Model Exception
[**getBusinessModelPublicationsList()**](OperationsApi.md#getBusinessModelPublicationsList) | **GET** /api/v2/business-model-publications | List Business Model Publications
[**getBusinessModelPublicationsShow()**](OperationsApi.md#getBusinessModelPublicationsShow) | **GET** /api/v2/business-model-publications/{publication} | View Business Model Publication
[**getBusinessModelsCommentsList()**](OperationsApi.md#getBusinessModelsCommentsList) | **GET** /api/v2/business-models/{model}/comments | List Business Model Comments
[**getBusinessModelsList()**](OperationsApi.md#getBusinessModelsList) | **GET** /api/v2/business-models | List Business Models
[**getBusinessModelsShow()**](OperationsApi.md#getBusinessModelsShow) | **GET** /api/v2/business-models/{model} | View Business Model
[**getBusinessModelsShowRevision()**](OperationsApi.md#getBusinessModelsShowRevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Business Model Diagram
[**getBusinessModelsShowRevisions()**](OperationsApi.md#getBusinessModelsShowRevisions) | **GET** /api/v2/business-models/{model}/revisions | List Business Model Disgrams
[**getBusinessProcessesList()**](OperationsApi.md#getBusinessProcessesList) | **GET** /api/v2/business-processes | List Business Process Tags
[**getBusinessProcessesShow()**](OperationsApi.md#getBusinessProcessesShow) | **GET** /api/v2/business-processes/{tag} | View Business Process Tag
[**getCategoriesList()**](OperationsApi.md#getCategoriesList) | **GET** /api/v2/categories | List Categories
[**getCategoriesShow()**](OperationsApi.md#getCategoriesShow) | **GET** /api/v2/categories/{id} | View Category
[**getTagsList()**](OperationsApi.md#getTagsList) | **GET** /api/v2/tags | List Tags
[**getTagsShow()**](OperationsApi.md#getTagsShow) | **GET** /api/v2/tags/{id} | View Tag
[**getTasksList()**](OperationsApi.md#getTasksList) | **GET** /api/v2/tasks | List Tasks
[**getTasksShow()**](OperationsApi.md#getTasksShow) | **GET** /api/v2/tasks/{id} | View Task
[**postBusinessModelDiagramsCommentsCreate()**](OperationsApi.md#postBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
[**postBusinessModelDiagramsCreate()**](OperationsApi.md#postBusinessModelDiagramsCreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
[**postBusinessModelDiagramsPublish()**](OperationsApi.md#postBusinessModelDiagramsPublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
[**postBusinessModelExceptionsCreate()**](OperationsApi.md#postBusinessModelExceptionsCreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
[**postBusinessModelsCreate()**](OperationsApi.md#postBusinessModelsCreate) | **POST** /api/v2/business-models | Create Business Model
[**postBusinessModelsPostRevision()**](OperationsApi.md#postBusinessModelsPostRevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Business Model Diagram
[**postBusinessModelsTag()**](OperationsApi.md#postBusinessModelsTag) | **POST** /api/v2/business-models/{taggable}/tag | Tag Business Model
[**postBusinessProcessesCreate()**](OperationsApi.md#postBusinessProcessesCreate) | **POST** /api/v2/business-processes | Create Business Process Tag
[**postCategoriesCreate()**](OperationsApi.md#postCategoriesCreate) | **POST** /api/v2/categories | Create Category
[**postTagsCreate()**](OperationsApi.md#postTagsCreate) | **POST** /api/v2/tags | Create Tag
[**postTasksCreate()**](OperationsApi.md#postTasksCreate) | **POST** /api/v2/tasks | Create Task
[**putBusinessModelDiagramsUpdate()**](OperationsApi.md#putBusinessModelDiagramsUpdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update Business Model Diagram
[**putBusinessModelExceptionsUpdate()**](OperationsApi.md#putBusinessModelExceptionsUpdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update Business Model Exception
[**putBusinessModelsUpdate()**](OperationsApi.md#putBusinessModelsUpdate) | **PUT** /api/v2/business-models/{model} | Update Business Model
[**putBusinessProcessesUpdate()**](OperationsApi.md#putBusinessProcessesUpdate) | **PUT** /api/v2/business-processes/{tag} | Update Business Process Tag
[**putCategoriesUpdate()**](OperationsApi.md#putCategoriesUpdate) | **PUT** /api/v2/categories/{id} | Update Category
[**putTagsUpdate()**](OperationsApi.md#putTagsUpdate) | **PUT** /api/v2/tags/{id} | Update Tag
[**putTasksUpdate()**](OperationsApi.md#putTasksUpdate) | **PUT** /api/v2/tasks/{id} | Update Task


## `deleteBusinessModelDiagrams()`

```php
deleteBusinessModelDiagrams($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteBusinessModelDiagrams($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
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

## `deleteBusinessModelDiagramsComments()`

```php
deleteBusinessModelDiagramsComments($diagram, $comment, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
    $result = $apiInstance->deleteBusinessModelDiagramsComments($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelDiagramsComments: ', $e->getMessage(), PHP_EOL;
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

## `deleteBusinessModelExceptions()`

```php
deleteBusinessModelExceptions($exception, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
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
$exception = provident; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteBusinessModelExceptions($exception, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelExceptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessModels()`

```php
deleteBusinessModels($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteBusinessModels($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModels: ', $e->getMessage(), PHP_EOL;
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

## `deleteBusinessModelsDeleteBulk()`

```php
deleteBusinessModelsDeleteBulk($contentType, $accept, $deleteBusinessModelsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$deleteBusinessModelsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest

try {
    $result = $apiInstance->deleteBusinessModelsDeleteBulk($contentType, $accept, $deleteBusinessModelsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **deleteBusinessModelsDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest**](../Model/DeleteBusinessModelsDeleteBulkRequest.md)|  | [optional]

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

## `deleteBusinessProcesses()`

```php
deleteBusinessProcesses($tag, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteBusinessProcesses($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessProcesses: ', $e->getMessage(), PHP_EOL;
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

## `deleteBusinessProcessesDeleteBulk()`

```php
deleteBusinessProcessesDeleteBulk($contentType, $accept, $deleteBusinessProcessesDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\TagResource[]
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
$deleteBusinessProcessesDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest

try {
    $result = $apiInstance->deleteBusinessProcessesDeleteBulk($contentType, $accept, $deleteBusinessProcessesDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessProcessesDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **deleteBusinessProcessesDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest**](../Model/DeleteBusinessProcessesDeleteBulkRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource[]**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategories()`

```php
deleteCategories($category, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
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
$category = 1; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteCategories($category, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteCategories: ', $e->getMessage(), PHP_EOL;
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

## `deleteTags()`

```php
deleteTags($tag, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteTags($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteTags: ', $e->getMessage(), PHP_EOL;
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

## `deleteTasks()`

```php
deleteTasks($task, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
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
$task = 072340a0-cb16-11ec-a209-551de44835a2; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteTasks($task, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteTasks: ', $e->getMessage(), PHP_EOL;
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

## `getBusinessModelDiagramsCommentsList()`

```php
getBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource[]
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\CommentResource[]**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelDiagramsList()`

```php
getBusinessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource[]
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
    $result = $apiInstance->getBusinessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource[]**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelDiagramsShow()`

```php
getBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$includesnapshotsdeploysdeploysStatistics = qui; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
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

## `getBusinessModelExceptionsList()`

```php
getBusinessModelExceptionsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource[]
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
    $result = $apiInstance->getBusinessModelExceptionsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelExceptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource[]**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelExceptionsShow()`

```php
getBusinessModelExceptionsShow($exception, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
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
$exception = provident; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelExceptionsShow($exception, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelExceptionsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelPublicationsList()`

```php
getBusinessModelPublicationsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource[]
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
    $result = $apiInstance->getBusinessModelPublicationsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelPublicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource[]**](../Model/BusinessBaseModelPublicationResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelPublicationsShow()`

```php
getBusinessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource
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
$publication = 25027da0-d893-11ec-85cc-f181a6cfaf8e; // string | 
$appendstatisticsoutliers = ea; // string | Possible appends
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelPublicationsShow: ', $e->getMessage(), PHP_EOL;
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

## `getBusinessModelsCommentsList()`

```php
getBusinessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource[]
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\CommentResource[]**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelsList()`

```php
getBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]
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
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = cum; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = eligendi; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = consequatur; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = sint; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = et; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = veniam; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = officia; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]**](../Model/BusinessBaseModelResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessModelsShow()`

```php
getBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = tenetur; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
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

## `getBusinessModelsShowRevision()`

```php
getBusinessModelsShowRevision($model, $revision, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$revision = dolores; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelsShowRevision($model, $revision, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShowRevision: ', $e->getMessage(), PHP_EOL;
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

## `getBusinessModelsShowRevisions()`

```php
getBusinessModelsShowRevisions($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource[]
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessModelsShowRevisions($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShowRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource[]**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessProcessesList()`

```php
getBusinessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource[]
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
$includeprocessModels = veniam; // string | Will add process models to the response
$includeprocessModelsCount = 18; // int | Will add process models count to the response
$filterAutocompletetes = cum; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = sit; // string | Retrieve list that has \"tes\" in their name
$sortnameCreatedAtUpdatedAt = magni; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessProcessesList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\TagResource[]**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessProcessesShow()`

```php
getBusinessProcessesShow($tag, $includeprocessModels, $includeprocessModelsCount, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$tag = 3; // int | 
$includeprocessModels = nam; // string | Will add process models to the response
$includeprocessModelsCount = 8; // int | Will add process models count to the response
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getBusinessProcessesShow($tag, $includeprocessModels, $includeprocessModelsCount, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessProcessesShow: ', $e->getMessage(), PHP_EOL;
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

## `getCategoriesList()`

```php
getCategoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource[]
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
    $result = $apiInstance->getCategoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getCategoriesList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\CategoryResource[]**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesShow()`

```php
getCategoriesShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
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
$id = 1; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getCategoriesShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getCategoriesShow: ', $e->getMessage(), PHP_EOL;
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

## `getTagsList()`

```php
getTagsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource[]
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
    $result = $apiInstance->getTagsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTagsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagResource[]**](../Model/TagResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsShow()`

```php
getTagsShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$id = 3; // int | The ID of the tag.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getTagsShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTagsShow: ', $e->getMessage(), PHP_EOL;
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

## `getTasksList()`

```php
getTasksList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource[]
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
    $result = $apiInstance->getTasksList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource[]**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTasksShow()`

```php
getTasksShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
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
$id = 072340a0-cb16-11ec-a209-551de44835a2; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getTasksShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTasksShow: ', $e->getMessage(), PHP_EOL;
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

## `postBusinessModelDiagramsCommentsCreate()`

```php
postBusinessModelDiagramsCommentsCreate($diagram, $postBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$postBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postBusinessModelDiagramsCommentsCreate($diagram, $postBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **postBusinessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest**](../Model/PostBusinessModelDiagramsCommentsCreateRequest.md)|  |
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

## `postBusinessModelDiagramsCreate()`

```php
postBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
    $result = $apiInstance->postBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
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

## `postBusinessModelDiagramsPublish()`

```php
postBusinessModelDiagramsPublish($diagram, $contentType, $accept, $postEnvironmentBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$postEnvironmentBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->postBusinessModelDiagramsPublish($diagram, $contentType, $accept, $postEnvironmentBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **postEnvironmentBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest**](../Model/PostEnvironmentBusinessModelDiagramsPublishRequest.md)|  | [optional]

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

## `postBusinessModelExceptionsCreate()`

```php
postBusinessModelExceptionsCreate($postBusinessModelExceptionsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
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
$postBusinessModelExceptionsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelExceptionsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelExceptionsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postBusinessModelExceptionsCreate($postBusinessModelExceptionsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelExceptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postBusinessModelExceptionsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelExceptionsCreateRequest**](../Model/PostBusinessModelExceptionsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBusinessModelsCreate()`

```php
postBusinessModelsCreate($postBusinessModelsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$postBusinessModelsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postBusinessModelsCreate($postBusinessModelsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postBusinessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelsCreateRequest**](../Model/PostBusinessModelsCreateRequest.md)|  |
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

## `postBusinessModelsPostRevision()`

```php
postBusinessModelsPostRevision($model, $xml, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$xml = 'xml_example'; // string | An xml of a diagram.
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | A snapshot image of a diagram

try {
    $result = $apiInstance->postBusinessModelsPostRevision($model, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsPostRevision: ', $e->getMessage(), PHP_EOL;
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

## `postBusinessModelsTag()`

```php
postBusinessModelsTag($taggable, $contentType, $accept, $postBusinessModelsTagRequest): \Stackflows\Clients\Stackflows\Model\TagResource
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
$taggable = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$postBusinessModelsTagRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest

try {
    $result = $apiInstance->postBusinessModelsTag($taggable, $contentType, $accept, $postBusinessModelsTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taggable** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **postBusinessModelsTagRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest**](../Model/PostBusinessModelsTagRequest.md)|  | [optional]

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

## `postBusinessProcessesCreate()`

```php
postBusinessProcessesCreate($contentType, $accept, $postBusinessProcessesCreateRequest): \Stackflows\Clients\Stackflows\Model\TagResource
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
$postBusinessProcessesCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest

try {
    $result = $apiInstance->postBusinessProcessesCreate($contentType, $accept, $postBusinessProcessesCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessProcessesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **postBusinessProcessesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest**](../Model/PostBusinessProcessesCreateRequest.md)|  | [optional]

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

## `postCategoriesCreate()`

```php
postCategoriesCreate($postCategoriesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
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
$postCategoriesCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostCategoriesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostCategoriesCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postCategoriesCreate($postCategoriesCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postCategoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postCategoriesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostCategoriesCreateRequest**](../Model/PostCategoriesCreateRequest.md)|  |
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

## `postTagsCreate()`

```php
postTagsCreate($postTagsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$postTagsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostTagsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostTagsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postTagsCreate($postTagsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postTagsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTagsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTagsCreateRequest**](../Model/PostTagsCreateRequest.md)|  |
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

## `postTasksCreate()`

```php
postTasksCreate($postTasksCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
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
$postTasksCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostTasksCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostTasksCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postTasksCreate($postTasksCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postTasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTasksCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTasksCreateRequest**](../Model/PostTasksCreateRequest.md)|  |
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

## `putBusinessModelDiagramsUpdate()`

```php
putBusinessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$xml = 'xml_example'; // string | 
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | Snapshot of the process diagram

try {
    $result = $apiInstance->putBusinessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelDiagramsUpdate: ', $e->getMessage(), PHP_EOL;
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

## `putBusinessModelExceptionsUpdate()`

```php
putBusinessModelExceptionsUpdate($exception, $putBusinessModelExceptionsUpdateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
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
$exception = provident; // string | 
$putBusinessModelExceptionsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->putBusinessModelExceptionsUpdate($exception, $putBusinessModelExceptionsUpdateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelExceptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **putBusinessModelExceptionsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest**](../Model/PutBusinessModelExceptionsUpdateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBusinessModelsUpdate()`

```php
putBusinessModelsUpdate($model, $contentType, $accept, $putBusinessModelsUpdateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putBusinessModelsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest

try {
    $result = $apiInstance->putBusinessModelsUpdate($model, $contentType, $accept, $putBusinessModelsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putBusinessModelsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest**](../Model/PutBusinessModelsUpdateRequest.md)|  | [optional]

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

## `putBusinessProcessesUpdate()`

```php
putBusinessProcessesUpdate($tag, $contentType, $accept, $putBusinessProcessesUpdateRequest): \Stackflows\Clients\Stackflows\Model\TagResource
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
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putBusinessProcessesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest

try {
    $result = $apiInstance->putBusinessProcessesUpdate($tag, $contentType, $accept, $putBusinessProcessesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessProcessesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putBusinessProcessesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest**](../Model/PutBusinessProcessesUpdateRequest.md)|  | [optional]

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

## `putCategoriesUpdate()`

```php
putCategoriesUpdate($id, $contentType, $accept, $putCategoriesUpdateRequest): \Stackflows\Clients\Stackflows\Model\CategoryResource
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
$id = 1; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putCategoriesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest

try {
    $result = $apiInstance->putCategoriesUpdate($id, $contentType, $accept, $putCategoriesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putCategoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putCategoriesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest**](../Model/PutCategoriesUpdateRequest.md)|  | [optional]

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

## `putTagsUpdate()`

```php
putTagsUpdate($id, $putTagsUpdateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
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
$id = 3; // int | The ID of the tag.
$putTagsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutTagsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutTagsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->putTagsUpdate($id, $putTagsUpdateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putTagsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the tag. |
 **putTagsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutTagsUpdateRequest**](../Model/PutTagsUpdateRequest.md)|  |
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

## `putTasksUpdate()`

```php
putTasksUpdate($id, $contentType, $accept, $putTasksUpdateRequest): \Stackflows\Clients\Stackflows\Model\TaskResource
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
$id = 072340a0-cb16-11ec-a209-551de44835a2; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putTasksUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest

try {
    $result = $apiInstance->putTasksUpdate($id, $contentType, $accept, $putTasksUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putTasksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putTasksUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest**](../Model/PutTasksUpdateRequest.md)|  | [optional]

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
