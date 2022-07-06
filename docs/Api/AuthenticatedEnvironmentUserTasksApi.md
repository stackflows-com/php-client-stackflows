# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentUserTasksApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUserTasksComplete()**](AuthenticatedEnvironmentUserTasksApi.md#authUserTasksComplete) | **POST** /api/v2/auth/environment/user-tasks/{id}/complete | Complete
[**authUserTasksErrorize()**](AuthenticatedEnvironmentUserTasksApi.md#authUserTasksErrorize) | **POST** /api/v2/auth/environment/user-tasks/{id}/errorize | Errorize
[**authUserTasksEscalate()**](AuthenticatedEnvironmentUserTasksApi.md#authUserTasksEscalate) | **POST** /api/v2/auth/environment/user-tasks/{id}/escalate | Escalate
[**authUserTasksIndex()**](AuthenticatedEnvironmentUserTasksApi.md#authUserTasksIndex) | **GET** /api/v2/auth/environment/user-tasks | List


## `authUserTasksComplete()`

```php
authUserTasksComplete($id, $contentType, $accept)
```

Complete

Completes a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentUserTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 32489ac2-800a-11ec-1234-0242ac120002; // string | The id of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksComplete($id, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentUserTasksApi->authUserTasksComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authUserTasksErrorize()`

```php
authUserTasksErrorize($id, $authUserTasksErrorizeRequest, $contentType, $accept)
```

Errorize

Reports a business error in the context of a running task by id. The error code must be specified to identify the BPMN error handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentUserTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$authUserTasksErrorizeRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksErrorize($id, $authUserTasksErrorizeRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentUserTasksApi->authUserTasksErrorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **authUserTasksErrorizeRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserTasksErrorizeRequest**](../Model/AuthUserTasksErrorizeRequest.md)|  |
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

## `authUserTasksEscalate()`

```php
authUserTasksEscalate($id, $authUserTasksEscalateRequest, $contentType, $accept)
```

Escalate

Reports an escalation in the context of a running task by id. The escalation code must be specified to identify the escalation handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentUserTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 3688e6c0-1a56-11ec-8366-4de337119e3a; // string | The id of the task.
$authUserTasksEscalateRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksEscalate($id, $authUserTasksEscalateRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentUserTasksApi->authUserTasksEscalate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **authUserTasksEscalateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserTasksEscalateRequest**](../Model/AuthUserTasksEscalateRequest.md)|  |
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

## `authUserTasksIndex()`

```php
authUserTasksIndex($contentType, $accept)
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentUserTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserTasksIndex($contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentUserTasksApi->authUserTasksIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
