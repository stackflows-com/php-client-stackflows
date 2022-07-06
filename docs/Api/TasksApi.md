# Stackflows\Clients\Stackflows\TasksApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksCreate()**](TasksApi.md#tasksCreate) | **POST** /api/v2/tasks | Create task
[**tasksDelete()**](TasksApi.md#tasksDelete) | **DELETE** /api/v2/tasks/{task} | Delete task
[**tasksList()**](TasksApi.md#tasksList) | **GET** /api/v2/tasks | List
[**tasksShow()**](TasksApi.md#tasksShow) | **GET** /api/v2/tasks/{id} | View task
[**tasksUpdate()**](TasksApi.md#tasksUpdate) | **PUT** /api/v2/tasks/{id} | Update task


## `tasksCreate()`

```php
tasksCreate($tasksCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Create task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tasksCreateRequest = new \Stackflows\Clients\Stackflows\Model\TasksCreateRequest(); // \Stackflows\Clients\Stackflows\Model\TasksCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksCreate($tasksCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasksCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\TasksCreateRequest**](../Model/TasksCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksDelete()`

```php
tasksDelete($task, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Delete task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task = 072340a0-cb16-11ec-a209-551de44835a2; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksDelete($task, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksList()`

```php
tasksList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksShow()`

```php
tasksShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\TaskResource
```

View task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 072340a0-cb16-11ec-a209-551de44835a2; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->tasksShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksUpdate()`

```php
tasksUpdate($id, $contentType, $accept, $tasksUpdateRequest): \Stackflows\Clients\Stackflows\Model\TaskResource
```

Update task



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 072340a0-cb16-11ec-a209-551de44835a2; // string | The ID of the task.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$tasksUpdateRequest = new \Stackflows\Clients\Stackflows\Model\TasksUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\TasksUpdateRequest

try {
    $result = $apiInstance->tasksUpdate($id, $contentType, $accept, $tasksUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the task. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **tasksUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\TasksUpdateRequest**](../Model/TasksUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
