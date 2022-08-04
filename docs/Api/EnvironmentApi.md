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
[**getEnvironmentUserTasksView()**](EnvironmentApi.md#getEnvironmentUserTasksView) | **GET** /api/v2/environment/user-tasks/{id} | View User Task
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
deleteEnvironmentBusinessModelDiagrams($diagramId): \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelDiagramResponse
```

Delete Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagrams($diagramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\DeleteBusinessModelDiagramResponse**](../Model/DeleteBusinessModelDiagramResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentBusinessModelDiagramsComments()`

```php
deleteEnvironmentBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment): \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelDiagramCommentResponse
```

Delete Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.
$commentId = 1; // int | The ID of the comment.
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagramsComments($diagramId, $commentId, $diagram, $comment);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\DeleteBusinessModelDiagramCommentResponse**](../Model/DeleteBusinessModelDiagramCommentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentBusinessModels()`

```php
deleteEnvironmentBusinessModels($modelId): \Stackflows\Clients\Stackflows\Model\DeleteBusinessModelResponse
```

Delete Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.

try {
    $result = $apiInstance->deleteEnvironmentBusinessModels($modelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelId** | **string**| The ID of the model. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\DeleteBusinessModelResponse**](../Model/DeleteBusinessModelResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelDiagramsCommentsList()`

```php
getEnvironmentBusinessModelDiagramsCommentsList($diagramId, $include): \Stackflows\Clients\Stackflows\Model\ListBusinessModelDiagramCommentsResponse
```

List Business Model Diagram Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.
$include = commenter; // string | Specify a list of includes.

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsCommentsList($diagramId, $include);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListBusinessModelDiagramCommentsResponse**](../Model/ListBusinessModelDiagramCommentsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelDiagramsList()`

```php
getEnvironmentBusinessModelDiagramsList(): \Stackflows\Clients\Stackflows\Model\ListBusinessModelDiagramResponse
```

List Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListBusinessModelDiagramResponse**](../Model/ListBusinessModelDiagramResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelDiagramsShow()`

```php
getEnvironmentBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics): \Stackflows\Clients\Stackflows\Model\ViewBusinessModelDiagramResponse
```

View Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.
$includesnapshotsdeploysdeploysStatistics = reiciendis; // string | Possible includes

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsShow($diagramId, $includesnapshotsdeploysdeploysStatistics);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ViewBusinessModelDiagramResponse**](../Model/ViewBusinessModelDiagramResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelsCommentsList()`

```php
getEnvironmentBusinessModelsCommentsList($modelId, $include): \Stackflows\Clients\Stackflows\Model\ListBusinessModelCommentsResponse
```

List Business Model Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$include = commenter; // string | Specify a list of includes.

try {
    $result = $apiInstance->getEnvironmentBusinessModelsCommentsList($modelId, $include);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListBusinessModelCommentsResponse**](../Model/ListBusinessModelCommentsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelsList()`

```php
getEnvironmentBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort): \Stackflows\Clients\Stackflows\Model\ListBusinessModelsResponse
```

List Business Models



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = owner,company,category,tags,comments-count,tags-count,diagrams; // string | Possible includes.
$filterWithAnyTags = test-tag,another-test-tag; // string | Will return models that has any of specified tags.
$filterWithoutAnyTags = true; // bool | Will return list of all models that has no tags at all.
$filterAutocomplete = tes; // string | Retrieve list that has \"tes\" at the start of their name.
$filterSearch = tes; // string | Retrieve list that has \"tes\" in their name.
$filterCategories = 1,2; // string | Filter by specific categories.
$filterType = dolores; // string | Filter by specific type. Example process,decision
$filterUncategorized = true; // bool | boolean List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sort = name,-created_at,-updated_at; // string | Sorting by specified criteria.

try {
    $result = $apiInstance->getEnvironmentBusinessModelsList($include, $filterWithAnyTags, $filterWithoutAnyTags, $filterAutocomplete, $filterSearch, $filterCategories, $filterType, $filterUncategorized, $filterSubscribable, $sort);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListBusinessModelsResponse**](../Model/ListBusinessModelsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentBusinessModelsShow()`

```php
getEnvironmentBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams): \Stackflows\Clients\Stackflows\Model\ViewBusinessModelResponse
```

View Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modelId = 1244a4d0-03f6-11ed-8757-598213407c67; // string | The ID of the model.
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = inventore; // string | Possible includes

try {
    $result = $apiInstance->getEnvironmentBusinessModelsShow($modelId, $includeownercompanycategorytagscommentsCounttagsCountdiagrams);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ViewBusinessModelResponse**](../Model/ViewBusinessModelResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentUserTasksList()`

```php
getEnvironmentUserTasksList($getEnvironmentUserTasksListRequest): \Stackflows\Clients\Stackflows\Model\ListUserTasksResponse
```

List User Tasks



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getEnvironmentUserTasksListRequest = new \Stackflows\Clients\Stackflows\Model\GetEnvironmentUserTasksListRequest(); // \Stackflows\Clients\Stackflows\Model\GetEnvironmentUserTasksListRequest

try {
    $result = $apiInstance->getEnvironmentUserTasksList($getEnvironmentUserTasksListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentUserTasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getEnvironmentUserTasksListRequest** | [**\Stackflows\Clients\Stackflows\Model\GetEnvironmentUserTasksListRequest**](../Model/GetEnvironmentUserTasksListRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListUserTasksResponse**](../Model/ListUserTasksResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentUserTasksView()`

```php
getEnvironmentUserTasksView($id): \Stackflows\Clients\Stackflows\Model\ViewUserTaskResponse
```

View User Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 32489ac2-800a-11ec-1234-0242ac120002; // string | The id of the task.

try {
    $result = $apiInstance->getEnvironmentUserTasksView($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentUserTasksView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\ViewUserTaskResponse**](../Model/ViewUserTaskResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelDiagramsCommentsCreate()`

```php
postEnvironmentBusinessModelDiagramsCommentsCreate($diagramId, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest): \Stackflows\Clients\Stackflows\Model\CreateBusinessModelDiagramCommentResponse
```

Create Business Model Diagram Comment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.
$postEnvironmentBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsCommentsCreate($diagramId, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\CreateBusinessModelDiagramCommentResponse**](../Model/CreateBusinessModelDiagramCommentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelDiagramsCreate()`

```php
postEnvironmentBusinessModelDiagramsCreate($xml, $businessModelId, $snapshot): \Stackflows\Clients\Stackflows\Model\CreateBusinessModelDiagramResponse
```

Create Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xml = 'xml_example'; // string | 
$businessModelId = 'businessModelId_example'; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | of the process diagram

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsCreate($xml, $businessModelId, $snapshot);
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
 **snapshot** | **\SplFileObject****\SplFileObject**| of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CreateBusinessModelDiagramResponse**](../Model/CreateBusinessModelDiagramResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelDiagramsPublish()`

```php
postEnvironmentBusinessModelDiagramsPublish($diagramId, $postEnvironmentBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\PublishBusinessModelDiagramResponse
```

Publish Business Model Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.
$postEnvironmentBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsPublish($diagramId, $postEnvironmentBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagramId** | **string**| The ID of the diagram. |
 **postEnvironmentBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsPublishRequest**](../Model/PostEnvironmentBusinessModelDiagramsPublishRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\PublishBusinessModelDiagramResponse**](../Model/PublishBusinessModelDiagramResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentBusinessModelsCreate()`

```php
postEnvironmentBusinessModelsCreate($postEnvironmentBusinessModelsCreateRequest): \Stackflows\Clients\Stackflows\Model\CreateBusinessModelResponse
```

Create Business Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postEnvironmentBusinessModelsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest

try {
    $result = $apiInstance->postEnvironmentBusinessModelsCreate($postEnvironmentBusinessModelsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentBusinessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelsCreateRequest**](../Model/PostEnvironmentBusinessModelsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CreateBusinessModelResponse**](../Model/CreateBusinessModelResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentEventsMessage()`

```php
postEnvironmentEventsMessage($postEnvironmentEventsMessageRequest): \Stackflows\Clients\Stackflows\Model\SendMessageResponse
```

Send Message



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postEnvironmentEventsMessageRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest

try {
    $result = $apiInstance->postEnvironmentEventsMessage($postEnvironmentEventsMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentEventsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentEventsMessageRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsMessageRequest**](../Model/PostEnvironmentEventsMessageRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentEventsSignal()`

```php
postEnvironmentEventsSignal($postEnvironmentEventsSignalRequest): \Stackflows\Clients\Stackflows\Model\SendMessageResponse
```

Send Message



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postEnvironmentEventsSignalRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest

try {
    $result = $apiInstance->postEnvironmentEventsSignal($postEnvironmentEventsSignalRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentEventsSignal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentEventsSignalRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentEventsSignalRequest**](../Model/PostEnvironmentEventsSignalRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksLock()`

```php
postEnvironmentServiceTasksLock($postEnvironmentServiceTasksLockRequest): \Stackflows\Clients\Stackflows\Model\LockServiceTasksResponse
```

Lock Service Tasks



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postEnvironmentServiceTasksLockRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest

try {
    $result = $apiInstance->postEnvironmentServiceTasksLock($postEnvironmentServiceTasksLockRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentServiceTasksLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentServiceTasksLockRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksLockRequest**](../Model/PostEnvironmentServiceTasksLockRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\LockServiceTasksResponse**](../Model/LockServiceTasksResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksServe()`

```php
postEnvironmentServiceTasksServe($reference, $postEnvironmentServiceTasksServeRequest): \Stackflows\Clients\Stackflows\Model\ServeServiceTaskResponse
```

Serve Service Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$postEnvironmentServiceTasksServeRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksServeRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksServeRequest

try {
    $result = $apiInstance->postEnvironmentServiceTasksServe($reference, $postEnvironmentServiceTasksServeRequest);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ServeServiceTaskResponse**](../Model/ServeServiceTaskResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentServiceTasksUnlock()`

```php
postEnvironmentServiceTasksUnlock($reference, $postEnvironmentServiceTasksUnlockRequest): \Stackflows\Clients\Stackflows\Model\UnlockServiceTaskResponse
```

Unlock Service Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$postEnvironmentServiceTasksUnlockRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksUnlockRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksUnlockRequest

try {
    $result = $apiInstance->postEnvironmentServiceTasksUnlock($reference, $postEnvironmentServiceTasksUnlockRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentServiceTasksUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **postEnvironmentServiceTasksUnlockRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksUnlockRequest**](../Model/PostEnvironmentServiceTasksUnlockRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\UnlockServiceTaskResponse**](../Model/UnlockServiceTaskResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentTaggedBusinessModelsStart()`

```php
postEnvironmentTaggedBusinessModelsStart($postEnvironmentTaggedBusinessModelsStartRequest): \Stackflows\Clients\Stackflows\Model\StartsBusinessProcessModelsByTagResponse
```

Starts Business Process Models by Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postEnvironmentTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest

try {
    $result = $apiInstance->postEnvironmentTaggedBusinessModelsStart($postEnvironmentTaggedBusinessModelsStartRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentTaggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentTaggedBusinessModelsStartRequest**](../Model/PostEnvironmentTaggedBusinessModelsStartRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\StartsBusinessProcessModelsByTagResponse**](../Model/StartsBusinessProcessModelsByTagResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentUserTasksComplete()`

```php
postEnvironmentUserTasksComplete($id): \Stackflows\Clients\Stackflows\Model\CompleteUserTaskResponse
```

Complete User Task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 32489ac2-800a-11ec-1234-0242ac120002; // string | The id of the task.

try {
    $result = $apiInstance->postEnvironmentUserTasksComplete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentUserTasksComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CompleteUserTaskResponse**](../Model/CompleteUserTaskResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentUserTasksErrorize()`

```php
postEnvironmentUserTasksErrorize($id, $postEnvironmentUserTasksErrorizeRequest)
```

Errorize User Task

Reports a business error in the context of a running task by id. The error code must be specified to identify the BPMN error handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$postEnvironmentUserTasksErrorizeRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest

try {
    $apiInstance->postEnvironmentUserTasksErrorize($id, $postEnvironmentUserTasksErrorizeRequest);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentUserTasksErrorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **postEnvironmentUserTasksErrorizeRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksErrorizeRequest**](../Model/PostEnvironmentUserTasksErrorizeRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentUserTasksEscalate()`

```php
postEnvironmentUserTasksEscalate($id, $postEnvironmentUserTasksEscalateRequest): \Stackflows\Clients\Stackflows\Model\EscalateUserTaskResponse
```

Escalate User Task

Reports an escalation in the context of a running task by id. The escalation code must be specified to identify the escalation handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$postEnvironmentUserTasksEscalateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksEscalateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentUserTasksEscalateRequest

try {
    $result = $apiInstance->postEnvironmentUserTasksEscalate($id, $postEnvironmentUserTasksEscalateRequest);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\EscalateUserTaskResponse**](../Model/EscalateUserTaskResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
