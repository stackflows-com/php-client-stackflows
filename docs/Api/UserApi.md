# Stackflows\Clients\Stackflows\UserApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserOrganizations()**](UserApi.md#deleteUserOrganizations) | **DELETE** /api/v2/user/organizations/{organization} | Delete Organization
[**deleteUserRevoke()**](UserApi.md#deleteUserRevoke) | **DELETE** /api/v2/user/tokens | Revoke all tokens
[**getUserMe()**](UserApi.md#getUserMe) | **GET** /api/v2/user | Me
[**getUserOrganizationsList()**](UserApi.md#getUserOrganizationsList) | **GET** /api/v2/user/organizations | List Organizations
[**getUserOrganizationsShow()**](UserApi.md#getUserOrganizationsShow) | **GET** /api/v2/user/organizations/{id} | View Organization
[**postUserLogin()**](UserApi.md#postUserLogin) | **POST** /api/v2/user/login | Login
[**postUserOrganizationsStore()**](UserApi.md#postUserOrganizationsStore) | **POST** /api/v2/user/organizations | Create Organization
[**postUserRegister()**](UserApi.md#postUserRegister) | **POST** /api/v2/user/register | Register
[**postUserResetPassword()**](UserApi.md#postUserResetPassword) | **POST** /api/v2/user/reset-password | Restore password
[**putUserOrganizationsUpdate()**](UserApi.md#putUserOrganizationsUpdate) | **PUT** /api/v2/user/organizations/{id} | Update Organization
[**putUserUpdate()**](UserApi.md#putUserUpdate) | **PUT** /api/v2/user | Update


## `deleteUserOrganizations()`

```php
deleteUserOrganizations($organization, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
    $result = $apiInstance->deleteUserOrganizations($organization, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserOrganizations: ', $e->getMessage(), PHP_EOL;
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

## `deleteUserRevoke()`

```php
deleteUserRevoke($contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
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
    $result = $apiInstance->deleteUserRevoke($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserRevoke: ', $e->getMessage(), PHP_EOL;
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

## `getUserMe()`

```php
getUserMe($includeorganizations, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
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
$includeorganizations = sunt; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getUserMe($includeorganizations, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserMe: ', $e->getMessage(), PHP_EOL;
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

## `getUserOrganizationsList()`

```php
getUserOrganizationsList($contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource[]
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
    $result = $apiInstance->getUserOrganizationsList($contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserOrganizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `getUserOrganizationsShow()`

```php
getUserOrganizationsShow($id, $organization, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$id = 0d72cff0-e3ce-11ec-bd65-3fa8778c56e2; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->getUserOrganizationsShow($id, $organization, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserOrganizationsShow: ', $e->getMessage(), PHP_EOL;
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

## `postUserLogin()`

```php
postUserLogin($postUserLoginRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Login



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postUserLoginRequest = new \Stackflows\Clients\Stackflows\Model\PostUserLoginRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserLoginRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postUserLogin($postUserLoginRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserLoginRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserLoginRequest**](../Model/PostUserLoginRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `postUserOrganizationsStore()`

```php
postUserOrganizationsStore($postUserOrganizationsStoreRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$postUserOrganizationsStoreRequest = new \Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postUserOrganizationsStore($postUserOrganizationsStoreRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserOrganizationsStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserOrganizationsStoreRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest**](../Model/PostUserOrganizationsStoreRequest.md)|  |
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

## `postUserRegister()`

```php
postUserRegister($postUserRegisterRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Register



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postUserRegisterRequest = new \Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->postUserRegister($postUserRegisterRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserRegisterRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest**](../Model/PostUserRegisterRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

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

## `postUserResetPassword()`

```php
postUserResetPassword($postUserResetPasswordRequest, $contentType, $accept)
```

Restore password



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$postUserResetPasswordRequest = new \Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->postUserResetPassword($postUserResetPasswordRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserResetPasswordRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest**](../Model/PostUserResetPasswordRequest.md)|  |
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

## `putUserOrganizationsUpdate()`

```php
putUserOrganizationsUpdate($id, $organization, $contentType, $accept, $putUserOrganizationsUpdateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitResource
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
$id = 0d72cff0-e3ce-11ec-bd65-3fa8778c56e2; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$putUserOrganizationsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest

try {
    $result = $apiInstance->putUserOrganizationsUpdate($id, $organization, $contentType, $accept, $putUserOrganizationsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserOrganizationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the organization. |
 **organization** | **string**| The ID of an organization. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putUserOrganizationsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest**](../Model/PutUserOrganizationsUpdateRequest.md)|  | [optional]

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

## `putUserUpdate()`

```php
putUserUpdate($contentType, $accept, $putUserUpdateRequest): \Stackflows\Clients\Stackflows\Model\UserResource
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
$putUserUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest

try {
    $result = $apiInstance->putUserUpdate($contentType, $accept, $putUserUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **putUserUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest**](../Model/PutUserUpdateRequest.md)|  | [optional]

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
