# Stackflows\Clients\Stackflows\AuthenticatedEnvironmentBusinessModelDiagramsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authBusinessModelDiagramsCreate()**](AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authBusinessModelDiagramsCreate) | **POST** /api/v2/auth/environment/business-model-diagrams | Create
[**authBusinessModelDiagramsDelete()**](AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authBusinessModelDiagramsDelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram} | Delete
[**authBusinessModelDiagramsList()**](AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authBusinessModelDiagramsList) | **GET** /api/v2/auth/environment/business-model-diagrams | List
[**authBusinessModelDiagramsPublish()**](AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authBusinessModelDiagramsPublish) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/publish | Publish
[**authBusinessModelDiagramsShow()**](AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authBusinessModelDiagramsShow) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram} | View


## `authBusinessModelDiagramsCreate()`

```php
authBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xml = 'xml_example'; // string | 
$businessModelId = 'businessModelId_example'; // string | 
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | of the process diagram

try {
    $result = $apiInstance->authBusinessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelDiagramsApi->authBusinessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xml** | **string**|  |
 **businessModelId** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **snapshot** | **\SplFileObject****\SplFileObject**| of the process diagram | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsDelete()`

```php
authBusinessModelDiagramsDelete($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsDelete($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelDiagramsApi->authBusinessModelDiagramsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsList()`

```php
authBusinessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelDiagramsApi->authBusinessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsPublish()`

```php
authBusinessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Publish



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->authBusinessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelDiagramsApi->authBusinessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **authBusinessModelDiagramsPublishRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest**](../Model/AuthBusinessModelDiagramsPublishRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authBusinessModelDiagramsShow()`

```php
authBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$includesnapshotsdeploysdeploysStatistics = unde; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelDiagramsApi->authBusinessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **includesnapshotsdeploysdeploysStatistics** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource**](../Model/BusinessBaseModelDiagramResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
