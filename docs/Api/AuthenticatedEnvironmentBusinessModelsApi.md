# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentBusinessModelsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authBusinessModelsCommentsList()**](AuthenticatedEnvironmentBusinessModelsApi.md#authBusinessModelsCommentsList) | **GET** /api/v2/auth/environment/business-models/{model}/comments | List Comments
[**authBusinessModelsCreate()**](AuthenticatedEnvironmentBusinessModelsApi.md#authBusinessModelsCreate) | **POST** /api/v2/auth/environment/business-models | Create
[**authBusinessModelsDelete()**](AuthenticatedEnvironmentBusinessModelsApi.md#authBusinessModelsDelete) | **DELETE** /api/v2/auth/environment/business-models/{model} | Delete
[**authBusinessModelsList()**](AuthenticatedEnvironmentBusinessModelsApi.md#authBusinessModelsList) | **GET** /api/v2/auth/environment/business-models | List
[**authBusinessModelsShow()**](AuthenticatedEnvironmentBusinessModelsApi.md#authBusinessModelsShow) | **GET** /api/v2/auth/environment/business-models/{model} | View


## `authBusinessModelsCommentsList()`

```php
authBusinessModelsCommentsList($model, $include, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CommentResource
```

List Comments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$include = commenter; // string | Specify a list of includes.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsCommentsList($model, $include, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelsApi->authBusinessModelsCommentsList: ', $e->getMessage(), PHP_EOL;
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

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelsApi(
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
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelsApi->authBusinessModelsCreate: ', $e->getMessage(), PHP_EOL;
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

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsDelete($model, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelsApi->authBusinessModelsDelete: ', $e->getMessage(), PHP_EOL;
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

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = eius; // string | Possible includes
$filterWithAnyTagstestTaganotherTestTag = sint; // string | Will return models that has any of specified tags
$filterWithoutAnyTags1 = reiciendis; // string | Will return list of all models that has no tags at all
$filterAutocompletetes = aut; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = et; // string | Retrieve list that has \"tes\" in their name
$filterCategories12 = cupiditate; // string | Filter by specific categories
$filterUncategorized = true; // bool | List only uncategorized process models.
$filterSubscribable = true; // bool | List only subscribable process models.
$sortnameCreatedAtUpdatedAt = quo; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsList($includeownercompanycategorytagscommentsCounttagsCountdiagrams, $filterWithAnyTagstestTaganotherTestTag, $filterWithoutAnyTags1, $filterAutocompletetes, $filterSearchtes, $filterCategories12, $filterUncategorized, $filterSubscribable, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelsApi->authBusinessModelsList: ', $e->getMessage(), PHP_EOL;
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

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = 06a4ad30-f87d-11ec-ba01-1558c1387592; // string | 
$includeownercompanycategorytagscommentsCounttagsCountdiagrams = cupiditate; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelsShow($model, $includeownercompanycategorytagscommentsCounttagsCountdiagrams, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelsApi->authBusinessModelsShow: ', $e->getMessage(), PHP_EOL;
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
