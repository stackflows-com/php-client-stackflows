# Stackflows\Clients\Stackflows\AuthenticatedUserOrganizationsApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUserOrganizationsDelete()**](AuthenticatedUserOrganizationsApi.md#authUserOrganizationsDelete) | **DELETE** /api/v2/auth/user/organizations/{organization} | Delete
[**authUserOrganizationsList()**](AuthenticatedUserOrganizationsApi.md#authUserOrganizationsList) | **GET** /api/v2/auth/user/organizations | List
[**authUserOrganizationsShow()**](AuthenticatedUserOrganizationsApi.md#authUserOrganizationsShow) | **GET** /api/v2/auth/user/organizations/{id} | View
[**authUserOrganizationsStore()**](AuthenticatedUserOrganizationsApi.md#authUserOrganizationsStore) | **POST** /api/v2/auth/user/organizations | Create
[**authUserOrganizationsUpdate()**](AuthenticatedUserOrganizationsApi.md#authUserOrganizationsUpdate) | **PUT** /api/v2/auth/user/organizations/{id} | Update


## `authUserOrganizationsDelete()`

```php
authUserOrganizationsDelete($organization, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserOrganizationsDelete($organization, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserOrganizationsApi->authUserOrganizationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The ID of an organization. |
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

## `authUserOrganizationsList()`

```php
authUserOrganizationsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserOrganizationsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserOrganizationsApi->authUserOrganizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `authUserOrganizationsShow()`

```php
authUserOrganizationsShow($id, $organization, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 0d72cff0-e3ce-11ec-bd65-3fa8778c56e2; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserOrganizationsShow($id, $organization, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserOrganizationsApi->authUserOrganizationsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the organization. |
 **organization** | **string**| The ID of an organization. |
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

## `authUserOrganizationsStore()`

```php
authUserOrganizationsStore($authUserOrganizationsStoreRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authUserOrganizationsStoreRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserOrganizationsStore($authUserOrganizationsStoreRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserOrganizationsApi->authUserOrganizationsStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authUserOrganizationsStoreRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest**](../Model/AuthUserOrganizationsStoreRequest.md)|  |
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

## `authUserOrganizationsUpdate()`

```php
authUserOrganizationsUpdate($id, $organization, $contentType, $accept, $authUserOrganizationsUpdateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 0d72cff0-e3ce-11ec-bd65-3fa8778c56e2; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authUserOrganizationsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsUpdateRequest

try {
    $result = $apiInstance->authUserOrganizationsUpdate($id, $organization, $contentType, $accept, $authUserOrganizationsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserOrganizationsApi->authUserOrganizationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the organization. |
 **organization** | **string**| The ID of an organization. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **authUserOrganizationsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsUpdateRequest**](../Model/AuthUserOrganizationsUpdateRequest.md)|  | [optional]

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
