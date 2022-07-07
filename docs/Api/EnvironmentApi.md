# Stackflows\Clients\Stackflows\EnvironmentApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnvironmentBusinessModelDiagrams()**](EnvironmentApi.md#deleteEnvironmentBusinessModelDiagrams) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram} | Delete Business Model Diagram
[**deleteEnvironmentBusinessModelDiagramsComments()**](EnvironmentApi.md#deleteEnvironmentBusinessModelDiagramsComments) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
[**deleteEnvironmentBusinessModels()**](EnvironmentApi.md#deleteEnvironmentBusinessModels) | **DELETE** /api/v2/environment/business-models/{model} | Delete Business Model
[**getEnvironmentBusinessModelDiagramsCommentsList()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsCommentsList) | **GET** /api/v2/environment/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
[**getEnvironmentBusinessModelDiagramsList()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsList) | **GET** /api/v2/environment/business-model-diagrams | List Business Model Diagram
[**getEnvironmentBusinessModelDiagramsShow()**](EnvironmentApi.md#getEnvironmentBusinessModelDiagramsShow) | **GET** /api/v2/environment/business-model-diagrams/{diagram} | View Business Model Diagram
[**getEnvironmentBusinessModelsCommentsList()**](EnvironmentApi.md#getEnvironmentBusinessModelsCommentsList) | **GET** /api/v2/environment/business-models/{model}/comments | List Business Model Comments
[**getEnvironmentBusinessModelsList()**](EnvironmentApi.md#getEnvironmentBusinessModelsList) | **GET** /api/v2/environment/business-models | List Business Models
[**getEnvironmentBusinessModelsShow()**](EnvironmentApi.md#getEnvironmentBusinessModelsShow) | **GET** /api/v2/environment/business-models/{model} | View Business Model
[**getEnvironmentUserTasksIndex()**](EnvironmentApi.md#getEnvironmentUserTasksIndex) | **GET** /api/v2/environment/user-tasks | List User Tasks
[**postEnvironmentBusinessModelDiagramsCommentsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/environment/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
[**postEnvironmentBusinessModelDiagramsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsCreate) | **POST** /api/v2/environment/business-model-diagrams | Create Business Model Diagram
[**postEnvironmentBusinessModelDiagramsPublish()**](EnvironmentApi.md#postEnvironmentBusinessModelDiagramsPublish) | **POST** /api/v2/environment/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
[**postEnvironmentBusinessModelsCreate()**](EnvironmentApi.md#postEnvironmentBusinessModelsCreate) | **POST** /api/v2/environment/business-models | Create Business Model
[**postEnvironmentServiceTasksLock()**](EnvironmentApi.md#postEnvironmentServiceTasksLock) | **POST** /api/v2/environment/service-tasks | Lock Service Tasks
[**postEnvironmentServiceTasksServe()**](EnvironmentApi.md#postEnvironmentServiceTasksServe) | **POST** /api/v2/environment/service-tasks/{reference}/serve | Serve Service Task
[**postEnvironmentServiceTasksUnlock()**](EnvironmentApi.md#postEnvironmentServiceTasksUnlock) | **POST** /api/v2/environment/service-tasks/{reference}/unlock | Unlock Service Task
[**postEnvironmentTaggedBusinessModelsStart()**](EnvironmentApi.md#postEnvironmentTaggedBusinessModelsStart) | **POST** /api/v2/environment/tagged/business-process-models | Starts Business Process Models by Tag
[**postEnvironmentUserTasksComplete()**](EnvironmentApi.md#postEnvironmentUserTasksComplete) | **POST** /api/v2/environment/user-tasks/{id}/complete | Complete User Task
[**postEnvironmentUserTasksErrorize()**](EnvironmentApi.md#postEnvironmentUserTasksErrorize) | **POST** /api/v2/environment/user-tasks/{id}/errorize | Errorize User Task
[**postEnvironmentUserTasksEscalate()**](EnvironmentApi.md#postEnvironmentUserTasksEscalate) | **POST** /api/v2/environment/user-tasks/{id}/escalate | Escalate User Task


## `deleteEnvironmentBusinessModelDiagrams()`

```php
deleteEnvironmentBusinessModelDiagrams($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagrams($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
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

## `deleteEnvironmentBusinessModelDiagramsComments()`

```php
deleteEnvironmentBusinessModelDiagramsComments($diagram, $comment, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagramsComments($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagramsComments: ', $e->getMessage(), PHP_EOL;
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

## `deleteEnvironmentBusinessModels()`

```php
deleteEnvironmentBusinessModels($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModels($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModels: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentBusinessModelDiagramsCommentsList()`

```php
getEnvironmentBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentBusinessModelDiagramsList()`

```php
getEnvironmentBusinessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

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
getEnvironmentBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$includesnapshotsdeploysdeploysStatistics = aliquid; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentBusinessModelsCommentsList()`

```php
getEnvironmentBusinessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentBusinessModelsList()`

```php
getEnvironmentBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = autem; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = accusantium; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = modi; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = quasi; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = cum; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = sequi; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = autem; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsList: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentBusinessModelsShow()`

```php
getEnvironmentBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = veritatis; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnvironmentBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentUserTasksIndex()`

```php
getEnvironmentUserTasksIndex($contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskTypeResource
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
    $result = $apiInstance->getEnvironmentUserTasksIndex($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getEnvironmentUserTasksIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserTaskTypeResource**](../Model/UserTaskTypeResource.md)

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
postEnvironmentBusinessModelDiagramsCommentsCreate($diagram, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$postEnvironmentBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsCommentsCreate($diagram, $postEnvironmentBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **postEnvironmentBusinessModelDiagramsCommentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentBusinessModelDiagramsCommentsCreateRequest**](../Model/PostEnvironmentBusinessModelDiagramsCommentsCreateRequest.md)|  |
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

## `postEnvironmentBusinessModelDiagramsCreate()`

```php
postEnvironmentBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

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
postEnvironmentBusinessModelDiagramsPublish($diagram, $contentType, $accept, $postBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$postBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->postEnvironmentBusinessModelDiagramsPublish($diagram, $contentType, $accept, $postBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->postEnvironmentBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **postBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\PostBusinessModelDiagramsPublishRequest**](../Model/PostBusinessModelDiagramsPublishRequest.md)|  | [optional]

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

## `postEnvironmentBusinessModelsCreate()`

```php
postEnvironmentBusinessModelsCreate($postEnvironmentBusinessModelsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

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
postEnvironmentServiceTasksLock($postEnvironmentServiceTasksLockRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource
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

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource**](../Model/ServiceTaskTypeResource.md)

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
postEnvironmentServiceTasksServe($reference, $postEnvironmentServiceTasksServeRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource
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

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource**](../Model/ServiceTaskTypeResource.md)

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
postEnvironmentServiceTasksUnlock($reference, $postEnvironmentServiceTasksUnlockRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource
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
$postEnvironmentServiceTasksUnlockRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksUnlockRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentServiceTasksUnlockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentServiceTasksUnlock($reference, $postEnvironmentServiceTasksUnlockRequest, $contentType, $accept);
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
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\ServiceTaskTypeResource**](../Model/ServiceTaskTypeResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentTaggedBusinessModelsStart()`

```php
postEnvironmentTaggedBusinessModelsStart($postEnvironmentTaggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource**](../Model/BusinessBaseModelResource.md)

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
postEnvironmentUserTasksComplete($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskTypeResource
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

[**\Stackflows\Clients\Stackflows\Model\UserTaskTypeResource**](../Model/UserTaskTypeResource.md)

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
postEnvironmentUserTasksEscalate($id, $postEnvironmentUserTasksEscalateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserTaskTypeResource
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

[**\Stackflows\Clients\Stackflows\Model\UserTaskTypeResource**](../Model/UserTaskTypeResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
