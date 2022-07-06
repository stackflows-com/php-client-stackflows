# Stackflows\Clients\Stackflows\EnginesApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**enginesCreate()**](EnginesApi.md#enginesCreate) | **POST** /api/v2/engines | Create
[**enginesDelete()**](EnginesApi.md#enginesDelete) | **DELETE** /api/v2/engines/{engine} | Delete
[**enginesShow()**](EnginesApi.md#enginesShow) | **GET** /api/v2/engines/{id} | View
[**enginesUpdate()**](EnginesApi.md#enginesUpdate) | **PUT** /api/v2/engines/{id} | Update
[**getEngine()**](EnginesApi.md#getEngine) | **GET** /api/v2/engines | List


## `enginesCreate()`

```php
enginesCreate($enginesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enginesCreateRequest = new \Stackflows\Clients\Stackflows\Model\EnginesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\EnginesCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->enginesCreate($enginesCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->enginesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enginesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\EnginesCreateRequest**](../Model/EnginesCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineResource**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enginesDelete()`

```php
enginesDelete($engine, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$engine = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->enginesDelete($engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->enginesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineResource**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enginesShow()`

```php
enginesShow($id, $engine, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | The ID of the engine.
$engine = sequi; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->enginesShow($id, $engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->enginesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the engine. |
 **engine** | **string**| ID of an engine |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineResource**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enginesUpdate()`

```php
enginesUpdate($id, $engine, $contentType, $accept, $enginesUpdateRequest): \Stackflows\Clients\Stackflows\Model\EngineResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | The ID of the engine.
$engine = sequi; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 
$enginesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\EnginesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\EnginesUpdateRequest

try {
    $result = $apiInstance->enginesUpdate($id, $engine, $contentType, $accept, $enginesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->enginesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the engine. |
 **engine** | **string**| ID of an engine |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **enginesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\EnginesUpdateRequest**](../Model/EnginesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineResource**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEngine()`

```php
getEngine($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEngine($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->getEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineResource**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
