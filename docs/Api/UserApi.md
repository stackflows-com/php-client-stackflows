# Stackflows\Clients\Stackflows\UserApi

All URIs are relative to https://stage-backoffice.stackflows.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUserMe()**](UserApi.md#authUserMe) | **GET** /api/v2/auth/user | Me
[**authUserOrganizationsDelete()**](UserApi.md#authUserOrganizationsDelete) | **DELETE** /api/v2/auth/user/organizations/{organization} | Delete Organization
[**authUserOrganizationsList()**](UserApi.md#authUserOrganizationsList) | **GET** /api/v2/auth/user/organizations | List Organizations
[**authUserOrganizationsShow()**](UserApi.md#authUserOrganizationsShow) | **GET** /api/v2/auth/user/organizations/{id} | View Organization
[**authUserOrganizationsStore()**](UserApi.md#authUserOrganizationsStore) | **POST** /api/v2/auth/user/organizations | Create Organization
[**authUserOrganizationsUpdate()**](UserApi.md#authUserOrganizationsUpdate) | **PUT** /api/v2/auth/user/organizations/{id} | Update Organization
[**authUserRevoke()**](UserApi.md#authUserRevoke) | **DELETE** /api/v2/auth/user/tokens | Revoke all tokens
[**authUserUpdate()**](UserApi.md#authUserUpdate) | **PUT** /api/v2/auth/user | Update


## `authUserMe()`

```php
authUserMe($includeorganizations, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Me



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeorganizations = quo; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserMe($includeorganizations, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeorganizations** | **string**| Possible includes | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserResource**](../Model/UserResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authUserOrganizationsDelete()`

```php
authUserOrganizationsDelete($organization, $contentType, $accept)
```

Delete Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserOrganizationsDelete($organization, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserOrganizationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The ID of an organization. |
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

## `authUserOrganizationsList()`

```php
authUserOrganizationsList($contentType, $accept)
```

List Organizations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserOrganizationsList($contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserOrganizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `authUserOrganizationsShow()`

```php
authUserOrganizationsShow($id, $organization, $contentType, $accept)
```

View Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1b50f220-f862-11ec-b2a3-ef0e089148f3; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserOrganizationsShow($id, $organization, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserOrganizationsShow: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

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
authUserOrganizationsStore($authUserOrganizationsStoreRequest, $contentType, $accept)
```

Create Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authUserOrganizationsStoreRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authUserOrganizationsStore($authUserOrganizationsStoreRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserOrganizationsStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authUserOrganizationsStoreRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsStoreRequest**](../Model/AuthUserOrganizationsStoreRequest.md)|  |
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

## `authUserOrganizationsUpdate()`

```php
authUserOrganizationsUpdate($id, $organization, $contentType, $accept, $authUserOrganizationsUpdateRequest)
```

Update Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1b50f220-f862-11ec-b2a3-ef0e089148f3; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authUserOrganizationsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserOrganizationsUpdateRequest

try {
    $apiInstance->authUserOrganizationsUpdate($id, $organization, $contentType, $accept, $authUserOrganizationsUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserOrganizationsUpdate: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authUserRevoke()`

```php
authUserRevoke($contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Revoke all tokens



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserRevoke($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserResource**](../Model/UserResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authUserUpdate()`

```php
authUserUpdate($contentType, $accept, $authUserUpdateRequest): \Stackflows\Clients\Stackflows\Model\UserResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/json; // string | 
$accept = application/json; // string | 
$authUserUpdateRequest = new \Stackflows\Clients\Stackflows\Model\AuthUserUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthUserUpdateRequest

try {
    $result = $apiInstance->authUserUpdate($contentType, $accept, $authUserUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authUserUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **authUserUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthUserUpdateRequest**](../Model/AuthUserUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UserResource**](../Model/UserResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
