# Stackflows\Clients\Stackflows\UserApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserOrganizations()**](UserApi.md#deleteUserOrganizations) | **DELETE** /api/v2/user/organizations/{organization_id} | Delete Organization
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
deleteUserOrganizations($organizationId, $organization): \Stackflows\Clients\Stackflows\Model\DeleteOrganizationResponse
```

Delete Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 05316710-0ac8-11ed-a9c9-1748e8abe9ab; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.

try {
    $result = $apiInstance->deleteUserOrganizations($organizationId, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| The ID of the organization. |
 **organization** | **string**| The ID of an organization. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\DeleteOrganizationResponse**](../Model/DeleteOrganizationResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserRevoke()`

```php
deleteUserRevoke(): \Stackflows\Clients\Stackflows\Model\RevokeAllTokensResponse
```

Revoke all tokens



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteUserRevoke();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\RevokeAllTokensResponse**](../Model/RevokeAllTokensResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserMe()`

```php
getUserMe($includeorganizations): \Stackflows\Clients\Stackflows\Model\MeResponse
```

Me



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeorganizations = rerum; // string | Possible includes

try {
    $result = $apiInstance->getUserMe($includeorganizations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeorganizations** | **string**| Possible includes | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserOrganizationsList()`

```php
getUserOrganizationsList(): \Stackflows\Clients\Stackflows\Model\ListOrganizationsResponse
```

List Organizations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserOrganizationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserOrganizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListOrganizationsResponse**](../Model/ListOrganizationsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserOrganizationsShow()`

```php
getUserOrganizationsShow($id, $organization): \Stackflows\Clients\Stackflows\Model\ViewOrganizationResponse
```

View Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 05316710-0ac8-11ed-a9c9-1748e8abe9ab; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.

try {
    $result = $apiInstance->getUserOrganizationsShow($id, $organization);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ViewOrganizationResponse**](../Model/ViewOrganizationResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserLogin()`

```php
postUserLogin($postUserLoginRequest): \Stackflows\Clients\Stackflows\Model\LoginResponse
```

Login



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postUserLoginRequest = new \Stackflows\Clients\Stackflows\Model\PostUserLoginRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserLoginRequest

try {
    $result = $apiInstance->postUserLogin($postUserLoginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserLoginRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserLoginRequest**](../Model/PostUserLoginRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserOrganizationsStore()`

```php
postUserOrganizationsStore($postUserOrganizationsStoreRequest): \Stackflows\Clients\Stackflows\Model\CreateOrganizationResponse
```

Create Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postUserOrganizationsStoreRequest = new \Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest

try {
    $result = $apiInstance->postUserOrganizationsStore($postUserOrganizationsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserOrganizationsStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserOrganizationsStoreRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserOrganizationsStoreRequest**](../Model/PostUserOrganizationsStoreRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CreateOrganizationResponse**](../Model/CreateOrganizationResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserRegister()`

```php
postUserRegister($postUserRegisterRequest): \Stackflows\Clients\Stackflows\Model\RegisterResponse
```

Register



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postUserRegisterRequest = new \Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest

try {
    $result = $apiInstance->postUserRegister($postUserRegisterRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserRegisterRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserRegisterRequest**](../Model/PostUserRegisterRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserResetPassword()`

```php
postUserResetPassword($postUserResetPasswordRequest)
```

Restore password



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postUserResetPasswordRequest = new \Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest(); // \Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest

try {
    $apiInstance->postUserResetPassword($postUserResetPasswordRequest);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postUserResetPasswordRequest** | [**\Stackflows\Clients\Stackflows\Model\PostUserResetPasswordRequest**](../Model/PostUserResetPasswordRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserOrganizationsUpdate()`

```php
putUserOrganizationsUpdate($id, $organization, $putUserOrganizationsUpdateRequest): \Stackflows\Clients\Stackflows\Model\UpdateOrganizationResponse
```

Update Organization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 05316710-0ac8-11ed-a9c9-1748e8abe9ab; // string | The ID of the organization.
$organization = 3688e6c0-1a56-11ec-8366; // string | The ID of an organization.
$putUserOrganizationsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest

try {
    $result = $apiInstance->putUserOrganizationsUpdate($id, $organization, $putUserOrganizationsUpdateRequest);
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
 **putUserOrganizationsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutUserOrganizationsUpdateRequest**](../Model/PutUserOrganizationsUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UpdateOrganizationResponse**](../Model/UpdateOrganizationResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserUpdate()`

```php
putUserUpdate($putUserUpdateRequest): \Stackflows\Clients\Stackflows\Model\UpdateResponse
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$putUserUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest

try {
    $result = $apiInstance->putUserUpdate($putUserUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **putUserUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutUserUpdateRequest**](../Model/PutUserUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UpdateResponse**](../Model/UpdateResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
