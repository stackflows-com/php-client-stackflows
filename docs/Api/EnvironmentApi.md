# Stackflows\Clients\Stackflows\EnvironmentApi

All URIs are relative to https://stage-backoffice.stackflows.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authBusinessModelDiagramsCommentsCreate()**](EnvironmentApi.md#authBusinessModelDiagramsCommentsCreate) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
[**authBusinessModelDiagramsCommentsDelete()**](EnvironmentApi.md#authBusinessModelDiagramsCommentsDelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
[**authBusinessModelDiagramsCommentsList()**](EnvironmentApi.md#authBusinessModelDiagramsCommentsList) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
[**authBusinessModelDiagramsCreate()**](EnvironmentApi.md#authBusinessModelDiagramsCreate) | **POST** /api/v2/auth/environment/business-model-diagrams | Create Business Model Diagram
[**authBusinessModelDiagramsDelete()**](EnvironmentApi.md#authBusinessModelDiagramsDelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram} | Delete Business Model Diagram
[**authBusinessModelDiagramsList()**](EnvironmentApi.md#authBusinessModelDiagramsList) | **GET** /api/v2/auth/environment/business-model-diagrams | List Business Model Diagram
[**authBusinessModelDiagramsPublish()**](EnvironmentApi.md#authBusinessModelDiagramsPublish) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
[**authBusinessModelDiagramsShow()**](EnvironmentApi.md#authBusinessModelDiagramsShow) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram} | View Business Model Diagram
[**authBusinessModelsCommentsList()**](EnvironmentApi.md#authBusinessModelsCommentsList) | **GET** /api/v2/auth/environment/business-models/{model}/comments | List Business Model Comments
[**authBusinessModelsCreate()**](EnvironmentApi.md#authBusinessModelsCreate) | **POST** /api/v2/auth/environment/business-models | Create Business Model
[**authBusinessModelsDelete()**](EnvironmentApi.md#authBusinessModelsDelete) | **DELETE** /api/v2/auth/environment/business-models/{model} | Delete Business Model
[**authBusinessModelsList()**](EnvironmentApi.md#authBusinessModelsList) | **GET** /api/v2/auth/environment/business-models | List Business Models
[**authBusinessModelsShow()**](EnvironmentApi.md#authBusinessModelsShow) | **GET** /api/v2/auth/environment/business-models/{model} | View Business Model
[**authServiceTasksLock()**](EnvironmentApi.md#authServiceTasksLock) | **POST** /api/v2/auth/environment/service-tasks | Lock Service Tasks
[**authServiceTasksServe()**](EnvironmentApi.md#authServiceTasksServe) | **POST** /api/v2/auth/environment/service-tasks/{reference}/serve | Serve Service Task
[**authServiceTasksUnlock()**](EnvironmentApi.md#authServiceTasksUnlock) | **POST** /api/v2/auth/environment/service-tasks/{reference}/unlock | Unlock Service Task
[**authTaggedBusinessModelsStart()**](EnvironmentApi.md#authTaggedBusinessModelsStart) | **POST** /api/v2/auth/environment/tagged/business-process-models | Starts Business Process Models by Tag
[**authUserTasksComplete()**](EnvironmentApi.md#authUserTasksComplete) | **POST** /api/v2/auth/environment/user-tasks/{id}/complete | Complete User Task
[**authUserTasksErrorize()**](EnvironmentApi.md#authUserTasksErrorize) | **POST** /api/v2/auth/environment/user-tasks/{id}/errorize | Errorize User Task
[**authUserTasksEscalate()**](EnvironmentApi.md#authUserTasksEscalate) | **POST** /api/v2/auth/environment/user-tasks/{id}/escalate | Escalate User Task
[**authUserTasksIndex()**](EnvironmentApi.md#authUserTasksIndex) | **GET** /api/v2/auth/environment/user-tasks | List User Tasks


## `authBusinessModelDiagramsCommentsCreate()`

```php
authBusinessModelDiagramsCommentsCreate($diagram, $authBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$authBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsCreate($diagram, $authBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
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
    $result = $apiInstance->authBusinessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsCommentsDelete: ', $e->getMessage(), PHP_EOL;
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
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsList($diagram, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsCommentsList: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelDiagramsCreate()`

```php
authBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
    $result = $apiInstance->authBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelDiagramsDelete()`

```php
authBusinessModelDiagramsDelete($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsDelete($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsDelete: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelDiagramsList()`

```php
authBusinessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
    $result = $apiInstance->authBusinessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelDiagramsPublish()`

```php
authBusinessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->authBusinessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelDiagramsShow()`

```php
authBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
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
$diagram = 008addb0-b670-11ec-88db-6be8db57ccba; // string | 
$includesnapshotsdeploysdeploysStatistics = voluptas; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelsCommentsList()`

```php
authBusinessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
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
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelsCreate()`

```php
authBusinessModelsCreate($authBusinessModelsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$authBusinessModelsCreateRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsCreate($authBusinessModelsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authBusinessModelsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthBusinessModelsCreateRequest**](../Model/AuthBusinessModelsCreateRequest.md)|  |
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

## `authBusinessModelsDelete()`

```php
authBusinessModelsDelete($model, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsDelete($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelsDelete: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelsList()`

```php
authBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = accusantium; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = itaque; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = ea; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = velit; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = mollitia; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = pariatur; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = ut; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelsList: ', $e->getMessage(), PHP_EOL;
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

## `authBusinessModelsShow()`

```php
authBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$model = 15208e70-cb71-11ec-8129-19fd6fd69483; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = mollitia; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
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

## `authServiceTasksLock()`

```php
authServiceTasksLock($authServiceTasksLockRequest, $contentType, $accept)
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
$authServiceTasksLockRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksLock($authServiceTasksLockRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authServiceTasksLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authServiceTasksLockRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest**](../Model/AuthServiceTasksLockRequest.md)|  |
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

## `authServiceTasksServe()`

```php
authServiceTasksServe($reference, $authServiceTasksServeRequest, $contentType, $accept)
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
$authServiceTasksServeRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksServe($reference, $authServiceTasksServeRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authServiceTasksServe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **authServiceTasksServeRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest**](../Model/AuthServiceTasksServeRequest.md)|  |
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

## `authServiceTasksUnlock()`

```php
authServiceTasksUnlock($reference, $authServiceTasksUnlockRequest, $contentType, $accept)
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
$authServiceTasksUnlockRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksUnlock($reference, $authServiceTasksUnlockRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authServiceTasksUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **authServiceTasksUnlockRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest**](../Model/AuthServiceTasksUnlockRequest.md)|  |
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

## `authTaggedBusinessModelsStart()`

```php
authTaggedBusinessModelsStart($authTaggedBusinessModelsStartRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource
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
$authTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\AuthTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\AuthTaggedBusinessModelsStartRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authTaggedBusinessModelsStart($authTaggedBusinessModelsStartRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
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

## `authUserTasksComplete()`

```php
authUserTasksComplete($id, $contentType, $accept)
```

Complete User Task

Completes a task

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
    $apiInstance->authUserTasksComplete($id, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authUserTasksComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
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

## `authUserTasksErrorize()`

```php
authUserTasksErrorize($id, $authUserTasksErrorizeRequest, $contentType, $accept)
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
$authUserTasksErrorizeRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksErrorize($id, $authUserTasksErrorizeRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authUserTasksErrorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **authUserTasksErrorizeRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest**](../Model/AuthUserTasksErrorizeRequest.md)|  |
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

## `authUserTasksEscalate()`

```php
authUserTasksEscalate($id, $authUserTasksEscalateRequest, $contentType, $accept)
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
$authUserTasksEscalateRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksEscalate($id, $authUserTasksEscalateRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authUserTasksEscalate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **authUserTasksEscalateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest**](../Model/AuthUserTasksEscalateRequest.md)|  |
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

## `authUserTasksIndex()`

```php
authUserTasksIndex($contentType, $accept)
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
    $apiInstance->authUserTasksIndex($contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->authUserTasksIndex: ', $e->getMessage(), PHP_EOL;
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
