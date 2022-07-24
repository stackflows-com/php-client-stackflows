# Stackflows\Clients\Stackflows\EnvironmentApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnvironmentBusinessModelDiagrams()**](EnvironmentApi.md#deleteEnvironmentBusinessModelDiagrams) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram_id} | Delete Business Model Diagram
[**deleteEnvironmentBusinessModelDiagramsComments()**](EnvironmentApi.md#deleteEnvironmentBusinessModelDiagramsComments) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram_id}/comments/{comment_id} | Delete Business Model Diagram Comment
[**deleteEnvironmentBusinessModels()**](EnvironmentApi.md#deleteEnvironmentBusinessModels) | **DELETE** /api/v2/environment/business-models/{model_id} | Delete Business Model
[**getEnvironmentBusinessModelDiagramsCommentsList()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsCommentsList) | **GET** /api/v2/environment/business-model-diagrams/{diagram_id}/comments | List Business Model Diagram Comments
[**getEnvironmentBusinessModelDiagramsList()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsList) | **GET** /api/v2/environment/business-model-diagrams | List Business Model Diagram
[**getEnvironmentBusinessModelDiagramsShow()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsShow) | **GET** /api/v2/environment/business-model-diagrams/{diagram_id} | View Business Model Diagram
[**getEnvironmentBusinessModelsCommentsList()**](EnvironmentApi.md#getEnvironmentBusinessModelsCommentsList) | **GET** /api/v2/environment/business-models/{model_id}/comments | List Business Model Comments
[**getEnvironmentBusinessModelsList()**](EnvironmentApi.md#getEnvironmentBusinessModelsList) | **GET** /api/v2/environment/business-models | List Business Models
[**getEnvironmentBusinessModelsShow()**](EnvironmentApi.md#getEnvironmentBusinessModelsShow) | **GET** /api/v2/environment/business-models/{model_id} | View Business Model
[**getEnvironmentUserTasksList()**](EnvironmentApi.md#getEnvironmentUserTasksList) | **GET** /api/v2/environment/user-tasks | List User Tasks
[**postEnvironmentBusinessModelDiagramsCommentsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/environment/business-model-diagrams/{diagram_id}/comments | Create Business Model Diagram Comment
[**postEnvironmentBusinessModelDiagramsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsCreate) | **POST** /api/v2/environment/business-model-diagrams | Create Business Model Diagram
[**postEnvironmentBusinessModelDiagramsPublish()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsPublish) | **POST** /api/v2/environment/business-model-diagrams/{diagram_id}/publish | Publish Business Model Diagram
[**postEnvironmentBusinessModelsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelsCreate) | **POST** /api/v2/environment/business-models | Create Business Model
[**postEnvironmentEventsMessage()**](EnvironmentApi.md#postEnvironmentEventsMessage) | **POST** /api/v2/environment/events/message | Send Message
[**postEnvironmentEventsSignal()**](EnvironmentApi.md#postEnvironmentEventsSignal) | **POST** /api/v2/environment/events/signal | Send Message
[**postEnvironmentServiceTasksLock()**](EnvironmentApi.md#postEnvironmentServiceTasksLock) | **POST** /api/v2/environment/service-tasks | Lock Service Tasks
[**postEnvironmentServiceTasksServe()**](EnvironmentApi.md#postEnvironmentServiceTasksServe) | **POST** /api/v2/environment/service-tasks/{reference}/serve | Serve Service Task
[**postEnvironmentServiceTasksUnlock()**](EnvironmentApi.md#postEnvironmentServiceTasksUnlock) | **POST** /api/v2/environment/service-tasks/{reference}/unlock | Unlock Service Task
[**postEnvironmentTaggedBusinessModelsStart()**](EnvironmentApi.md#postEnvironmentTaggedBusinessModelsStart) | **POST** /api/v2/environment/tagged/business-process-models | Starts Business Process Models by Tag
[**postEnvironmentUserTasksComplete()**](EnvironmentApi.md#postEnvironmentUserTasksComplete) | **POST** /api/v2/environment/user-tasks/{id}/complete | Complete User Task
[**postEnvironmentUserTasksErrorize()**](EnvironmentApi.md#postEnvironmentUserTasksErrorize) | **POST** /api/v2/environment/user-tasks/{id}/errorize | Errorize User Task
[**postEnvironmentUserTasksEscalate()**](EnvironmentApi.md#postEnvironmentUserTasksEscalate) | **POST** /api/v2/environment/user-tasks/{id}/escalate | Escalate User Task


## `deleteEnvironmentBusinessModelDiagrams()`

```php
deleteEnvironmentBusinessModelDiagrams($diagramId, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
```

Delete Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = laborum; // string | The ID of the diagram.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagrams($diagramId, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `deleteEnvironmentBusinessModelDiagramsComments()`

```php
deleteEnvironmentBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentModel
```

Delete Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = tempora; // string | The ID of the diagram.
$commentId = 15; // int | The ID of the comment.
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagramsComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **commentId** | **int**| The ID of the comment. |
 **diagram** | **string**| The ID of an diagram. |
 **comment** | **string**| The ID of an comment. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `deleteEnvironmentBusinessModels()`

```php
deleteEnvironmentBusinessModels($modelId, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
```

Delete Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelId = nihil; // string | The ID of the model.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModels($modelId, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelDiagramsCommentsList()`

```php
getEnvironmentBusinessModelDiagramsCommentsList($diagramId, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentModel[]
```

List Business Model Diagram Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = blanditiis; // string | The ID of the diagram.
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsCommentsList($diagramId, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **include** | **string**| Specify a list of includes. | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelDiagramsList()`

```php
getEnvironmentBusinessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel[]
```

List Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelDiagramsShow()`

```php
getEnvironmentBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
```

View Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = laborum; // string | The ID of the diagram.
$includesnapshotsdeploysdeploysStatistics = qui; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **includesnapshotsdeploysdeploysStatistics** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelsCommentsList()`

```php
getEnvironmentBusinessModelsCommentsList($modelId, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentModel[]
```

List Business Model Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelId = inventore; // string | The ID of the model.
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsCommentsList($modelId, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **include** | **string**| Specify a list of includes. | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelsList()`

```php
getEnvironmentBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel[]
```

List Business Models



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
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
$filterType = voluptatem; // string | Filter by specific type. Example process,decision
$filterUncategorized = true; // bool | boolean List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sort = name,-created_at,-updated_at; // string | Sorting by specified criteria.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsList: ', $e->getMessage(), PHP_EOL;
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
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentBusinessModelsShow()`

```php
getEnvironmentBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
```

View Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelId = nihil; // string | The ID of the model.
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = odit; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |
 **includeownercompanycategorytagscommentsCounttagsCountdiagrams** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `getEnvironmentUserTasksList()`

```php
getEnvironmentUserTasksList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskType[]
```

List User Tasks



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentUserTasksList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentUserTasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserTaskType[]**](../Model/UserTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelDiagramsCommentsCreate()`

```php
postEnvironmentBusinessModelDiagramsCommentsCreate($diagramId, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentModel
```

Create Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = blanditiis; // string | The ID of the diagram.
$postEnvironmentBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsCommentsCreate($diagramId, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **postEnvironmentBusinessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest**](../Model/PostEnvironmentBusinessModelDiagramsCommentsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `postEnvironmentBusinessModelDiagramsCreate()`

```php
postEnvironmentBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
```

Create Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
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
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel**](../Model/BusinessProcessModelDiagramModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelDiagramsPublish()`

```php
postEnvironmentBusinessModelDiagramsPublish($diagramId, $contentType, $accept, $postEnvironmentBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelDiagramModel
```

Publish Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagramId = quia; // string | The ID of the diagram.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$postEnvironmentBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsPublish($diagramId, $contentType, $accept, $postEnvironmentBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
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

## `postEnvironmentBusinessModelsCreate()`

```php
postEnvironmentBusinessModelsCreate($postEnvironmentBusinessModelsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelModel
```

Create Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postEnvironmentBusinessModelsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentBusinessModelsCreate($postEnvironmentBusinessModelsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentBusinessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest**](../Model/PostEnvironmentBusinessModelsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `postEnvironmentEventsMessage()`

```php
postEnvironmentEventsMessage($postEnvironmentEventsMessageRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EventType
```

Send Message



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postEnvironmentEventsMessageRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentEventsMessage($postEnvironmentEventsMessageRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentEventsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentEventsMessageRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest**](../Model/PostEnvironmentEventsMessageRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EventType**](../Model/EventType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentEventsSignal()`

```php
postEnvironmentEventsSignal($postEnvironmentEventsSignalRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EventType
```

Send Message



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postEnvironmentEventsSignalRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentEventsSignal($postEnvironmentEventsSignalRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentEventsSignal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentEventsSignalRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest**](../Model/PostEnvironmentEventsSignalRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EventType**](../Model/EventType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksLock()`

```php
postEnvironmentServiceTasksLock($postEnvironmentServiceTasksLockRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskType[]
```

Lock Service Tasks



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postEnvironmentServiceTasksLockRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentServiceTasksLock($postEnvironmentServiceTasksLockRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentServiceTasksLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentServiceTasksLockRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest**](../Model/PostEnvironmentServiceTasksLockRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskType[]**](../Model/ServiceTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksServe()`

```php
postEnvironmentServiceTasksServe($reference, $postEnvironmentServiceTasksServeRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskType
```

Serve Service Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$postEnvironmentServiceTasksServeRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksServeRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksServeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentServiceTasksServe($reference, $postEnvironmentServiceTasksServeRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentServiceTasksServe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **postEnvironmentServiceTasksServeRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksServeRequest**](../Model/PostEnvironmentServiceTasksServeRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskType**](../Model/ServiceTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksUnlock()`

```php
postEnvironmentServiceTasksUnlock($reference, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskType
```

Unlock Service Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentServiceTasksUnlock($reference, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentServiceTasksUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskType**](../Model/ServiceTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentTaggedBusinessModelsStart()`

```php
postEnvironmentTaggedBusinessModelsStart($postEnvironmentTaggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessProcessModelModel[]
```

Starts Business Process Models by Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postEnvironmentTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentTaggedBusinessModelsStart($postEnvironmentTaggedBusinessModelsStartRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentTaggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest**](../Model/PostEnvironmentTaggedBusinessModelsStartRequest.md)|  |
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

## `postEnvironmentUserTasksComplete()`

```php
postEnvironmentUserTasksComplete($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskType
```

Complete User Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 32489ac2-800a-11ec-1234-0242ac120002; // string | The id of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentUserTasksComplete($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentUserTasksComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserTaskType**](../Model/UserTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentUserTasksErrorize()`

```php
postEnvironmentUserTasksErrorize($id, $postEnvironmentUserTasksErrorizeRequest, $contentType, $accept)
```

Errorize User Task

Reports a business error in the context of a running task by id. The error code must be specified to identify the BPMN error handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$postEnvironmentUserTasksErrorizeRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->postEnvironmentUserTasksErrorize($id, $postEnvironmentUserTasksErrorizeRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentUserTasksErrorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **postEnvironmentUserTasksErrorizeRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest**](../Model/PostEnvironmentUserTasksErrorizeRequest.md)|  |
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

## `postEnvironmentUserTasksEscalate()`

```php
postEnvironmentUserTasksEscalate($id, $postEnvironmentUserTasksEscalateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskType
```

Escalate User Task

Reports an escalation in the context of a running task by id. The escalation code must be specified to identify the escalation handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$postEnvironmentUserTasksEscalateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksEscalateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksEscalateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentUserTasksEscalate($id, $postEnvironmentUserTasksEscalateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentUserTasksEscalate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **postEnvironmentUserTasksEscalateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksEscalateRequest**](../Model/PostEnvironmentUserTasksEscalateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserTaskType**](../Model/UserTaskType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
