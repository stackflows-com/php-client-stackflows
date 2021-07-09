# Stackflows\GatewayApi\ServiceTaskApi

All URIs are relative to https://virtserver.swaggerhub.com/Stackflows/Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**complete()**](ServiceTaskApi.md#complete) | **POST** /api/service-tasks/{id}/complete | Complete Service Task
[**getPending()**](ServiceTaskApi.md#getPending) | **POST** /api/service-tasks/pending | Fetch and Lock Service Tasks


## `complete()`

```php
complete($id, $completeServiceTaskRequest)
```

Complete Service Task

Completes an service task by id and updates variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Stackflows\GatewayApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\GatewayApi\Api\ServiceTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Task id
$completeServiceTaskRequest = new \Stackflows\GatewayApi\Model\CompleteServiceTaskRequest(); // \Stackflows\GatewayApi\Model\CompleteServiceTaskRequest

try {
    $apiInstance->complete($id, $completeServiceTaskRequest);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTaskApi->complete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task id |
 **completeServiceTaskRequest** | [**\Stackflows\GatewayApi\Model\CompleteServiceTaskRequest**](../Model/CompleteServiceTaskRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPending()`

```php
getPending($getPendingServiceTaskRequest): \Stackflows\GatewayApi\Model\ServiceTask[]
```

Fetch and Lock Service Tasks

Fetches and locks a specific number of external tasks for execution by a worker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Stackflows\GatewayApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\GatewayApi\Api\ServiceTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getPendingServiceTaskRequest = new \Stackflows\GatewayApi\Model\GetPendingServiceTaskRequest(); // \Stackflows\GatewayApi\Model\GetPendingServiceTaskRequest

try {
    $result = $apiInstance->getPending($getPendingServiceTaskRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTaskApi->getPending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getPendingServiceTaskRequest** | [**\Stackflows\GatewayApi\Model\GetPendingServiceTaskRequest**](../Model/GetPendingServiceTaskRequest.md)|  |

### Return type

[**\Stackflows\GatewayApi\Model\ServiceTask[]**](../Model/ServiceTask.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
