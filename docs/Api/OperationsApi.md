# Stackflows\Clients\Stackflows\OperationsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBusinessModelDiagrams()**](OperationsApi.md#deleteBusinessModelDiagrams) | **DELETE** /api/v2/business-model-diagrams/{diagram_id} | Delete Business Model Diagram
[**deleteBusinessModelDiagramsComments()**](OperationsApi.md#deleteBusinessModelDiagramsComments) | **DELETE** /api/v2/business-model-diagrams/{diagram_id}/comments/{comment_id} | Delete Business Model Diagram Comment
[**deleteBusinessModelExceptions()**](OperationsApi.md#deleteBusinessModelExceptions) | **DELETE** /api/v2/business-model-exceptions/{exception_id} | Delete Business Model Exception
[**deleteBusinessModels()**](OperationsApi.md#deleteBusinessModels) | **DELETE** /api/v2/business-models/{model_id} | Delete Business Model
[**deleteBusinessModelsDeleteBulk()**](OperationsApi.md#deleteBusinessModelsDeleteBulk) | **DELETE** /api/v2/business-models | Delete Business Models
[**deleteBusinessProcesses()**](OperationsApi.md#deleteBusinessProcesses) | **DELETE** /api/v2/business-processes/{tag_id} | Delete Business Process Tag
[**deleteBusinessProcessesDeleteBulk()**](OperationsApi.md#deleteBusinessProcessesDeleteBulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
[**deleteCategories()**](OperationsApi.md#deleteCategories) | **DELETE** /api/v2/categories/{category_id} | Delete Category
[**deleteTags()**](OperationsApi.md#deleteTags) | **DELETE** /api/v2/tags/{tag_id} | Delete Tag
[**deleteTasks()**](OperationsApi.md#deleteTasks) | **DELETE** /api/v2/tasks/{task_id} | Delete Task
[**getBusinessModelDiagramsCommentsList()**](OperationsApi.md#getBusinessModelDiagramsCommentsList) | **GET** /api/v2/business-model-diagrams/{diagram_id}/comments | List Business Model Diagram Comments
[**getBusinessModelDiagramsList()**](OperationsApi.md#getBusinessModelDiagramsList) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
[**getBusinessModelDiagramsShow()**](OperationsApi.md#getBusinessModelDiagramsShow) | **GET** /api/v2/business-model-diagrams/{diagram_id} | View Business Model Diagram
[**getBusinessModelExceptionsList()**](OperationsApi.md#getBusinessModelExceptionsList) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
[**getBusinessModelExceptionsShow()**](OperationsApi.md#getBusinessModelExceptionsShow) | **GET** /api/v2/business-model-exceptions/{exception_id} | View Business Model Exception
[**getBusinessModelPublicationsList()**](OperationsApi.md#getBusinessModelPublicationsList) | **GET** /api/v2/business-model-publications | List Business Model Publications
[**getBusinessModelPublicationsShow()**](OperationsApi.md#getBusinessModelPublicationsShow) | **GET** /api/v2/business-model-publications/{publication_id} | View Business Model Publication
[**getBusinessModelsCommentsList()**](OperationsApi.md#getBusinessModelsCommentsList) | **GET** /api/v2/business-models/{model_id}/comments | List Business Model Comments
[**getBusinessModelsList()**](OperationsApi.md#getBusinessModelsList) | **GET** /api/v2/business-models | List Business Models
[**getBusinessModelsShow()**](OperationsApi.md#getBusinessModelsShow) | **GET** /api/v2/business-models/{model_id} | View Business Model
[**getBusinessModelsShowRevision()**](OperationsApi.md#getBusinessModelsShowRevision) | **GET** /api/v2/business-models/{model_id}/revisions/{revision} | View Business Model Diagram
[**getBusinessModelsShowRevisions()**](OperationsApi.md#getBusinessModelsShowRevisions) | **GET** /api/v2/business-models/{model_id}/revisions | List Business Model Diagrams
[**getBusinessProcessesList()**](OperationsApi.md#getBusinessProcessesList) | **GET** /api/v2/business-processes | List Business Process Tags
[**getBusinessProcessesShow()**](OperationsApi.md#getBusinessProcessesShow) | **GET** /api/v2/business-processes/{tag_id} | View Business Process Tag
[**getCategoriesList()**](OperationsApi.md#getCategoriesList) | **GET** /api/v2/categories | List Categories
[**getCategoriesShow()**](OperationsApi.md#getCategoriesShow) | **GET** /api/v2/categories/{id} | View Category
[**getTagsList()**](OperationsApi.md#getTagsList) | **GET** /api/v2/tags | List Tags
[**getTagsShow()**](OperationsApi.md#getTagsShow) | **GET** /api/v2/tags/{id} | View Tag
[**getTasksList()**](OperationsApi.md#getTasksList) | **GET** /api/v2/tasks | List Tasks
[**getTasksShow()**](OperationsApi.md#getTasksShow) | **GET** /api/v2/tasks/{id} | View Task
[**postBusinessModelDiagramsCommentsCreate()**](OperationsApi.md#postBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/business-model-diagrams/{diagram_id}/comments | Create Business Model Diagram Comment
[**postBusinessModelDiagramsCreate()**](OperationsApi.md#postBusinessModelDiagramsCreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
[**postBusinessModelDiagramsPublish()**](OperationsApi.md#postBusinessModelDiagramsPublish) | **POST** /api/v2/business-model-diagrams/{diagram_id}/publish | Publish Business Model Diagram
[**postBusinessModelExceptionsCreate()**](OperationsApi.md#postBusinessModelExceptionsCreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
[**postBusinessModelsCreate()**](OperationsApi.md#postBusinessModelsCreate) | **POST** /api/v2/business-models | Create Business Model
[**postBusinessModelsPostRevision()**](OperationsApi.md#postBusinessModelsPostRevision) | **POST** /api/v2/business-models/{model_id}/revisions | Submit Business Model Diagram
[**postBusinessModelsTag()**](OperationsApi.md#postBusinessModelsTag) | **POST** /api/v2/business-models/{taggable_id}/tag | Tag Business Model
[**postBusinessProcessesCreate()**](OperationsApi.md#postBusinessProcessesCreate) | **POST** /api/v2/business-processes | Create Business Process Tag
[**postCategoriesCreate()**](OperationsApi.md#postCategoriesCreate) | **POST** /api/v2/categories | Create Category
[**postTagsCreate()**](OperationsApi.md#postTagsCreate) | **POST** /api/v2/tags | Create Tag
[**postTasksCreate()**](OperationsApi.md#postTasksCreate) | **POST** /api/v2/tasks | Create Task
[**putBusinessModelDiagramsUpdate()**](OperationsApi.md#putBusinessModelDiagramsUpdate) | **PUT** /api/v2/business-model-diagrams/{diagram_id} | Update Business Model Diagram
[**putBusinessModelExceptionsUpdate()**](OperationsApi.md#putBusinessModelExceptionsUpdate) | **PUT** /api/v2/business-model-exceptions/{exception_id} | Update Business Model Exception
[**putBusinessModelsUpdate()**](OperationsApi.md#putBusinessModelsUpdate) | **PUT** /api/v2/business-models/{model_id} | Update Business Model
[**putBusinessProcessesUpdate()**](OperationsApi.md#putBusinessProcessesUpdate) | **PUT** /api/v2/business-processes/{tag_id} | Update Business Process Tag
[**putCategoriesUpdate()**](OperationsApi.md#putCategoriesUpdate) | **PUT** /api/v2/categories/{id} | Update Category
[**putTagsUpdate()**](OperationsApi.md#putTagsUpdate) | **PUT** /api/v2/tags/{id} | Update Tag
[**putTasksUpdate()**](OperationsApi.md#putTasksUpdate) | **PUT** /api/v2/tasks/{id} | Update Task


## `deleteBusinessModelDiagrams()`

```php
deleteBusinessModelDiagrams($diagramId): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.

try {
    $result = $apiInstance->deleteBusinessModelDiagrams($diagramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

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
deleteBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment): \Stackflows\Clients\Stackflows\Model\CommentModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$commentId = 1; // int | The ID of the comment.
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.

try {
    $result = $apiInstance->deleteBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelDiagramsComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **commentId** | **int**| The ID of the comment. |
 **diagram** | **string**| The ID of an diagram. |
 **comment** | **string**| The ID of an comment. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentModel**](../Model/CommentModel.md)

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
deleteBusinessModelExceptions($exceptionId): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel
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
$exceptionId = ipsa; // string | The ID of the exception.

try {
    $result = $apiInstance->deleteBusinessModelExceptions($exceptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelExceptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exceptionId** | **string**| The ID of the exception. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel**](../Model/BusinessBaseModelExceptionModel.md)

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
deleteBusinessModels($modelId): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.

try {
    $result = $apiInstance->deleteBusinessModels($modelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel**](../Model/BusinessBaseModelModel.md)

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
deleteBusinessModelsDeleteBulk($deleteBusinessModelsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
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
$deleteBusinessModelsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest

try {
    $result = $apiInstance->deleteBusinessModelsDeleteBulk($deleteBusinessModelsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessModelsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteBusinessModelsDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\DeleteBusinessModelsDeleteBulkRequest**](../Model/DeleteBusinessModelsDeleteBulkRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel**](../Model/BusinessBaseModelModel.md)

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
deleteBusinessProcesses($tagId): \Stackflows\Clients\Stackflows\Model\TagModel
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
$tagId = 3; // int | The ID of the tag.

try {
    $result = $apiInstance->deleteBusinessProcesses($tagId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessProcesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagId** | **int**| The ID of the tag. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
deleteBusinessProcessesDeleteBulk($deleteBusinessProcessesDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\TagModel[]
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
$deleteBusinessProcessesDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest

try {
    $result = $apiInstance->deleteBusinessProcessesDeleteBulk($deleteBusinessProcessesDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteBusinessProcessesDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteBusinessProcessesDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\DeleteBusinessProcessesDeleteBulkRequest**](../Model/DeleteBusinessProcessesDeleteBulkRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel[]**](../Model/TagModel.md)

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
deleteCategories($categoryId): \Stackflows\Clients\Stackflows\Model\CategoryModel
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
$categoryId = 1; // int | The ID of the category.

try {
    $result = $apiInstance->deleteCategories($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| The ID of the category. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryModel**](../Model/CategoryModel.md)

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
deleteTags($tagId): \Stackflows\Clients\Stackflows\Model\TagModel
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
$tagId = 3; // int | The ID of the tag.

try {
    $result = $apiInstance->deleteTags($tagId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagId** | **int**| The ID of the tag. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
deleteTasks($taskId): \Stackflows\Clients\Stackflows\Model\TaskModel
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
$taskId = 4c854360-00e9-11ed-8a17-0910c50463b0; // string | The ID of the task.

try {
    $result = $apiInstance->deleteTasks($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| The ID of the task. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskModel**](../Model/TaskModel.md)

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
getBusinessModelDiagramsCommentsList($diagramId, $include): \Stackflows\Clients\Stackflows\Model\CommentModel[]
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$include = commenter; // string | Specify a list of includes.

try {
    $result = $apiInstance->getBusinessModelDiagramsCommentsList($diagramId, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **include** | **string**| Specify a list of includes. | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentModel[]**](../Model/CommentModel.md)

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
getBusinessModelDiagramsList(): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel[]
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

try {
    $result = $apiInstance->getBusinessModelDiagramsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel[]**](../Model/BusinessProcessModelDiagramModel.md)

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
getBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$includesnapshotsdeploysdeploysStatistics = aut; // string | Possible includes

try {
    $result = $apiInstance->getBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **includesnapshotsdeploysdeploysStatistics** | **string**| Possible includes | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

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
getBusinessModelExceptionsList(): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel[]
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

try {
    $result = $apiInstance->getBusinessModelExceptionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelExceptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel[]**](../Model/BusinessBaseModelExceptionModel.md)

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
getBusinessModelExceptionsShow($exceptionId): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel
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
$exceptionId = ipsa; // string | The ID of the exception.

try {
    $result = $apiInstance->getBusinessModelExceptionsShow($exceptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelExceptionsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exceptionId** | **string**| The ID of the exception. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel**](../Model/BusinessBaseModelExceptionModel.md)

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
getBusinessModelPublicationsList(): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelPublicationModel[]
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

try {
    $result = $apiInstance->getBusinessModelPublicationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelPublicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelPublicationModel[]**](../Model/BusinessProcessModelPublicationModel.md)

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
getBusinessModelPublicationsShow($publicationId, $appendstatisticsoutliers): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelPublicationModel
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
$publicationId = 04d74000-0489-11ed-b709-39eaa3b47ce0; // string | The ID of the publication.
$appendstatisticsoutliers = cum; // string | Possible appends

try {
    $result = $apiInstance->getBusinessModelPublicationsShow($publicationId, $appendstatisticsoutliers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelPublicationsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publicationId** | **string**| The ID of the publication. |
 **appendstatisticsoutliers** | **string**| Possible appends | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelPublicationModel**](../Model/BusinessProcessModelPublicationModel.md)

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
getBusinessModelsCommentsList($modelId, $include): \Stackflows\Clients\Stackflows\Model\CommentModel[]
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$include = commenter; // string | Specify a list of includes.

try {
    $result = $apiInstance->getBusinessModelsCommentsList($modelId, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **include** | **string**| Specify a list of includes. | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentModel[]**](../Model/CommentModel.md)

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
getBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel[]
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
$include = owner,company,category,tags,comments-count,tags-count,diagrams; // string | Possible includes.
$filterWithAnyTags = test-tag,another-test-tag; // string | Will return models that has any of specified tags.
$filterWithoutAnyTags = true; // bool | Will return list of all models that has no tags at all.
$filterAutocomplete = tes; // string | Retrieve list that has \"tes\" at the start of their name.
$filterSearch = tes; // string | Retrieve list that has \"tes\" in their name.
$filterCategories = 1,2; // string | Filter by specific categories.
$filterType = repellat; // string | Filter by specific type. Example process,decision
$filterUncategorized = true; // bool | boolean List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sort = name,-created_at,-updated_at; // string | Sorting by specified criteria.

try {
    $result = $apiInstance->getBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Possible includes. | [optional]
 **filterWithAnyTags** | **string**| Will return models that has any of specified tags. | [optional]
 **filterWithoutAnyTags** | **bool**| Will return list of all models that has no tags at all. | [optional]
 **filterAutocomplete** | **string**| Retrieve list that has \&quot;tes\&quot; at the start of their name. | [optional]
 **filterSearch** | **string**| Retrieve list that has \&quot;tes\&quot; in their name. | [optional]
 **filterCategories** | **string**| Filter by specific categories. | [optional]
 **filterType** | **string**| Filter by specific type. Example process,decision | [optional]
 **filterUncategorized** | **bool**| boolean List only uncategorized process models. | [optional]
 **filterSubscribable** | **bool**| List only subscribable process models. | [optional]
 **sort** | **string**| Sorting by specified criteria. | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel[]**](../Model/BusinessBaseModelModel.md)

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
getBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = sunt; // string | Possible includes

try {
    $result = $apiInstance->getBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **includeownercompanycategorytagscommentsCounttagsCountdiagrams** | **string**| Possible includes | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel**](../Model/BusinessBaseModelModel.md)

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
getBusinessModelsShowRevision($modelId, $revision): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$revision = aspernatur; // string | 

try {
    $result = $apiInstance->getBusinessModelsShowRevision($modelId, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShowRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **revision** | **string**|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel**](../Model/BusinessBaseModelDiagramModel.md)

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
getBusinessModelsShowRevisions($modelId): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel[]
```

List Business Model Diagrams



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.

try {
    $result = $apiInstance->getBusinessModelsShowRevisions($modelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessModelsShowRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel[]**](../Model/BusinessBaseModelDiagramModel.md)

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
getBusinessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt): \Stackflows\Clients\Stackflows\Model\TagModel[]
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
$includeprocessModels = laborum; // string | Will add process models to the response
$includeprocessModelsCount = 3; // int | Will add process models count to the response
$filterAutocompletetes = est; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = ab; // string | Retrieve list that has \"tes\" in their name
$sortnameCreatedAtUpdatedAt = dolorem; // string | Sorting example

try {
    $result = $apiInstance->getBusinessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel[]**](../Model/TagModel.md)

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
getBusinessProcessesShow($tagId, $includeprocessModels, $includeprocessModelsCount): \Stackflows\Clients\Stackflows\Model\TagModel
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
$tagId = 3; // int | The ID of the tag.
$includeprocessModels = magni; // string | Will add process models to the response
$includeprocessModelsCount = 7; // int | Will add process models count to the response

try {
    $result = $apiInstance->getBusinessProcessesShow($tagId, $includeprocessModels, $includeprocessModelsCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getBusinessProcessesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagId** | **int**| The ID of the tag. |
 **includeprocessModels** | **string**| Will add process models to the response | [optional]
 **includeprocessModelsCount** | **int**| Will add process models count to the response | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
getCategoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort): \Stackflows\Clients\Stackflows\Model\CategoryModel[]
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

try {
    $result = $apiInstance->getCategoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryModel[]**](../Model/CategoryModel.md)

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
getCategoriesShow($id): \Stackflows\Clients\Stackflows\Model\CategoryModel
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

try {
    $result = $apiInstance->getCategoriesShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getCategoriesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryModel**](../Model/CategoryModel.md)

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
getTagsList(): \Stackflows\Clients\Stackflows\Model\TagModel[]
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

try {
    $result = $apiInstance->getTagsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTagsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel[]**](../Model/TagModel.md)

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
getTagsShow($id): \Stackflows\Clients\Stackflows\Model\TagModel
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

try {
    $result = $apiInstance->getTagsShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTagsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the tag. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
getTasksList(): \Stackflows\Clients\Stackflows\Model\TaskModel[]
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

try {
    $result = $apiInstance->getTasksList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskModel[]**](../Model/TaskModel.md)

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
getTasksShow($id): \Stackflows\Clients\Stackflows\Model\TaskModel
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
$id = 4c854360-00e9-11ed-8a17-0910c50463b0; // string | The ID of the task.

try {
    $result = $apiInstance->getTasksShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getTasksShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskModel**](../Model/TaskModel.md)

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
postBusinessModelDiagramsCommentsCreate($diagramId, $postBusinessModelDiagramsCommentsCreateRequest): \Stackflows\Clients\Stackflows\Model\CommentModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$postBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest

try {
    $result = $apiInstance->postBusinessModelDiagramsCommentsCreate($diagramId, $postBusinessModelDiagramsCommentsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **postBusinessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsCommentsCreateRequest**](../Model/PostBusinessModelDiagramsCommentsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CommentModel**](../Model/CommentModel.md)

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
postBusinessModelDiagramsCreate($xml, $businessModelId, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
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
$snapshot = "/path/to/file.txt"; // \SplFileObject | of the process diagram

try {
    $result = $apiInstance->postBusinessModelDiagramsCreate($xml, $businessModelId, $snapshot);
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
 **snapshot** | **\SplFileObject****\SplFileObject**| of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

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
postBusinessModelDiagramsPublish($diagramId, $postEnvironmentBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$postEnvironmentBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->postBusinessModelDiagramsPublish($diagramId, $postEnvironmentBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **postEnvironmentBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest**](../Model/PostEnvironmentBusinessModelDiagramsPublishRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

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
postBusinessModelExceptionsCreate($postBusinessModelExceptionsCreateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel
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

try {
    $result = $apiInstance->postBusinessModelExceptionsCreate($postBusinessModelExceptionsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelExceptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postBusinessModelExceptionsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelExceptionsCreateRequest**](../Model/PostBusinessModelExceptionsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel**](../Model/BusinessBaseModelExceptionModel.md)

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
postBusinessModelsCreate($postBusinessModelsCreateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
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

try {
    $result = $apiInstance->postBusinessModelsCreate($postBusinessModelsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postBusinessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelsCreateRequest**](../Model/PostBusinessModelsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel**](../Model/BusinessBaseModelModel.md)

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
postBusinessModelsPostRevision($modelId, $xml, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$xml = 'xml_example'; // string | An xml of a diagram.
$snapshot = "/path/to/file.txt"; // \SplFileObject | A snapshot image of a diagram

try {
    $result = $apiInstance->postBusinessModelsPostRevision($modelId, $xml, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsPostRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **xml** | **string**| An xml of a diagram. |
 **snapshot** | **\SplFileObject****\SplFileObject**| A snapshot image of a diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramModel**](../Model/BusinessBaseModelDiagramModel.md)

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
postBusinessModelsTag($taggableId, $postBusinessModelsTagRequest): \Stackflows\Clients\Stackflows\Model\TagModel
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
$taggableId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the taggable.
$postBusinessModelsTagRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest

try {
    $result = $apiInstance->postBusinessModelsTag($taggableId, $postBusinessModelsTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessModelsTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taggableId** | **string**| The ID of the taggable. |
 **postBusinessModelsTagRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelsTagRequest**](../Model/PostBusinessModelsTagRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
postBusinessProcessesCreate($postBusinessProcessesCreateRequest): \Stackflows\Clients\Stackflows\Model\TagModel
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
$postBusinessProcessesCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest

try {
    $result = $apiInstance->postBusinessProcessesCreate($postBusinessProcessesCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postBusinessProcessesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postBusinessProcessesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessProcessesCreateRequest**](../Model/PostBusinessProcessesCreateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
postCategoriesCreate($postCategoriesCreateRequest): \Stackflows\Clients\Stackflows\Model\CategoryModel
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

try {
    $result = $apiInstance->postCategoriesCreate($postCategoriesCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postCategoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postCategoriesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostCategoriesCreateRequest**](../Model/PostCategoriesCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryModel**](../Model/CategoryModel.md)

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
postTagsCreate($postTagsCreateRequest): \Stackflows\Clients\Stackflows\Model\TagModel
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

try {
    $result = $apiInstance->postTagsCreate($postTagsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postTagsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTagsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTagsCreateRequest**](../Model/PostTagsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
postTasksCreate($postTasksCreateRequest): \Stackflows\Clients\Stackflows\Model\TaskModel
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

try {
    $result = $apiInstance->postTasksCreate($postTasksCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->postTasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTasksCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTasksCreateRequest**](../Model/PostTasksCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskModel**](../Model/TaskModel.md)

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
putBusinessModelDiagramsUpdate($diagramId, $xml, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
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
$diagramId = 139b5820-048d-11ed-a920-d9cc122fb2b1; // string | The ID of the diagram.
$xml = 'xml_example'; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | Snapshot of the process diagram

try {
    $result = $apiInstance->putBusinessModelDiagramsUpdate($diagramId, $xml, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelDiagramsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **xml** | **string**|  |
 **snapshot** | **\SplFileObject****\SplFileObject**| Snapshot of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

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
putBusinessModelExceptionsUpdate($exceptionId, $putBusinessModelExceptionsUpdateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel
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
$exceptionId = ipsa; // string | The ID of the exception.
$putBusinessModelExceptionsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest

try {
    $result = $apiInstance->putBusinessModelExceptionsUpdate($exceptionId, $putBusinessModelExceptionsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelExceptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exceptionId** | **string**| The ID of the exception. |
 **putBusinessModelExceptionsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessModelExceptionsUpdateRequest**](../Model/PutBusinessModelExceptionsUpdateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionModel**](../Model/BusinessBaseModelExceptionModel.md)

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
putBusinessModelsUpdate($modelId, $putBusinessModelsUpdateRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
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
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$putBusinessModelsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest

try {
    $result = $apiInstance->putBusinessModelsUpdate($modelId, $putBusinessModelsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessModelsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **putBusinessModelsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessModelsUpdateRequest**](../Model/PutBusinessModelsUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel**](../Model/BusinessBaseModelModel.md)

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
putBusinessProcessesUpdate($tagId, $putBusinessProcessesUpdateRequest): \Stackflows\Clients\Stackflows\Model\TagModel
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
$tagId = 3; // int | The ID of the tag.
$putBusinessProcessesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest

try {
    $result = $apiInstance->putBusinessProcessesUpdate($tagId, $putBusinessProcessesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putBusinessProcessesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagId** | **int**| The ID of the tag. |
 **putBusinessProcessesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutBusinessProcessesUpdateRequest**](../Model/PutBusinessProcessesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
putCategoriesUpdate($id, $putCategoriesUpdateRequest): \Stackflows\Clients\Stackflows\Model\CategoryModel
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
$putCategoriesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest

try {
    $result = $apiInstance->putCategoriesUpdate($id, $putCategoriesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putCategoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **putCategoriesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutCategoriesUpdateRequest**](../Model/PutCategoriesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryModel**](../Model/CategoryModel.md)

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
putTagsUpdate($id, $putTagsUpdateRequest): \Stackflows\Clients\Stackflows\Model\TagModel
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

try {
    $result = $apiInstance->putTagsUpdate($id, $putTagsUpdateRequest);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\TagModel**](../Model/TagModel.md)

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
putTasksUpdate($id, $putTasksUpdateRequest): \Stackflows\Clients\Stackflows\Model\TaskModel
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
$id = 4c854360-00e9-11ed-8a17-0910c50463b0; // string | The ID of the task.
$putTasksUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest

try {
    $result = $apiInstance->putTasksUpdate($id, $putTasksUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->putTasksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **putTasksUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutTasksUpdateRequest**](../Model/PutTasksUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskModel**](../Model/TaskModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
