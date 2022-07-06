# Stackflows\Clients\Stackflows\BusinessModelPublicationsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelPublicationsList()**](BusinessModelPublicationsApi.md#businessModelPublicationsList) | **GET** /api/v2/business-model-publications | List
[**businessModelPublicationsShow()**](BusinessModelPublicationsApi.md#businessModelPublicationsShow) | **GET** /api/v2/business-model-publications/{publication} | View


## `businessModelPublicationsList()`

```php
businessModelPublicationsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelPublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelPublicationsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelPublicationsApi->businessModelPublicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource**](../Model/BusinessBaseModelPublicationResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessModelPublicationsShow()`

```php
businessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\BusinessModelPublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication = 25027da0-d893-11ec-85cc-f181a6cfaf8e; // string | 
$appendstatisticsoutliers = et; // string | Possible appends
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->businessModelPublicationsShow($publication, $appendstatisticsoutliers, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessModelPublicationsApi->businessModelPublicationsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication** | **string**|  |
 **appendstatisticsoutliers** | **string**| Possible appends | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\BusinessBaseModelPublicationResource**](../Model/BusinessBaseModelPublicationResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
