# Stackflows\Clients\Stackflows\TaggedApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postTaggedBusinessModelsStart()**](TaggedApi.md#postTaggedBusinessModelsStart) | **POST** /api/v2/tagged/business-models | Starts Business Process Models by Tag


## `postTaggedBusinessModelsStart()`

```php
postTaggedBusinessModelsStart($postTaggedBusinessModelsStartRequest): \Stackflows\Clients\Stackflows\Model\StartsBusinessProcessModelsByTagResponse
```

Starts Business Process Models by Tag



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\TaggedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postTaggedBusinessModelsStartRequest = new \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest(); // \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest

try {
    $result = $apiInstance->postTaggedBusinessModelsStart($postTaggedBusinessModelsStartRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggedApi->postTaggedBusinessModelsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTaggedBusinessModelsStartRequest** | [**\Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest**](../Model/PostTaggedBusinessModelsStartRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\StartsBusinessProcessModelsByTagResponse**](../Model/StartsBusinessProcessModelsByTagResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
