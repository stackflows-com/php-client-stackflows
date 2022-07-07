# Stackflows\Clients\Stackflows\InstallationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEngines()**](InstallationApi.md#deleteEngines) | **DELETE** /api/v2/engines/{engine} | Delete Engine
[**deleteEnvironmentsDeleteBulk()**](InstallationApi.md#deleteEnvironmentsDeleteBulk) | **DELETE** /api/v2/environments | Delete Environments
[**getEngine()**](InstallationApi.md#getEngine) | **GET** /api/v2/engines | List Engines
[**getEnginesShow()**](InstallationApi.md#getEnginesShow) | **GET** /api/v2/engines/{id} | View Engine
[**getEnvironmentsList()**](InstallationApi.md#getEnvironmentsList) | **GET** /api/v2/environments | List Environments
[**postEnginesCreate()**](InstallationApi.md#postEnginesCreate) | **POST** /api/v2/engines | Create Engine
[**postEnvironmentsCreate()**](InstallationApi.md#postEnvironmentsCreate) | **POST** /api/v2/environments | Create Environment
[**putEnginesUpdate()**](InstallationApi.md#putEnginesUpdate) | **PUT** /api/v2/engines/{id} | Update Engine


## `deleteEngines()`

```php
deleteEngines($engine, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
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
$engine = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEngines($engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->deleteEngines: ', $e->getMessage(), PHP_EOL;
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

## `deleteEnvironmentsDeleteBulk()`

```php
deleteEnvironmentsDeleteBulk($contentType, $accept, $deleteEnvironmentsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\CategoryResource[]
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
$deleteEnvironmentsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteEnvironmentsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteEnvironmentsDeleteBulkRequest

try {
    $result = $apiInstance->deleteEnvironmentsDeleteBulk($contentType, $accept, $deleteEnvironmentsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->deleteEnvironmentsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **deleteEnvironmentsDeleteBulkRequest** | [**\Stackflows\Clients\Stackflows\Model\DeleteEnvironmentsDeleteBulkRequest**](../Model/DeleteEnvironmentsDeleteBulkRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource[]**](../Model/CategoryResource.md)

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
getEngine($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource[]
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

[**\Stackflows\Clients\Stackflows\Model\EngineResource[]**](../Model/EngineResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnginesShow()`

```php
getEnginesShow($id, $engine, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
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
$id = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | The ID of the engine.
$engine = repellendus; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getEnginesShow($id, $engine, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->getEnginesShow: ', $e->getMessage(), PHP_EOL;
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

## `getEnvironmentsList()`

```php
getEnvironmentsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EnvironmentResource[]
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
    $result = $apiInstance->getEnvironmentsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->getEnvironmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EnvironmentResource[]**](../Model/EnvironmentResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnginesCreate()`

```php
postEnginesCreate($postEnginesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineResource
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
$postEnginesCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnginesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnginesCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnginesCreate($postEnginesCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->postEnginesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnginesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnginesCreateRequest**](../Model/PostEnginesCreateRequest.md)|  |
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

## `postEnvironmentsCreate()`

```php
postEnvironmentsCreate($postEnvironmentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
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
$postEnvironmentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostEnvironmentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostEnvironmentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postEnvironmentsCreate($postEnvironmentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->postEnvironmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentsCreateRequest**](../Model/PostEnvironmentsCreateRequest.md)|  |
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

## `putEnginesUpdate()`

```php
putEnginesUpdate($id, $engine, $contentType, $accept, $putEnginesUpdateRequest): \Stackflows\Clients\Stackflows\Model\EngineResource
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
$id = 4241dbd0-fd0b-11ec-a738-470c54c64da4; // string | The ID of the engine.
$engine = repellendus; // string | ID of an engine
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putEnginesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutEnginesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutEnginesUpdateRequest

try {
    $result = $apiInstance->putEnginesUpdate($id, $engine, $contentType, $accept, $putEnginesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->putEnginesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the engine. |
 **engine** | **string**| ID of an engine |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putEnginesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutEnginesUpdateRequest**](../Model/PutEnginesUpdateRequest.md)|  | [optional]

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
