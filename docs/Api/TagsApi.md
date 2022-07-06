# Stackflows\Clients\Stackflows\TagsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagsCreate()**](TagsApi.md#tagsCreate) | **POST** /api/v2/tags | Create
[**tagsDelete()**](TagsApi.md#tagsDelete) | **DELETE** /api/v2/tags/{tag} | Delete
[**tagsList()**](TagsApi.md#tagsList) | **GET** /api/v2/tags | List
[**tagsShow()**](TagsApi.md#tagsShow) | **GET** /api/v2/tags/{id} | View
[**tagsUpdate()**](TagsApi.md#tagsUpdate) | **PUT** /api/v2/tags/{id} | Update


## `tagsCreate()`

```php
tagsCreate($tagsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TagResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TagsApi(
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
    echo 'Exception when calling TagsApi->tagsCreate: ', $e->getMessage(), PHP_EOL;
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

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 3; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsDelete($tag, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsDelete: ', $e->getMessage(), PHP_EOL;
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

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TagsApi(
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
    echo 'Exception when calling TagsApi->tagsList: ', $e->getMessage(), PHP_EOL;
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

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3; // int | The ID of the tag.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsShow: ', $e->getMessage(), PHP_EOL;
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

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3; // int | The ID of the tag.
$tagsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\TagsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\TagsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tagsUpdate($id, $tagsUpdateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsUpdate: ', $e->getMessage(), PHP_EOL;
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
