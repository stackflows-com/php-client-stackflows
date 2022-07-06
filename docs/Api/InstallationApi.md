# Stackflows\Clients\Stackflows\InstallationApi

All URIs are relative to https://stage-backoffice.stackflows.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**enginesCreate()**](InstallationApi.md#enginesCreate) | **POST** /api/v2/engines | Create Engine
[**enginesDelete()**](InstallationApi.md#enginesDelete) | **DELETE** /api/v2/engines/{engine} | Delete Engine
[**enginesShow()**](InstallationApi.md#enginesShow) | **GET** /api/v2/engines/{id} | View Engine
[**enginesUpdate()**](InstallationApi.md#enginesUpdate) | **PUT** /api/v2/engines/{id} | Update Engine
[**environmentsCreate()**](InstallationApi.md#environmentsCreate) | **POST** /api/v2/environments | Create Environment
[**environmentsDeleteBulk()**](InstallationApi.md#environmentsDeleteBulk) | **DELETE** /api/v2/environments | Delete Environments
[**environmentsList()**](InstallationApi.md#environmentsList) | **GET** /api/v2/environments | List Environments
[**getEngine()**](InstallationApi.md#getEngine) | **GET** /api/v2/engines | List Engines


## `enginesCreate()`

```php
enginesCreate($enginesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

Create Engine



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
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
    echo 'Exception when calling InstallationApi->enginesCreate: ', $e->getMessage(), PHP_EOL;
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

Delete Engine



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$engine = 1b901960-f862-11ec-95cd-6d0eec0851a8; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->enginesDelete($engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->enginesDelete: ', $e->getMessage(), PHP_EOL;
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

View Engine



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1b901960-f862-11ec-95cd-6d0eec0851a8; // string | The ID of the engine.
$engine = soluta; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->enginesShow($id, $engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->enginesShow: ', $e->getMessage(), PHP_EOL;
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

Update Engine



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1b901960-f862-11ec-95cd-6d0eec0851a8; // string | The ID of the engine.
$engine = soluta; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 
$enginesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\EnginesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\EnginesUpdateRequest

try {
    $result = $apiInstance->enginesUpdate($id, $engine, $contentType, $accept, $enginesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->enginesUpdate: ', $e->getMessage(), PHP_EOL;
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

## `environmentsCreate()`

```php
environmentsCreate($environmentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Create Environment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
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
    echo 'Exception when calling InstallationApi->environmentsCreate: ', $e->getMessage(), PHP_EOL;
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

Delete Environments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
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
    echo 'Exception when calling InstallationApi->environmentsDeleteBulk: ', $e->getMessage(), PHP_EOL;
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

List Environments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
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
    echo 'Exception when calling InstallationApi->environmentsList: ', $e->getMessage(), PHP_EOL;
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

## `getEngine()`

```php
getEngine($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
```

List Engines



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\InstallationApi(
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
    echo 'Exception when calling InstallationApi->getEngine: ', $e->getMessage(), PHP_EOL;
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
