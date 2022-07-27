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
deleteEngines($engineId): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$engineId = 9d49d5f0-b566-11ec-979c-d3bcedb7b4c1; // string | The ID of the engine.

try {
    $result = $apiInstance->deleteEngines($engineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->deleteEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engineId** | **string**| The ID of the engine. |

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
deleteEnvironmentsDeleteBulk($deleteEnvironmentsDeleteBulkRequest): \Stackflows\Clients\Stackflows\Model\CategoryModel[]
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
$deleteEnvironmentsDeleteBulkRequest = new \Stackflows\Clients\Stackflows\Model\DeleteEnvironmentsDeleteBulkRequest(); // \Stackflows\Clients\Stackflows\Model\DeleteEnvironmentsDeleteBulkRequest

try {
    $result = $apiInstance->deleteEnvironmentsDeleteBulk($deleteEnvironmentsDeleteBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->deleteEnvironmentsDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
getEngine(): \Stackflows\Clients\Stackflows\Model\EngineModel[]
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

try {
    $result = $apiInstance->getEngine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->getEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
getEnginesShow($id, $engine): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$id = 9d49d5f0-b566-11ec-979c-d3bcedb7b4c1; // string | The ID of the engine.
$engine = sunt; // string | ID of an engine

try {
    $result = $apiInstance->getEnginesShow($id, $engine);
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
getEnvironmentsList(): \Stackflows\Clients\Stackflows\Model\EnvironmentModel[]
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

try {
    $result = $apiInstance->getEnvironmentsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->getEnvironmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
postEnginesCreate($postEnginesCreateRequest): \Stackflows\Clients\Stackflows\Model\EngineModel
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

try {
    $result = $apiInstance->postEnginesCreate($postEnginesCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->postEnginesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnginesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnginesCreateRequest**](../Model/PostEnginesCreateRequest.md)|  |

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
postEnvironmentsCreate($postEnvironmentsCreateRequest): \Stackflows\Clients\Stackflows\Model\CategoryModel
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

try {
    $result = $apiInstance->postEnvironmentsCreate($postEnvironmentsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationApi->postEnvironmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postEnvironmentsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostEnvironmentsCreateRequest**](../Model/PostEnvironmentsCreateRequest.md)|  |

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
putEnginesUpdate($id, $engine, $putEnginesUpdateRequest): \Stackflows\Clients\Stackflows\Model\EngineModel
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
$id = 9d49d5f0-b566-11ec-979c-d3bcedb7b4c1; // string | The ID of the engine.
$engine = sunt; // string | ID of an engine
$putEnginesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutEnginesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutEnginesUpdateRequest

try {
    $result = $apiInstance->putEnginesUpdate($id, $engine, $putEnginesUpdateRequest);
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
