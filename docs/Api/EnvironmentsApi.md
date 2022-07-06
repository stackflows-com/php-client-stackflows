# Stackflows\Clients\Stackflows\EnvironmentsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**environmentsCreate()**](EnvironmentsApi.md#environmentsCreate) | **POST** /api/v2/environments | Create
[**environmentsDeleteBulk()**](EnvironmentsApi.md#environmentsDeleteBulk) | **DELETE** /api/v2/environments | Delete Bulk
[**environmentsList()**](EnvironmentsApi.md#environmentsList) | **GET** /api/v2/environments | List


## `environmentsCreate()`

```php
environmentsCreate($environmentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environmentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\EnvironmentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\EnvironmentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->environmentsCreate($environmentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environmentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\EnvironmentsCreateRequest**](../Model/EnvironmentsCreateRequest.md)|  |
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

## `environmentsDeleteBulk()`

```php
environmentsDeleteBulk($contentType, $accept, $environmentsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Delete Bulk



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 
$environmentsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\EnvironmentsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\EnvironmentsDeleteBulkRequest

try {
    $result = $apiInstance->environmentsDeleteBulk($contentType, $accept, $environmentsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **environmentsDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\EnvironmentsDeleteBulkRequest**](../Model/EnvironmentsDeleteBulkRequest.md)|  | [optional]

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

## `environmentsList()`

```php
environmentsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EnvironmentResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->environmentsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EnvironmentResource**](../Model/EnvironmentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
