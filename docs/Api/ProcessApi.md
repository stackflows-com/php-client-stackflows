# Stackflows\GatewayApi\ProcessApi

All URIs are relative to https://virtserver.swaggerhub.com/Stackflows/Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**startProcess()**](ProcessApi.md#startProcess) | **POST** /api/start | Start the process


## `startProcess()`

```php
startProcess($startProcessRequest)
```

Start the process

Start the process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Stackflows\GatewayApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\GatewayApi\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startProcessRequest = new \Stackflows\GatewayApi\Model\StartProcessRequest(); // \Stackflows\GatewayApi\Model\StartProcessRequest

try {
    $apiInstance->startProcess($startProcessRequest);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->startProcess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startProcessRequest** | [**\Stackflows\GatewayApi\Model\StartProcessRequest**](../Model/StartProcessRequest.md)|  |

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
