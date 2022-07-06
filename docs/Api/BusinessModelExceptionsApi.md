# Stackflows\Clients\Stackflows\BusinessModelExceptionsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelExceptionsCreate()**](BusinessModelExceptionsApi.md#businessModelExceptionsCreate) | **POST** /api/v2/business-model-exceptions | Create
[**businessModelExceptionsDelete()**](BusinessModelExceptionsApi.md#businessModelExceptionsDelete) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete
[**businessModelExceptionsList()**](BusinessModelExceptionsApi.md#businessModelExceptionsList) | **GET** /api/v2/business-model-exceptions | List
[**businessModelExceptionsShow()**](BusinessModelExceptionsApi.md#businessModelExceptionsShow) | **GET** /api/v2/business-model-exceptions/{exception} | View
[**businessModelExceptionsUpdate()**](BusinessModelExceptionsApi.md#businessModelExceptionsUpdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update


## `businessModelExceptionsCreate()`

```php
businessModelExceptionsCreate($businessModelExceptionsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessModelExceptionsCreateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelExceptionsCreate($businessModelExceptionsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelExceptionsApi->businessModelExceptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessModelExceptionsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsCreateRequest**](../Model/BusinessModelExceptionsCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsDelete()`

```php
businessModelExceptionsDelete($exception, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = necessitatibus; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelExceptionsDelete($exception, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelExceptionsApi->businessModelExceptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsList()`

```php
businessModelExceptionsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelExceptionsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelExceptionsApi->businessModelExceptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsShow()`

```php
businessModelExceptionsShow($exception, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = necessitatibus; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelExceptionsShow($exception, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelExceptionsApi->businessModelExceptionsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelExceptionsUpdate()`

```php
businessModelExceptionsUpdate($exception, $businessModelExceptionsUpdateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exception = necessitatibus; // string | 
$businessModelExceptionsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelExceptionsUpdate($exception, $businessModelExceptionsUpdateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelExceptionsApi->businessModelExceptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exception** | **string**|  |
 **businessModelExceptionsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\BusinessModelExceptionsUpdateRequest**](../Model/BusinessModelExceptionsUpdateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelExceptionResource**](../Model/BusinessBaseModelExceptionResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
