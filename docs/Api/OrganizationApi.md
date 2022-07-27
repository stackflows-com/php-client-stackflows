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
deleteOrganizationUnits($organizationUnitId): \Stackflows\Clients\Stackflows\Model\OrganizationUnitModel
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
$organizationUnitId = voluptas; // string | The ID of the organizationUnit.

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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitModel**](../Model/OrganizationUnitModel.md)

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
getOrganizationUnitsList($filterRoot1, $includechildren): \Stackflows\Clients\Stackflows\Model\OrganizationUnitModel[]
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
$filterRoot1 = debitis; // string | Retrieve only root nodes
$includechildren = voluptate; // string | Load children

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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitModel[]**](../Model/OrganizationUnitModel.md)

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
getOrganizationUnitsShow($organizationUnitId): \Stackflows\Clients\Stackflows\Model\OrganizationUnitModel
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
$organizationUnitId = voluptas; // string | The ID of the organizationUnit.

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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitModel**](../Model/OrganizationUnitModel.md)

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
postOrganizationUnitsCreate($postOrganizationUnitsCreateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitModel
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitModel**](../Model/OrganizationUnitModel.md)

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
putOrganizationUnitsUpdate($organizationUnitId, $putOrganizationUnitsUpdateRequest): \Stackflows\Clients\Stackflows\Model\OrganizationUnitModel
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
$organizationUnitId = voluptas; // string | The ID of the organizationUnit.
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

[**\Stackflows\Clients\Stackflows\Model\OrganizationUnitModel**](../Model/OrganizationUnitModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
