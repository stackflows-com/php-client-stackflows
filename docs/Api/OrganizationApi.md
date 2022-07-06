# Stackflows\Clients\Stackflows\OrganizationApi

All URIs are relative to https://stage-backoffice.stackflows.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationUnitsCreate()**](OrganizationApi.md#organizationUnitsCreate) | **POST** /api/v2/organization-units | Create Organzation Unit
[**organizationUnitsDelete()**](OrganizationApi.md#organizationUnitsDelete) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete Organzation Unit
[**organizationUnitsList()**](OrganizationApi.md#organizationUnitsList) | **GET** /api/v2/organization-units | List Organzation Units
[**organizationUnitsShow()**](OrganizationApi.md#organizationUnitsShow) | **GET** /api/v2/organization-units/{organizationUnit} | View Organzation Unit
[**organizationUnitsUpdate()**](OrganizationApi.md#organizationUnitsUpdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update Organzation Unit


## `organizationUnitsCreate()`

```php
organizationUnitsCreate($organizationUnitsCreateRequest, $contentType, $accept)
```

Create Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationUnitsCreateRequest = new \Stackflows\Clients\Stackflows\Model\OrganizationUnitsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\OrganizationUnitsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->organizationUnitsCreate($organizationUnitsCreateRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUnitsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnitsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\OrganizationUnitsCreateRequest**](../Model/OrganizationUnitsCreateRequest.md)|  |
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

## `organizationUnitsDelete()`

```php
organizationUnitsDelete($organizationUnit, $contentType, $accept)
```

Delete Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationUnit = tempora; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->organizationUnitsDelete($organizationUnit, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUnitsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnit** | **string**|  |
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

## `organizationUnitsList()`

```php
organizationUnitsList($filterRoot1, $includechildren, $contentType, $accept)
```

List Organzation Units



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filterRoot1 = vel; // string | Retrieve only root nodes
$includechildren = magni; // string | Load children
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->organizationUnitsList($filterRoot1, $includechildren, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUnitsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterRoot1** | **string**| Retrieve only root nodes | [optional]
 **includechildren** | **string**| Load children | [optional]
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

## `organizationUnitsShow()`

```php
organizationUnitsShow($organizationUnit, $contentType, $accept)
```

View Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationUnit = tempora; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->organizationUnitsShow($organizationUnit, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUnitsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnit** | **string**|  |
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

## `organizationUnitsUpdate()`

```php
organizationUnitsUpdate($organizationUnit, $contentType, $accept, $organizationUnitsUpdateRequest)
```

Update Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationUnit = tempora; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$organizationUnitsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\OrganizationUnitsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\OrganizationUnitsUpdateRequest

try {
    $apiInstance->organizationUnitsUpdate($organizationUnit, $contentType, $accept, $organizationUnitsUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUnitsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnit** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **organizationUnitsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\OrganizationUnitsUpdateRequest**](../Model/OrganizationUnitsUpdateRequest.md)|  | [optional]

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
