# Stackflows\GatewayApi\SignalApi

All URIs are relative to https://virtserver.swaggerhub.com/Stackflows/Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**throwSignal()**](SignalApi.md#throwSignal) | **POST** /api/signal | Throw a Signal


## `throwSignal()`

```php
throwSignal($throwSignalRequest)
```

Throw a Signal

Throw a Signal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Stackflows\GatewayApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\GatewayApi\Api\SignalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$throwSignalRequest = new \Stackflows\GatewayApi\Model\ThrowSignalRequest(); // \Stackflows\GatewayApi\Model\ThrowSignalRequest

try {
    $apiInstance->throwSignal($throwSignalRequest);
} catch (Exception $e) {
    echo 'Exception when calling SignalApi->throwSignal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **throwSignalRequest** | [**\Stackflows\GatewayApi\Model\ThrowSignalRequest**](../Model/ThrowSignalRequest.md)|  |

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
