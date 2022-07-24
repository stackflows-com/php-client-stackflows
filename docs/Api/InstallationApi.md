# Stackflows\Clients\Stackflows\InstallationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEngines()**](InstallationApi.md#deleteEngines) | **DELETE** /api/v2/engines/{engine_id} | Delete Engine
[**deleteEnvironmentsDeleteBulk()**](InstallationApi.md#deleteEnvironmentsDeleteBulk) | **DELETE** /api/v2/environments | Delete Environments
[**getEngine()**](InstallationApi.md#getEngine) | **GET** /api/v2/engines | List Engines
[**getEnginesShow()**](InstallationApi.md#getEnginesShow) | **GET** /api/v2/engines/{id} | View Engine
[**getEnvironmentsList()**](InstallationApi.md#getEnvironmentsList) | **GET** /api/v2/environments | List Environments
[**postEnginesCreate()**](InstallationApi.md#postEnginesCreate) | **POST** /api/v2/engines | Create Engine
[**postEnvironmentsCreate()**](InstallationApi.md#postEnvironmentsCreate) | **POST** /api/v2/environments | Create Environment
[**putEnginesUpdate()**](InstallationApi.md#putEnginesUpdate) | **PUT** /api/v2/engines/{id} | Update Engine


## `deleteEngines()`

```php
deleteEngines($engineId, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$engineId = voluptas; // string | The ID of the engine.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEngines($engineId, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->deleteEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engineId** | **string**| The ID of the engine. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\EngineModel**](../Model/EngineModel.md)

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
deleteEnvironmentsDeleteBulk($contentType, $accept, $deleteEnvironmentsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\CategoryModel[]
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

[**\Stackflows\Clients\Stackflows\Model\CategoryModel[]**](../Model/CategoryModel.md)

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
getEngine($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineModel[]
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

[**\Stackflows\Clients\Stackflows\Model\EngineModel[]**](../Model/EngineModel.md)

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
getEnginesShow($id, $engine, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$id = 05347dc0-0ac8-11ed-8fd5-eb1eaa90123d; // string | The ID of the engine.
$engine = quisquam; // string | ID of an engine
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

[**\Stackflows\Clients\Stackflows\Model\EngineModel**](../Model/EngineModel.md)

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
getEnvironmentsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\EnvironmentModel[]
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

[**\Stackflows\Clients\Stackflows\Model\EnvironmentModel[]**](../Model/EnvironmentModel.md)

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
postEnginesCreate($postEnginesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\EngineModel
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

[**\Stackflows\Clients\Stackflows\Model\EngineModel**](../Model/EngineModel.md)

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
postEnvironmentsCreate($postEnvironmentsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryModel
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

[**\Stackflows\Clients\Stackflows\Model\CategoryModel**](../Model/CategoryModel.md)

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
putEnginesUpdate($id, $engine, $contentType, $accept, $putEnginesUpdateRequest): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$id = 05347dc0-0ac8-11ed-8fd5-eb1eaa90123d; // string | The ID of the engine.
$engine = quisquam; // string | ID of an engine
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

[**\Stackflows\Clients\Stackflows\Model\EngineModel**](../Model/EngineModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
