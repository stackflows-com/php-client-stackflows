# Stackflows\Clients\Stackflows\OrganizationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrganizationUnits()**](OrganizationApi.md#deleteOrganizationUnits) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete Organzation Unit
[**getOrganizationUnitsList()**](OrganizationApi.md#getOrganizationUnitsList) | **GET** /api/v2/organization-units | List Organzation Units
[**getOrganizationUnitsShow()**](OrganizationApi.md#getOrganizationUnitsShow) | **GET** /api/v2/organization-units/{organizationUnit} | View Organzation Unit
[**postOrganizationUnitsCreate()**](OrganizationApi.md#postOrganizationUnitsCreate) | **POST** /api/v2/organization-units | Create Organzation Unit
[**putOrganizationUnitsUpdate()**](OrganizationApi.md#putOrganizationUnitsUpdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update Organzation Unit


## `deleteOrganizationUnits()`

```php
deleteOrganizationUnits($organizationUnit, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$organizationUnit = ut; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteOrganizationUnits($organizationUnit, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->deleteOrganizationUnits: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationUnitsList()`

```php
getOrganizationUnitsList($filterRoot1, $includechildren, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource[]
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
$filterRoot1 = aspernatur; // string | Retrieve only root nodes
$includechildren = provident; // string | Load children
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getOrganizationUnitsList($filterRoot1, $includechildren, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationUnitsList: ', $e->getMessage(), PHP_EOL;
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitResource[]**](../Model/OrganizationUnitResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationUnitsShow()`

```php
getOrganizationUnitsShow($organizationUnit, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$organizationUnit = ut; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getOrganizationUnitsShow($organizationUnit, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationUnitsShow: ', $e->getMessage(), PHP_EOL;
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

## `postOrganizationUnitsCreate()`

```php
postOrganizationUnitsCreate($postOrganizationUnitsCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$postOrganizationUnitsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postOrganizationUnitsCreate($postOrganizationUnitsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganizationUnitsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postOrganizationUnitsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest**](../Model/PostOrganizationUnitsCreateRequest.md)|  |
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

## `putOrganizationUnitsUpdate()`

```php
putOrganizationUnitsUpdate($organizationUnit, $contentType, $accept, $putOrganizationUnitsUpdateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$organizationUnit = ut; // string | 
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putOrganizationUnitsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest

try {
    $result = $apiInstance->putOrganizationUnitsUpdate($organizationUnit, $contentType, $accept, $putOrganizationUnitsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationUnitsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnit** | **string**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putOrganizationUnitsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest**](../Model/PutOrganizationUnitsUpdateRequest.md)|  | [optional]

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
