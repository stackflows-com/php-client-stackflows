# Stackflows\Clients\Stackflows\AuthenticationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authLogin()**](AuthenticationApi.md#authLogin) | **POST** /api/v2/auth/login | Login
[**authRegister()**](AuthenticationApi.md#authRegister) | **POST** /api/v2/auth/register | Register
[**authResetPassword()**](AuthenticationApi.md#authResetPassword) | **POST** /api/v2/auth/reset-password | Restore password


## `authLogin()`

```php
authLogin($authLoginRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Login



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authLoginRequest = new \Stackflows\Clients\Stackflows\Model\AuthLoginRequest(); // \Stackflows\Clients\Stackflows\Model\AuthLoginRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authLogin($authLoginRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authLoginRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthLoginRequest**](../Model/AuthLoginRequest.md)|  |
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

## `authRegister()`

```php
authRegister($authRegisterRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Register



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authRegisterRequest = new \Stackflows\Clients\Stackflows\Model\AuthRegisterRequest(); // \Stackflows\Clients\Stackflows\Model\AuthRegisterRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authRegister($authRegisterRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authRegisterRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthRegisterRequest**](../Model/AuthRegisterRequest.md)|  |
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

## `authResetPassword()`

```php
authResetPassword($authResetPasswordRequest, $contentType, $accept)
```

Restore password



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authResetPasswordRequest = new \Stackflows\Clients\Stackflows\Model\AuthResetPasswordRequest(); // \Stackflows\Clients\Stackflows\Model\AuthResetPasswordRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $apiInstance->authResetPassword($authResetPasswordRequest, $contentType, $accept);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authResetPasswordRequest** | [**\Stackflows\Clients\Stackflows\Model\AuthResetPasswordRequest**](../Model/AuthResetPasswordRequest.md)|  |
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
