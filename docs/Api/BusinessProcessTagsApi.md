# Stackflows\Clients\Stackflows\BusinessProcessTagsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessProcessesCreate()**](BusinessProcessTagsApi.md#businessProcessesCreate) | **POST** /api/v2/business-processes | Create
[**businessProcessesDelete()**](BusinessProcessTagsApi.md#businessProcessesDelete) | **DELETE** /api/v2/business-processes/{tag} | Delete
[**businessProcessesDeleteBulk()**](BusinessProcessTagsApi.md#businessProcessesDeleteBulk) | **DELETE** /api/v2/business-processes | Delete bulk
[**businessProcessesList()**](BusinessProcessTagsApi.md#businessProcessesList) | **GET** /api/v2/business-processes | List
[**businessProcessesShow()**](BusinessProcessTagsApi.md#businessProcessesShow) | **GET** /api/v2/business-processes/{tag} | View
[**businessProcessesUpdate()**](BusinessProcessTagsApi.md#businessProcessesUpdate) | **PUT** /api/v2/business-processes/{tag} | Update


## `businessProcessesCreate()`

```php
businessProcessesCreate($contentType, $accept, $businessProcessesCreateRequest): \Stackflows\Clients\Stackflows\Model\TagResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
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
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesCreate: ', $e->getMessage(), PHP_EOL;
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

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesDelete($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesDelete: ', $e->getMessage(), PHP_EOL;
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

Delete bulk



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
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
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesDeleteBulk: ', $e->getMessage(), PHP_EOL;
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

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeprocessModels = accusamus; // string | Will add process models to the response
$includeprocessModelsCount = 12; // int | Will add process models count to the response
$filterAutocompletetes = nesciunt; // string | Retrieve list that has \"tes\" at the start of their name
$filterSearchtes = tempora; // string | Retrieve list that has \"tes\" in their name
$sortnameCreatedAtUpdatedAt = perferendis; // string | Sorting example
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesList($includeprocessModels, $includeprocessModelsCount, $filterAutocompletetes, $filterSearchtes, $sortnameCreatedAtUpdatedAt, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesList: ', $e->getMessage(), PHP_EOL;
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

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 3; // int | 
$includeprocessModels = in; // string | Will add process models to the response
$includeprocessModelsCount = 7; // int | Will add process models count to the response
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessProcessesShow($tag, $includeprocessModels, $includeprocessModelsCount, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesShow: ', $e->getMessage(), PHP_EOL;
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

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessProcessTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$businessProcessesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessProcessesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessProcessesUpdateRequest

try {
    $result = $apiInstance->businessProcessesUpdate($tag, $contentType, $accept, $businessProcessesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProcessTagsApi->businessProcessesUpdate: ', $e->getMessage(), PHP_EOL;
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
