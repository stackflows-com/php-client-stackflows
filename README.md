# PHP Client for Stackflows Gateway API


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/stackflows-com/php-client-stackflows.git"
    }
  ],
  "require": {
    "stackflows-com/php-client-stackflows": "*@dev"
  }
}
```

Then run `composer install`


## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$serviceTask = new Stackflows\GatewayApi\Api\ServiceTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$getPendingServiceTaskRequest = new \Stackflows\GatewayApi\Model\GetPendingServiceTaskRequest(); // \Stackflows\GatewayApi\Model\GetPendingServiceTaskRequest

try {
    $result = $serviceTask->getPending($getPendingServiceTaskRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTaskApi->getPending: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/Stackflows/Gateway/1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ServiceTaskApi* | [**complete**](docs/Api/ServiceTaskApi.md#complete) | **POST** /api/service-tasks/{id}/complete | Complete Service Task
*ServiceTaskApi* | [**getPending**](docs/Api/ServiceTaskApi.md#getpending) | **POST** /api/service-tasks/pending | Fetch and Lock Service Tasks
*SignalApi* | [**throwSignal**](docs/Api/SignalApi.md#throwsignal) | **POST** /api/signal | Throw a Signal
*UserTaskApi* | [**completeTask**](docs/Api/UserTaskApi.md#completetask) | **POST** /api/tasks/{id}/complete | Complete User Task
*UserTaskApi* | [**getList**](docs/Api/UserTaskApi.md#getlist) | **GET** /api/tasks | Get a list of tasks

## Models

- [CompleteServiceTaskRequest](docs/Model/CompleteServiceTaskRequest.md)
- [CompleteUserTaskRequest](docs/Model/CompleteUserTaskRequest.md)
- [GetPendingServiceTaskRequest](docs/Model/GetPendingServiceTaskRequest.md)
- [ServiceTask](docs/Model/ServiceTask.md)
- [ThrowSignalRequest](docs/Model/ThrowSignalRequest.md)
- [UserTask](docs/Model/UserTask.md)
- [Variable](docs/Model/Variable.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@stackflows.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
