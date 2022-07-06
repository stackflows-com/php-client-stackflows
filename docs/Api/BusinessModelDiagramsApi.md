# Stackflows\Clients\Stackflows\BusinessModelDiagramsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelDiagramsCreate()**](BusinessModelDiagramsApi.md#businessModelDiagramsCreate) | **POST** /api/v2/business-model-diagrams | Create
[**businessModelDiagramsDelete()**](BusinessModelDiagramsApi.md#businessModelDiagramsDelete) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete
[**businessModelDiagramsList()**](BusinessModelDiagramsApi.md#businessModelDiagramsList) | **GET** /api/v2/business-model-diagrams | List
[**businessModelDiagramsPublish()**](BusinessModelDiagramsApi.md#businessModelDiagramsPublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish
[**businessModelDiagramsShow()**](BusinessModelDiagramsApi.md#businessModelDiagramsShow) | **GET** /api/v2/business-model-diagrams/{diagram} | View
[**businessModelDiagramsUpdate()**](BusinessModelDiagramsApi.md#businessModelDiagramsUpdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update


## `businessModelDiagramsCreate()`

```php
businessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
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
    $result = $apiInstance->businessModelDiagramsCreate($xml, $businessModelId, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsCreate: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsDelete()`

```php
businessModelDiagramsDelete($diagram, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsDelete($diagram, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsDelete: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsList()`

```php
businessModelDiagramsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsList: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsPublish()`

```php
businessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Publish



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authBusinessModelDiagramsPublishRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsPublishRequest

try {
    $result = $apiInstance->businessModelDiagramsPublish($diagram, $contentType, $accept, $authBusinessModelDiagramsPublishRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsPublish: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsShow()`

```php
businessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$includesnapshotsdeploysdeploysStatistics = accusamus; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelDiagramsShow($diagram, $includesnapshotsdeploysdeploysStatistics, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsShow: ', $e->getMessage(), PHP_EOL;
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

## `businessModelDiagramsUpdate()`

```php
businessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelDiagramResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$xml = 'xml_example'; // string | 
$contentType = multipart/form-data; // string | 
$accept = application/json; // string | 
$snapshot = "/path/to/file.txt"; // \SplFileObject | Snapshot of the process diagram

try {
    $result = $apiInstance->businessModelDiagramsUpdate($diagram, $xml, $contentType, $accept, $snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelDiagramsApi->businessModelDiagramsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diagram** | **string**|  |
 **xml** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **snapshot** | **\SplFileObject****\SplFileObject**| Snapshot of the process diagram | [optional]

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
