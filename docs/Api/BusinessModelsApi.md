# Stackflows\Clients\Stackflows\BusinessModelsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelsCommentsList()**](BusinessModelsApi.md#businessModelsCommentsList) | **GET** /api/v2/business-models/{model}/comments | List Comments
[**businessModelsCreate()**](BusinessModelsApi.md#businessModelsCreate) | **POST** /api/v2/business-models | Create
[**businessModelsDelete()**](BusinessModelsApi.md#businessModelsDelete) | **DELETE** /api/v2/business-models/{model} | Delete
[**businessModelsDeleteBulk()**](BusinessModelsApi.md#businessModelsDeleteBulk) | **DELETE** /api/v2/business-models | Delete bulk
[**businessModelsList()**](BusinessModelsApi.md#businessModelsList) | **GET** /api/v2/business-models | List
[**businessModelsPostRevision()**](BusinessModelsApi.md#businessModelsPostRevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Related Diagram
[**businessModelsShow()**](BusinessModelsApi.md#businessModelsShow) | **GET** /api/v2/business-models/{model} | View
[**businessModelsShowRevision()**](BusinessModelsApi.md#businessModelsShowRevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Related Diagram
[**businessModelsShowRevisions()**](BusinessModelsApi.md#businessModelsShowRevisions) | **GET** /api/v2/business-models/{model}/revisions | List Disgrams
[**businessModelsTag()**](BusinessModelsApi.md#businessModelsTag) | **POST** /api/v2/business-models/{taggable}/tag | Tag
[**businessModelsUpdate()**](BusinessModelsApi.md#businessModelsUpdate) | **PUT** /api/v2/business-models/{model} | Update


## `businessModelsCommentsList()`

```php
businessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

List Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
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

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
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
    echo 'Exception when calling BusinessModelsApi->businessModelsCreate: ', $e->getMessage(), PHP_EOL;
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

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsDelete($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsDelete: ', $e->getMessage(), PHP_EOL;
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

Delete bulk



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
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
    echo 'Exception when calling BusinessModelsApi->businessModelsDeleteBulk: ', $e->getMessage(), PHP_EOL;
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

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = qui; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = optio; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = suscipit; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = in; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = eius; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = at; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = facilis; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsList: ', $e->getMessage(), PHP_EOL;
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

Submit Related Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
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
    $result = $apiInstance->businessModelsPostRevision($model, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsPostRevision: ', $e->getMessage(), PHP_EOL;
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

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = aut; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsShow: ', $e->getMessage(), PHP_EOL;
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

View Related Diagram



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$revision = officiis; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShowRevision($model, $revision, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsShowRevision: ', $e->getMessage(), PHP_EOL;
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

List Disgrams



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelsShowRevisions($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsShowRevisions: ', $e->getMessage(), PHP_EOL;
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

Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taggable = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessModelsTagRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsTagRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsTagRequest

try {
    $result = $apiInstance->businessModelsTag($taggable, $contentType, $accept, $businessModelsTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsTag: ', $e->getMessage(), PHP_EOL;
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

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessModelsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelsUpdateRequest

try {
    $result = $apiInstance->businessModelsUpdate($model, $contentType, $accept, $businessModelsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelsApi->businessModelsUpdate: ', $e->getMessage(), PHP_EOL;
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
