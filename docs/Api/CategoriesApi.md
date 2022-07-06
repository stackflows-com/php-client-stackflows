# Stackflows\Clients\Stackflows\CategoriesApi

All URIs are relative to http://localhost:8081.

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesCreate()**](CategoriesApi.md#categoriesCreate) | **POST** /api/v2/categories | Create
[**categoriesDelete()**](CategoriesApi.md#categoriesDelete) | **DELETE** /api/v2/categories/{category} | Delete
[**categoriesList()**](CategoriesApi.md#categoriesList) | **GET** /api/v2/categories | List
[**categoriesShow()**](CategoriesApi.md#categoriesShow) | **GET** /api/v2/categories/{id} | View
[**categoriesUpdate()**](CategoriesApi.md#categoriesUpdate) | **PUT** /api/v2/categories/{id} | Update


## `categoriesCreate()`

```php
categoriesCreate($categoriesCreateRequest, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Create



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoriesCreateRequest = new \Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest(); // \Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesCreate($categoriesCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoriesCreateRequest** | [**\Stackflows\Clients\Stackflows\Model\CategoriesCreateRequest**](../Model/CategoriesCreateRequest.md)|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesDelete()`

```php
categoriesDelete($category, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Delete



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = 1; // int | 
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesDelete($category, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **int**|  |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesList()`

```php
categoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

List



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filterRoot = true; // bool | Use combination with include=children for full tree list.
$filterSiblings = 145; // int | ID of a category which siblings should be retrieved.
$filterAutocomplete = tes; // string | Autocomplete.
$filterSearch = tes; // string | Search.
$fieldsBusinessProcessLatestDiagram = snapshot; // string | Include fields from the latest release record.
$include = children,business-models,business-models.comments-count,business-models.owner,business-models.latest-diagram; // string | Includes relations.
$filterSearchBusinessModels = Some model; // string | Search categories that has models based on specified keyword.
$sort = name,-created_at,-updated_at Sorting example; // string | Sort by specific field.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesList($filterRoot, $filterSiblings, $filterAutocomplete, $filterSearch, $fieldsBusinessProcessLatestDiagram, $include, $filterSearchBusinessModels, $sort, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterRoot** | **bool**| Use combination with include&#x3D;children for full tree list. | [optional]
 **filterSiblings** | **int**| ID of a category which siblings should be retrieved. | [optional]
 **filterAutocomplete** | **string**| Autocomplete. | [optional]
 **filterSearch** | **string**| Search. | [optional]
 **fieldsBusinessProcessLatestDiagram** | **string**| Include fields from the latest release record. | [optional]
 **include** | **string**| Includes relations. | [optional]
 **filterSearchBusinessModels** | **string**| Search categories that has models based on specified keyword. | [optional]
 **sort** | **string**| Sort by specific field. | [optional]
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesShow()`

```php
categoriesShow($id, $contentType, $accept): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

View



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->categoriesShow($id, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesUpdate()`

```php
categoriesUpdate($id, $contentType, $accept, $categoriesUpdateRequest): \Stackflows\Clients\Stackflows\Model\CategoryResource
```

Update



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stackflows\Clients\Stackflows\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | The ID of the category.
$contentType = application/json; // string | 
$accept = application/json; // string | 
$categoriesUpdateRequest = new \Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest(); // \Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest

try {
    $result = $apiInstance->categoriesUpdate($id, $contentType, $accept, $categoriesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the category. |
 **contentType** | **string**|  | [optional]
 **accept** | **string**|  | [optional]
 **categoriesUpdateRequest** | [**\Stackflows\Clients\Stackflows\Model\CategoriesUpdateRequest**](../Model/CategoriesUpdateRequest.md)|  | [optional]

### Return type

[**\Stackflows\Clients\Stackflows\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
