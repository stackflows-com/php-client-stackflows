# Stackflows\GatewayApi\UserTaskApi

All URIs are relative to https://virtserver.swaggerhub.com/Stackflows/Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getList()**](UserTaskApi.md#getList) | **GET** /api/tasks | Get a list of tasks


## `getList()`

```php
getList($engine): \Stackflows\GatewayApi\Model\UserTask[]
```

Get a list of tasks

Queries for tasks that fulfill a given filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\GatewayApi\Api\UserTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$engine = 'engine_example'; // string | Engine uuid

try {
    $result = $apiInstance->getList($engine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTaskApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine** | **string**| Engine uuid |

### Return type

[**\Stackflows\GatewayApi\Model\UserTask[]**](../Model/UserTask.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)