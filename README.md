# Stackflows REST API Client

Pagination query params are as follows: page[size]=10&page[number]=1


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Stackflows REST API Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://stage-backoffice.stackflows.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**authLogin**](docs/Api/AuthenticationApi.md#authlogin) | **POST** /api/v2/auth/login | Login
*AuthenticationApi* | [**authRegister**](docs/Api/AuthenticationApi.md#authregister) | **POST** /api/v2/auth/register | Register
*AuthenticationApi* | [**authResetPassword**](docs/Api/AuthenticationApi.md#authresetpassword) | **POST** /api/v2/auth/reset-password | Restore password
*EnvironmentApi* | [**authBusinessModelDiagramsCommentsCreate**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramscommentscreate) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
*EnvironmentApi* | [**authBusinessModelDiagramsCommentsDelete**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramscommentsdelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
*EnvironmentApi* | [**authBusinessModelDiagramsCommentsList**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramscommentslist) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
*EnvironmentApi* | [**authBusinessModelDiagramsCreate**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramscreate) | **POST** /api/v2/auth/environment/business-model-diagrams | Create Business Model Diagram
*EnvironmentApi* | [**authBusinessModelDiagramsDelete**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramsdelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram} | Delete Business Model Diagram
*EnvironmentApi* | [**authBusinessModelDiagramsList**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramslist) | **GET** /api/v2/auth/environment/business-model-diagrams | List Business Model Diagram
*EnvironmentApi* | [**authBusinessModelDiagramsPublish**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramspublish) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
*EnvironmentApi* | [**authBusinessModelDiagramsShow**](docs/Api/EnvironmentApi.md#authbusinessmodeldiagramsshow) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram} | View Business Model Diagram
*EnvironmentApi* | [**authBusinessModelsCommentsList**](docs/Api/EnvironmentApi.md#authbusinessmodelscommentslist) | **GET** /api/v2/auth/environment/business-models/{model}/comments | List Business Model Comments
*EnvironmentApi* | [**authBusinessModelsCreate**](docs/Api/EnvironmentApi.md#authbusinessmodelscreate) | **POST** /api/v2/auth/environment/business-models | Create Business Model
*EnvironmentApi* | [**authBusinessModelsDelete**](docs/Api/EnvironmentApi.md#authbusinessmodelsdelete) | **DELETE** /api/v2/auth/environment/business-models/{model} | Delete Business Model
*EnvironmentApi* | [**authBusinessModelsList**](docs/Api/EnvironmentApi.md#authbusinessmodelslist) | **GET** /api/v2/auth/environment/business-models | List Business Models
*EnvironmentApi* | [**authBusinessModelsShow**](docs/Api/EnvironmentApi.md#authbusinessmodelsshow) | **GET** /api/v2/auth/environment/business-models/{model} | View Business Model
*EnvironmentApi* | [**authServiceTasksLock**](docs/Api/EnvironmentApi.md#authservicetaskslock) | **POST** /api/v2/auth/environment/service-tasks | Lock Service Tasks
*EnvironmentApi* | [**authServiceTasksServe**](docs/Api/EnvironmentApi.md#authservicetasksserve) | **POST** /api/v2/auth/environment/service-tasks/{reference}/serve | Serve Service Task
*EnvironmentApi* | [**authServiceTasksUnlock**](docs/Api/EnvironmentApi.md#authservicetasksunlock) | **POST** /api/v2/auth/environment/service-tasks/{reference}/unlock | Unlock Service Task
*EnvironmentApi* | [**authTaggedBusinessModelsStart**](docs/Api/EnvironmentApi.md#authtaggedbusinessmodelsstart) | **POST** /api/v2/auth/environment/tagged/business-process-models | Starts Business Process Models by Tag
*EnvironmentApi* | [**authUserTasksComplete**](docs/Api/EnvironmentApi.md#authusertaskscomplete) | **POST** /api/v2/auth/environment/user-tasks/{id}/complete | Complete User Task
*EnvironmentApi* | [**authUserTasksErrorize**](docs/Api/EnvironmentApi.md#authusertaskserrorize) | **POST** /api/v2/auth/environment/user-tasks/{id}/errorize | Errorize User Task
*EnvironmentApi* | [**authUserTasksEscalate**](docs/Api/EnvironmentApi.md#authusertasksescalate) | **POST** /api/v2/auth/environment/user-tasks/{id}/escalate | Escalate User Task
*EnvironmentApi* | [**authUserTasksIndex**](docs/Api/EnvironmentApi.md#authusertasksindex) | **GET** /api/v2/auth/environment/user-tasks | List User Tasks
*InstallationApi* | [**enginesCreate**](docs/Api/InstallationApi.md#enginescreate) | **POST** /api/v2/engines | Create Engine
*InstallationApi* | [**enginesDelete**](docs/Api/InstallationApi.md#enginesdelete) | **DELETE** /api/v2/engines/{engine} | Delete Engine
*InstallationApi* | [**enginesShow**](docs/Api/InstallationApi.md#enginesshow) | **GET** /api/v2/engines/{id} | View Engine
*InstallationApi* | [**enginesUpdate**](docs/Api/InstallationApi.md#enginesupdate) | **PUT** /api/v2/engines/{id} | Update Engine
*InstallationApi* | [**environmentsCreate**](docs/Api/InstallationApi.md#environmentscreate) | **POST** /api/v2/environments | Create Environment
*InstallationApi* | [**environmentsDeleteBulk**](docs/Api/InstallationApi.md#environmentsdeletebulk) | **DELETE** /api/v2/environments | Delete Environments
*InstallationApi* | [**environmentsList**](docs/Api/InstallationApi.md#environmentslist) | **GET** /api/v2/environments | List Environments
*InstallationApi* | [**getEngine**](docs/Api/InstallationApi.md#getengine) | **GET** /api/v2/engines | List Engines
*OperationsApi* | [**businessModelDiagramsCommentsCreate**](docs/Api/OperationsApi.md#businessmodeldiagramscommentscreate) | **POST** /api/v2/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
*OperationsApi* | [**businessModelDiagramsCommentsDelete**](docs/Api/OperationsApi.md#businessmodeldiagramscommentsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
*OperationsApi* | [**businessModelDiagramsCommentsList**](docs/Api/OperationsApi.md#businessmodeldiagramscommentslist) | **GET** /api/v2/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
*OperationsApi* | [**businessModelDiagramsCreate**](docs/Api/OperationsApi.md#businessmodeldiagramscreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
*OperationsApi* | [**businessModelDiagramsDelete**](docs/Api/OperationsApi.md#businessmodeldiagramsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete Business Model Diagram
*OperationsApi* | [**businessModelDiagramsList**](docs/Api/OperationsApi.md#businessmodeldiagramslist) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
*OperationsApi* | [**businessModelDiagramsPublish**](docs/Api/OperationsApi.md#businessmodeldiagramspublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
*OperationsApi* | [**businessModelDiagramsShow**](docs/Api/OperationsApi.md#businessmodeldiagramsshow) | **GET** /api/v2/business-model-diagrams/{diagram} | View Business Model Diagram
*OperationsApi* | [**businessModelDiagramsUpdate**](docs/Api/OperationsApi.md#businessmodeldiagramsupdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update Business Model Diagram
*OperationsApi* | [**businessModelExceptionsCreate**](docs/Api/OperationsApi.md#businessmodelexceptionscreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
*OperationsApi* | [**businessModelExceptionsDelete**](docs/Api/OperationsApi.md#businessmodelexceptionsdelete) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete Business Model Exception
*OperationsApi* | [**businessModelExceptionsList**](docs/Api/OperationsApi.md#businessmodelexceptionslist) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
*OperationsApi* | [**businessModelExceptionsShow**](docs/Api/OperationsApi.md#businessmodelexceptionsshow) | **GET** /api/v2/business-model-exceptions/{exception} | View Business Model Exception
*OperationsApi* | [**businessModelExceptionsUpdate**](docs/Api/OperationsApi.md#businessmodelexceptionsupdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update Business Model Exception
*OperationsApi* | [**businessModelPublicationsList**](docs/Api/OperationsApi.md#businessmodelpublicationslist) | **GET** /api/v2/business-model-publications | List Business Model Publications
*OperationsApi* | [**businessModelPublicationsShow**](docs/Api/OperationsApi.md#businessmodelpublicationsshow) | **GET** /api/v2/business-model-publications/{publication} | View Business Model Publication
*OperationsApi* | [**businessModelsCommentsList**](docs/Api/OperationsApi.md#businessmodelscommentslist) | **GET** /api/v2/business-models/{model}/comments | List Business Model Comments
*OperationsApi* | [**businessModelsCreate**](docs/Api/OperationsApi.md#businessmodelscreate) | **POST** /api/v2/business-models | Create Business Model
*OperationsApi* | [**businessModelsDelete**](docs/Api/OperationsApi.md#businessmodelsdelete) | **DELETE** /api/v2/business-models/{model} | Delete Business Model
*OperationsApi* | [**businessModelsDeleteBulk**](docs/Api/OperationsApi.md#businessmodelsdeletebulk) | **DELETE** /api/v2/business-models | Delete Business Models
*OperationsApi* | [**businessModelsList**](docs/Api/OperationsApi.md#businessmodelslist) | **GET** /api/v2/business-models | List Business Models
*OperationsApi* | [**businessModelsPostRevision**](docs/Api/OperationsApi.md#businessmodelspostrevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Business Model Diagram
*OperationsApi* | [**businessModelsShow**](docs/Api/OperationsApi.md#businessmodelsshow) | **GET** /api/v2/business-models/{model} | View Business Model
*OperationsApi* | [**businessModelsShowRevision**](docs/Api/OperationsApi.md#businessmodelsshowrevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Business Model Diagram
*OperationsApi* | [**businessModelsShowRevisions**](docs/Api/OperationsApi.md#businessmodelsshowrevisions) | **GET** /api/v2/business-models/{model}/revisions | List Business Model Disgrams
*OperationsApi* | [**businessModelsTag**](docs/Api/OperationsApi.md#businessmodelstag) | **POST** /api/v2/business-models/{taggable}/tag | Tag Business Model
*OperationsApi* | [**businessModelsUpdate**](docs/Api/OperationsApi.md#businessmodelsupdate) | **PUT** /api/v2/business-models/{model} | Update Business Model
*OperationsApi* | [**businessProcessesCreate**](docs/Api/OperationsApi.md#businessprocessescreate) | **POST** /api/v2/business-processes | Create Business Process Tag
*OperationsApi* | [**businessProcessesDelete**](docs/Api/OperationsApi.md#businessprocessesdelete) | **DELETE** /api/v2/business-processes/{tag} | Delete Business Process Tag
*OperationsApi* | [**businessProcessesDeleteBulk**](docs/Api/OperationsApi.md#businessprocessesdeletebulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
*OperationsApi* | [**businessProcessesList**](docs/Api/OperationsApi.md#businessprocesseslist) | **GET** /api/v2/business-processes | List Business Process Tags
*OperationsApi* | [**businessProcessesShow**](docs/Api/OperationsApi.md#businessprocessesshow) | **GET** /api/v2/business-processes/{tag} | View Business Process Tag
*OperationsApi* | [**businessProcessesUpdate**](docs/Api/OperationsApi.md#businessprocessesupdate) | **PUT** /api/v2/business-processes/{tag} | Update Business Process Tag
*OperationsApi* | [**categoriesCreate**](docs/Api/OperationsApi.md#categoriescreate) | **POST** /api/v2/categories | Create Category
*OperationsApi* | [**categoriesDelete**](docs/Api/OperationsApi.md#categoriesdelete) | **DELETE** /api/v2/categories/{category} | Delete Category
*OperationsApi* | [**categoriesList**](docs/Api/OperationsApi.md#categorieslist) | **GET** /api/v2/categories | List Categories
*OperationsApi* | [**categoriesShow**](docs/Api/OperationsApi.md#categoriesshow) | **GET** /api/v2/categories/{id} | View Category
*OperationsApi* | [**categoriesUpdate**](docs/Api/OperationsApi.md#categoriesupdate) | **PUT** /api/v2/categories/{id} | Update Category
*OperationsApi* | [**tagsCreate**](docs/Api/OperationsApi.md#tagscreate) | **POST** /api/v2/tags | Create Tag
*OperationsApi* | [**tagsDelete**](docs/Api/OperationsApi.md#tagsdelete) | **DELETE** /api/v2/tags/{tag} | Delete Tag
*OperationsApi* | [**tagsList**](docs/Api/OperationsApi.md#tagslist) | **GET** /api/v2/tags | List Tags
*OperationsApi* | [**tagsShow**](docs/Api/OperationsApi.md#tagsshow) | **GET** /api/v2/tags/{id} | View Tag
*OperationsApi* | [**tagsUpdate**](docs/Api/OperationsApi.md#tagsupdate) | **PUT** /api/v2/tags/{id} | Update Tag
*OperationsApi* | [**tasksCreate**](docs/Api/OperationsApi.md#taskscreate) | **POST** /api/v2/tasks | Create Task
*OperationsApi* | [**tasksDelete**](docs/Api/OperationsApi.md#tasksdelete) | **DELETE** /api/v2/tasks/{task} | Delete Task
*OperationsApi* | [**tasksList**](docs/Api/OperationsApi.md#taskslist) | **GET** /api/v2/tasks | List Tasks
*OperationsApi* | [**tasksShow**](docs/Api/OperationsApi.md#tasksshow) | **GET** /api/v2/tasks/{id} | View Task
*OperationsApi* | [**tasksUpdate**](docs/Api/OperationsApi.md#tasksupdate) | **PUT** /api/v2/tasks/{id} | Update Task
*OrganizationApi* | [**organizationUnitsCreate**](docs/Api/OrganizationApi.md#organizationunitscreate) | **POST** /api/v2/organization-units | Create Organzation Unit
*OrganizationApi* | [**organizationUnitsDelete**](docs/Api/OrganizationApi.md#organizationunitsdelete) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete Organzation Unit
*OrganizationApi* | [**organizationUnitsList**](docs/Api/OrganizationApi.md#organizationunitslist) | **GET** /api/v2/organization-units | List Organzation Units
*OrganizationApi* | [**organizationUnitsShow**](docs/Api/OrganizationApi.md#organizationunitsshow) | **GET** /api/v2/organization-units/{organizationUnit} | View Organzation Unit
*OrganizationApi* | [**organizationUnitsUpdate**](docs/Api/OrganizationApi.md#organizationunitsupdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update Organzation Unit
*TaggedApi* | [**taggedBusinessModelsStart**](docs/Api/TaggedApi.md#taggedbusinessmodelsstart) | **POST** /api/v2/tagged/business-models | Starts Business Process Models by Tag
*UserApi* | [**authUserMe**](docs/Api/UserApi.md#authuserme) | **GET** /api/v2/auth/user | Me
*UserApi* | [**authUserOrganizationsDelete**](docs/Api/UserApi.md#authuserorganizationsdelete) | **DELETE** /api/v2/auth/user/organizations/{organization} | Delete Organization
*UserApi* | [**authUserOrganizationsList**](docs/Api/UserApi.md#authuserorganizationslist) | **GET** /api/v2/auth/user/organizations | List Organizations
*UserApi* | [**authUserOrganizationsShow**](docs/Api/UserApi.md#authuserorganizationsshow) | **GET** /api/v2/auth/user/organizations/{id} | View Organization
*UserApi* | [**authUserOrganizationsStore**](docs/Api/UserApi.md#authuserorganizationsstore) | **POST** /api/v2/auth/user/organizations | Create Organization
*UserApi* | [**authUserOrganizationsUpdate**](docs/Api/UserApi.md#authuserorganizationsupdate) | **PUT** /api/v2/auth/user/organizations/{id} | Update Organization
*UserApi* | [**authUserRevoke**](docs/Api/UserApi.md#authuserrevoke) | **DELETE** /api/v2/auth/user/tokens | Revoke all tokens
*UserApi* | [**authUserUpdate**](docs/Api/UserApi.md#authuserupdate) | **PUT** /api/v2/auth/user | Update

## Models

- [AuthBusinessModelDiagramsCommentsCreateRequest](docs/Model/AuthBusinessModelDiagramsCommentsCreateRequest.md)
- [AuthBusinessModelDiagramsPublishRequest](docs/Model/AuthBusinessModelDiagramsPublishRequest.md)
- [AuthBusinessModelsCreateRequest](docs/Model/AuthBusinessModelsCreateRequest.md)
- [AuthLoginRequest](docs/Model/AuthLoginRequest.md)
- [AuthRegisterRequest](docs/Model/AuthRegisterRequest.md)
- [AuthResetPasswordRequest](docs/Model/AuthResetPasswordRequest.md)
- [AuthServiceTasksLockRequest](docs/Model/AuthServiceTasksLockRequest.md)
- [AuthServiceTasksServeRequest](docs/Model/AuthServiceTasksServeRequest.md)
- [AuthServiceTasksUnlockRequest](docs/Model/AuthServiceTasksUnlockRequest.md)
- [AuthTaggedBusinessModelsStartRequest](docs/Model/AuthTaggedBusinessModelsStartRequest.md)
- [AuthUserOrganizationsStoreRequest](docs/Model/AuthUserOrganizationsStoreRequest.md)
- [AuthUserOrganizationsUpdateRequest](docs/Model/AuthUserOrganizationsUpdateRequest.md)
- [AuthUserTasksErrorizeRequest](docs/Model/AuthUserTasksErrorizeRequest.md)
- [AuthUserTasksEscalateRequest](docs/Model/AuthUserTasksEscalateRequest.md)
- [AuthUserTasksEscalateRequestVariablesInner](docs/Model/AuthUserTasksEscalateRequestVariablesInner.md)
- [AuthUserTasksIndex401Response](docs/Model/AuthUserTasksIndex401Response.md)
- [AuthUserUpdateRequest](docs/Model/AuthUserUpdateRequest.md)
- [BusinessBaseModelDiagramResource](docs/Model/BusinessBaseModelDiagramResource.md)
- [BusinessBaseModelPublicationResource](docs/Model/BusinessBaseModelPublicationResource.md)
- [BusinessBaseModelResource](docs/Model/BusinessBaseModelResource.md)
- [BusinessModelDiagramsCommentsCreateRequest](docs/Model/BusinessModelDiagramsCommentsCreateRequest.md)
- [BusinessModelExceptionsCreateRequest](docs/Model/BusinessModelExceptionsCreateRequest.md)
- [BusinessModelExceptionsUpdateRequest](docs/Model/BusinessModelExceptionsUpdateRequest.md)
- [BusinessModelsCreateRequest](docs/Model/BusinessModelsCreateRequest.md)
- [BusinessModelsDeleteBulkRequest](docs/Model/BusinessModelsDeleteBulkRequest.md)
- [BusinessModelsTagRequest](docs/Model/BusinessModelsTagRequest.md)
- [BusinessModelsUpdateRequest](docs/Model/BusinessModelsUpdateRequest.md)
- [BusinessProcessesCreateRequest](docs/Model/BusinessProcessesCreateRequest.md)
- [BusinessProcessesDeleteBulkRequest](docs/Model/BusinessProcessesDeleteBulkRequest.md)
- [BusinessProcessesUpdateRequest](docs/Model/BusinessProcessesUpdateRequest.md)
- [CategoriesCreateRequest](docs/Model/CategoriesCreateRequest.md)
- [CategoriesUpdateRequest](docs/Model/CategoriesUpdateRequest.md)
- [CategoryResource](docs/Model/CategoryResource.md)
- [CommentResource](docs/Model/CommentResource.md)
- [EngineResource](docs/Model/EngineResource.md)
- [EnginesCreateRequest](docs/Model/EnginesCreateRequest.md)
- [EnginesUpdateRequest](docs/Model/EnginesUpdateRequest.md)
- [EnvironmentResource](docs/Model/EnvironmentResource.md)
- [EnvironmentsCreateRequest](docs/Model/EnvironmentsCreateRequest.md)
- [EnvironmentsDeleteBulkRequest](docs/Model/EnvironmentsDeleteBulkRequest.md)
- [OrganizationUnitsCreateRequest](docs/Model/OrganizationUnitsCreateRequest.md)
- [OrganizationUnitsUpdateRequest](docs/Model/OrganizationUnitsUpdateRequest.md)
- [TagResource](docs/Model/TagResource.md)
- [TaggedBusinessModelsStartRequest](docs/Model/TaggedBusinessModelsStartRequest.md)
- [TagsCreateRequest](docs/Model/TagsCreateRequest.md)
- [TagsUpdateRequest](docs/Model/TagsUpdateRequest.md)
- [TaskResource](docs/Model/TaskResource.md)
- [TasksCreateRequest](docs/Model/TasksCreateRequest.md)
- [TasksUpdateRequest](docs/Model/TasksUpdateRequest.md)
- [UserResource](docs/Model/UserResource.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
