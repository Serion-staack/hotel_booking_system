# OpenAPI\Client\BookingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**a6680446a3228306b331198b1f89fb65()**](BookingsApi.md#a6680446a3228306b331198b1f89fb65) | **GET** /api/bookings | List all bookings |
| [**call49566b87da7686b9b3e658777c2418fd()**](BookingsApi.md#call49566b87da7686b9b3e658777c2418fd) | **POST** /api/bookings | Create a new booking |


## `a6680446a3228306b331198b1f89fb65()`

```php
a6680446a3228306b331198b1f89fb65()
```

List all bookings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->a6680446a3228306b331198b1f89fb65();
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->a6680446a3228306b331198b1f89fb65: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `call49566b87da7686b9b3e658777c2418fd()`

```php
call49566b87da7686b9b3e658777c2418fd($_49566b87da7686b9b3e658777c2418fd_request)
```

Create a new booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_49566b87da7686b9b3e658777c2418fd_request = new \OpenAPI\Client\Model\49566b87da7686b9b3e658777c2418fdRequest(); // \OpenAPI\Client\Model\49566b87da7686b9b3e658777c2418fdRequest

try {
    $apiInstance->call49566b87da7686b9b3e658777c2418fd($_49566b87da7686b9b3e658777c2418fd_request);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->call49566b87da7686b9b3e658777c2418fd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_49566b87da7686b9b3e658777c2418fd_request** | [**\OpenAPI\Client\Model\49566b87da7686b9b3e658777c2418fdRequest**](../Model/49566b87da7686b9b3e658777c2418fdRequest.md)|  | |

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
