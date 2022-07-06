# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentServiceTasksApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceTasksLock()**](AuthenticatedEnvironmentServiceTasksApi.md#authServiceTasksLock) | **POST** /api/v2/auth/environment/service-tasks | Lock
[**authServiceTasksServe()**](AuthenticatedEnvironmentServiceTasksApi.md#authServiceTasksServe) | **POST** /api/v2/auth/environment/service-tasks/{reference}/serve | Serve
[**authServiceTasksUnlock()**](AuthenticatedEnvironmentServiceTasksApi.md#authServiceTasksUnlock) | **POST** /api/v2/auth/environment/service-tasks/{reference}/unlock | Unlock


## `authServiceTasksLock()`

```php
authServiceTasksLock($authServiceTasksLockRequest, $contentType, $accept)
```

Lock



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentServiceTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authServiceTasksLockRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksLock($authServiceTasksLockRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentServiceTasksApi->authServiceTasksLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authServiceTasksLockRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksLockRequest**](../Model/AuthServiceTasksLockRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceTasksServe()`

```php
authServiceTasksServe($reference, $authServiceTasksServeRequest, $contentType, $accept)
```

Serve



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentServiceTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$authServiceTasksServeRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksServe($reference, $authServiceTasksServeRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentServiceTasksApi->authServiceTasksServe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **authServiceTasksServeRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksServeRequest**](../Model/AuthServiceTasksServeRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceTasksUnlock()`

```php
authServiceTasksUnlock($reference, $authServiceTasksUnlockRequest, $contentType, $accept)
```

Unlock



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentServiceTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = 3688e6c0-1a56-11ec-8366; // string | The reference of a service task.
$authServiceTasksUnlockRequest = new \Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest(); // \Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authServiceTasksUnlock($reference, $authServiceTasksUnlockRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentServiceTasksApi->authServiceTasksUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of a service task. |
 **authServiceTasksUnlockRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthServiceTasksUnlockRequest**](../Model/AuthServiceTasksUnlockRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
