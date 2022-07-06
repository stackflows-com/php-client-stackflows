# Stackflows\Clients\Stackflows\AuthenticatedUserApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUserMe()**](AuthenticatedUserApi.md#authUserMe) | **GET** /api/v2/auth/user | Me
[**authUserRevoke()**](AuthenticatedUserApi.md#authUserRevoke) | **DELETE** /api/v2/auth/user/tokens | Revoke all tokens
[**authUserUpdate()**](AuthenticatedUserApi.md#authUserUpdate) | **PUT** /api/v2/auth/user | Update


## `authUserMe()`

```php
authUserMe($includeorganizations, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Me



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeorganizations = consequatur; // string | Possible includes
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authUserMe($includeorganizations, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedUserApi->authUserMe: ', $e->getMessage(), PHP_EOL;
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

## `authUserRevoke()`

```php
authUserRevoke($contentType, $accept): \Stackflows\Clients\Stackflows\Model\UserResource
```

Revoke all tokens



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserApi(
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
    echo 'Exception when calling AuthenticatedUserApi->authUserRevoke: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedUserApi(
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
    echo 'Exception when calling AuthenticatedUserApi->authUserUpdate: ', $e->getMessage(), PHP_EOL;
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
