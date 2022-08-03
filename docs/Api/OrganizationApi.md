# Stackflows\Clients\Stackflows\OrganizationApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrganizationUnits()**](OrganizationApi.md#deleteOrganizationUnits) | **DELETE** /api/v2/organization-units/{organizationUnit_id} | Delete Organzation Unit
[**getOrganizationUnitsList()**](OrganizationApi.md#getOrganizationUnitsList) | **GET** /api/v2/organization-units | List Organzation Units
[**getOrganizationUnitsShow()**](OrganizationApi.md#getOrganizationUnitsShow) | **GET** /api/v2/organization-units/{organizationUnit_id} | View Organzation Unit
[**postOrganizationUnitsCreate()**](OrganizationApi.md#postOrganizationUnitsCreate) | **POST** /api/v2/organization-units | Create Organzation Unit
[**putOrganizationUnitsUpdate()**](OrganizationApi.md#putOrganizationUnitsUpdate) | **PUT** /api/v2/organization-units/{organizationUnit_id} | Update Organzation Unit


## `deleteOrganizationUnits()`

```php
deleteOrganizationUnits($organizationUnitId): \Stackflows\Clients\Stackflows\Model\DeleteOrganzationUnitResponse
```

Delete Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationUnitId = explicabo; // string | The ID of the organizationUnit.

try {
    $result = $apiInstance->deleteOrganizationUnits($organizationUnitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->deleteOrganizationUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnitId** | **string**| The ID of the organizationUnit. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\DeleteOrganzationUnitResponse**](../Model/DeleteOrganzationUnitResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationUnitsList()`

```php
getOrganizationUnitsList($filterRoot1, $includechildren): \Stackflows\Clients\Stackflows\Model\ListOrganzationUnitsResponse
```

List Organzation Units



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filterRoot1 = eos; // string | Retrieve only root nodes
$includechildren = veniam; // string | Load children

try {
    $result = $apiInstance->getOrganizationUnitsList($filterRoot1, $includechildren);
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

### Return type

[**\Stackflows\Clients\Stackflows\Model\ListOrganzationUnitsResponse**](../Model/ListOrganzationUnitsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationUnitsShow()`

```php
getOrganizationUnitsShow($organizationUnitId): \Stackflows\Clients\Stackflows\Model\ViewOrganzationUnitResponse
```

View Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationUnitId = explicabo; // string | The ID of the organizationUnit.

try {
    $result = $apiInstance->getOrganizationUnitsShow($organizationUnitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationUnitsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnitId** | **string**| The ID of the organizationUnit. |

### Return type

[**\Stackflows\Clients\Stackflows\Model\ViewOrganzationUnitResponse**](../Model/ViewOrganzationUnitResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrganizationUnitsCreate()`

```php
postOrganizationUnitsCreate($postOrganizationUnitsCreateRequest): \Stackflows\Clients\Stackflows\Model\CreateOrganzationUnitResponse
```

Create Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postOrganizationUnitsCreateRequest = new \Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest

try {
    $result = $apiInstance->postOrganizationUnitsCreate($postOrganizationUnitsCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganizationUnitsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postOrganizationUnitsCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\PostOrganizationUnitsCreateRequest**](../Model/PostOrganizationUnitsCreateRequest.md)|  |

### Return type

[**\Stackflows\Clients\Stackflows\Model\CreateOrganzationUnitResponse**](../Model/CreateOrganzationUnitResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putOrganizationUnitsUpdate()`

```php
putOrganizationUnitsUpdate($organizationUnitId, $putOrganizationUnitsUpdateRequest): \Stackflows\Clients\Stackflows\Model\UpdateOrganzationUnitResponse
```

Update Organzation Unit



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationUnitId = explicabo; // string | The ID of the organizationUnit.
$putOrganizationUnitsUpdateRequest = new \Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest

try {
    $result = $apiInstance->putOrganizationUnitsUpdate($organizationUnitId, $putOrganizationUnitsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationUnitsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUnitId** | **string**| The ID of the organizationUnit. |
 **putOrganizationUnitsUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\PutOrganizationUnitsUpdateRequest**](../Model/PutOrganizationUnitsUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\UpdateOrganzationUnitResponse**](../Model/UpdateOrganzationUnitResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
