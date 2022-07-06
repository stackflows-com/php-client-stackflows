# Stackflows\Clients\Stackflows\OrganizationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationUnitsCreate()**](OrganizationApi.md#organizationUnitsCreate) | **POST** /api/v2/organization-units | Create
[**organizationUnitsDelete()**](OrganizationApi.md#organizationUnitsDelete) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete
[**organizationUnitsList()**](OrganizationApi.md#organizationUnitsList) | **GET** /api/v2/organization-units | List
[**organizationUnitsShow()**](OrganizationApi.md#organizationUnitsShow) | **GET** /api/v2/organization-units/{organizationUnit} | View
[**organizationUnitsUpdate()**](OrganizationApi.md#organizationUnitsUpdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update


## `organizationUnitsCreate()`

```php
organizationUnitsCreate($organizationUnitsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Create



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
    $result = $apiInstance->organizationUnitsCreate($organizationUnitsCreateRequest, $contentType, $accept);
    print_r($result);
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource**](../Model/OrganizationUnitResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationUnitsDelete()`

```php
organizationUnitsDelete($organizationUnit, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Delete



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
    $result = $apiInstance->organizationUnitsDelete($organizationUnit, $contentType, $accept);
    print_r($result);
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource**](../Model/OrganizationUnitResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationUnitsList()`

```php
organizationUnitsList($filterRoot1, $includechildren, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filterRoot1 = sit; // string | Retrieve only root nodes
$includechildren = quae; // string | Load children
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->organizationUnitsList($filterRoot1, $includechildren, $contentType, $accept);
    print_r($result);
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource**](../Model/OrganizationUnitResource.md)

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
organizationUnitsShow($organizationUnit, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

View



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
    $result = $apiInstance->organizationUnitsShow($organizationUnit, $contentType, $accept);
    print_r($result);
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource**](../Model/OrganizationUnitResource.md)

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
organizationUnitsUpdate($organizationUnit, $contentType, $accept, $organizationUnitsUpdateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Update



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
    $result = $apiInstance->organizationUnitsUpdate($organizationUnit, $contentType, $accept, $organizationUnitsUpdateRequest);
    print_r($result);
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource**](../Model/OrganizationUnitResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
