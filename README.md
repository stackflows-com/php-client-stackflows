# Stackflows PHP Client

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
      "url": "https://github.com/stackflows-com/php-client-stackflows.git"
    }
  ],
  "require": {
    "stackflows-com/php-client-stackflows": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Stackflows PHP Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 3688e6c0-1a56-11ec-8366; // string | The ID of an diagram.
$comment = 3688e6c0-1a56-11ec-8366; // string | The ID of an comment.
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagramsCommentsDelete($diagram, $comment, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagramsCommentsDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8081*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EnvironmentApi* | [**deleteEnvironmentBusinessModelDiagramsCommentsDelete**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodeldiagramscommentsdelete) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
*EnvironmentApi* | [**deleteEnvironmentBusinessModelDiagramsDelete**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodeldiagramsdelete) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram} | Delete Business Model Diagram
*EnvironmentApi* | [**deleteEnvironmentBusinessModelsDelete**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodelsdelete) | **DELETE** /api/v2/environment/business-models/{model} | Delete Business Model
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsCommentsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramscommentslist) | **GET** /api/v2/environment/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramslist) | **GET** /api/v2/environment/business-model-diagrams | List Business Model Diagram
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsShow**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramsshow) | **GET** /api/v2/environment/business-model-diagrams/{diagram} | View Business Model Diagram
*EnvironmentApi* | [**getEnvironmentBusinessModelsCommentsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelscommentslist) | **GET** /api/v2/environment/business-models/{model}/comments | List Business Model Comments
*EnvironmentApi* | [**getEnvironmentBusinessModelsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelslist) | **GET** /api/v2/environment/business-models | List Business Models
*EnvironmentApi* | [**getEnvironmentBusinessModelsShow**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelsshow) | **GET** /api/v2/environment/business-models/{model} | View Business Model
*EnvironmentApi* | [**getEnvironmentUserTasksIndex**](docs/Api/EnvironmentApi.md#getenvironmentusertasksindex) | **GET** /api/v2/environment/user-tasks | List User Tasks
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsCommentsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramscommentscreate) | **POST** /api/v2/environment/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramscreate) | **POST** /api/v2/environment/business-model-diagrams | Create Business Model Diagram
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsPublish**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramspublish) | **POST** /api/v2/environment/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
*EnvironmentApi* | [**postEnvironmentBusinessModelsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodelscreate) | **POST** /api/v2/environment/business-models | Create Business Model
*EnvironmentApi* | [**postEnvironmentServiceTasksLock**](docs/Api/EnvironmentApi.md#postenvironmentservicetaskslock) | **POST** /api/v2/environment/service-tasks | Lock Service Tasks
*EnvironmentApi* | [**postEnvironmentServiceTasksServe**](docs/Api/EnvironmentApi.md#postenvironmentservicetasksserve) | **POST** /api/v2/environment/service-tasks/{reference}/serve | Serve Service Task
*EnvironmentApi* | [**postEnvironmentServiceTasksUnlock**](docs/Api/EnvironmentApi.md#postenvironmentservicetasksunlock) | **POST** /api/v2/environment/service-tasks/{reference}/unlock | Unlock Service Task
*EnvironmentApi* | [**postEnvironmentTaggedBusinessModelsStart**](docs/Api/EnvironmentApi.md#postenvironmenttaggedbusinessmodelsstart) | **POST** /api/v2/environment/tagged/business-process-models | Starts Business Process Models by Tag
*EnvironmentApi* | [**postEnvironmentUserTasksComplete**](docs/Api/EnvironmentApi.md#postenvironmentusertaskscomplete) | **POST** /api/v2/environment/user-tasks/{id}/complete | Complete User Task
*EnvironmentApi* | [**postEnvironmentUserTasksErrorize**](docs/Api/EnvironmentApi.md#postenvironmentusertaskserrorize) | **POST** /api/v2/environment/user-tasks/{id}/errorize | Errorize User Task
*EnvironmentApi* | [**postEnvironmentUserTasksEscalate**](docs/Api/EnvironmentApi.md#postenvironmentusertasksescalate) | **POST** /api/v2/environment/user-tasks/{id}/escalate | Escalate User Task
*InstallationApi* | [**deleteEnginesDelete**](docs/Api/InstallationApi.md#deleteenginesdelete) | **DELETE** /api/v2/engines/{engine} | Delete Engine
*InstallationApi* | [**deleteEnvironmentsDeleteBulk**](docs/Api/InstallationApi.md#deleteenvironmentsdeletebulk) | **DELETE** /api/v2/environments | Delete Environments
*InstallationApi* | [**getEngine**](docs/Api/InstallationApi.md#getengine) | **GET** /api/v2/engines | List Engines
*InstallationApi* | [**getEnginesShow**](docs/Api/InstallationApi.md#getenginesshow) | **GET** /api/v2/engines/{id} | View Engine
*InstallationApi* | [**getEnvironmentsList**](docs/Api/InstallationApi.md#getenvironmentslist) | **GET** /api/v2/environments | List Environments
*InstallationApi* | [**postEnginesCreate**](docs/Api/InstallationApi.md#postenginescreate) | **POST** /api/v2/engines | Create Engine
*InstallationApi* | [**postEnvironmentsCreate**](docs/Api/InstallationApi.md#postenvironmentscreate) | **POST** /api/v2/environments | Create Environment
*InstallationApi* | [**putEnginesUpdate**](docs/Api/InstallationApi.md#putenginesupdate) | **PUT** /api/v2/engines/{id} | Update Engine
*OperationsApi* | [**deleteBusinessModelDiagramsCommentsDelete**](docs/Api/OperationsApi.md#deletebusinessmodeldiagramscommentsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram}/comments/{comment} | Delete Business Model Diagram Comment
*OperationsApi* | [**deleteBusinessModelDiagramsDelete**](docs/Api/OperationsApi.md#deletebusinessmodeldiagramsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete Business Model Diagram
*OperationsApi* | [**deleteBusinessModelExceptionsDelete**](docs/Api/OperationsApi.md#deletebusinessmodelexceptionsdelete) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete Business Model Exception
*OperationsApi* | [**deleteBusinessModelsDelete**](docs/Api/OperationsApi.md#deletebusinessmodelsdelete) | **DELETE** /api/v2/business-models/{model} | Delete Business Model
*OperationsApi* | [**deleteBusinessModelsDeleteBulk**](docs/Api/OperationsApi.md#deletebusinessmodelsdeletebulk) | **DELETE** /api/v2/business-models | Delete Business Models
*OperationsApi* | [**deleteBusinessProcessesDelete**](docs/Api/OperationsApi.md#deletebusinessprocessesdelete) | **DELETE** /api/v2/business-processes/{tag} | Delete Business Process Tag
*OperationsApi* | [**deleteBusinessProcessesDeleteBulk**](docs/Api/OperationsApi.md#deletebusinessprocessesdeletebulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
*OperationsApi* | [**deleteCategoriesDelete**](docs/Api/OperationsApi.md#deletecategoriesdelete) | **DELETE** /api/v2/categories/{category} | Delete Category
*OperationsApi* | [**deleteTagsDelete**](docs/Api/OperationsApi.md#deletetagsdelete) | **DELETE** /api/v2/tags/{tag} | Delete Tag
*OperationsApi* | [**deleteTasksDelete**](docs/Api/OperationsApi.md#deletetasksdelete) | **DELETE** /api/v2/tasks/{task} | Delete Task
*OperationsApi* | [**getBusinessModelDiagramsCommentsList**](docs/Api/OperationsApi.md#getbusinessmodeldiagramscommentslist) | **GET** /api/v2/business-model-diagrams/{diagram}/comments | List Business Model Diagram Comments
*OperationsApi* | [**getBusinessModelDiagramsList**](docs/Api/OperationsApi.md#getbusinessmodeldiagramslist) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
*OperationsApi* | [**getBusinessModelDiagramsShow**](docs/Api/OperationsApi.md#getbusinessmodeldiagramsshow) | **GET** /api/v2/business-model-diagrams/{diagram} | View Business Model Diagram
*OperationsApi* | [**getBusinessModelExceptionsList**](docs/Api/OperationsApi.md#getbusinessmodelexceptionslist) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
*OperationsApi* | [**getBusinessModelExceptionsShow**](docs/Api/OperationsApi.md#getbusinessmodelexceptionsshow) | **GET** /api/v2/business-model-exceptions/{exception} | View Business Model Exception
*OperationsApi* | [**getBusinessModelPublicationsList**](docs/Api/OperationsApi.md#getbusinessmodelpublicationslist) | **GET** /api/v2/business-model-publications | List Business Model Publications
*OperationsApi* | [**getBusinessModelPublicationsShow**](docs/Api/OperationsApi.md#getbusinessmodelpublicationsshow) | **GET** /api/v2/business-model-publications/{publication} | View Business Model Publication
*OperationsApi* | [**getBusinessModelsCommentsList**](docs/Api/OperationsApi.md#getbusinessmodelscommentslist) | **GET** /api/v2/business-models/{model}/comments | List Business Model Comments
*OperationsApi* | [**getBusinessModelsList**](docs/Api/OperationsApi.md#getbusinessmodelslist) | **GET** /api/v2/business-models | List Business Models
*OperationsApi* | [**getBusinessModelsShow**](docs/Api/OperationsApi.md#getbusinessmodelsshow) | **GET** /api/v2/business-models/{model} | View Business Model
*OperationsApi* | [**getBusinessModelsShowRevision**](docs/Api/OperationsApi.md#getbusinessmodelsshowrevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Business Model Diagram
*OperationsApi* | [**getBusinessModelsShowRevisions**](docs/Api/OperationsApi.md#getbusinessmodelsshowrevisions) | **GET** /api/v2/business-models/{model}/revisions | List Business Model Disgrams
*OperationsApi* | [**getBusinessProcessesList**](docs/Api/OperationsApi.md#getbusinessprocesseslist) | **GET** /api/v2/business-processes | List Business Process Tags
*OperationsApi* | [**getBusinessProcessesShow**](docs/Api/OperationsApi.md#getbusinessprocessesshow) | **GET** /api/v2/business-processes/{tag} | View Business Process Tag
*OperationsApi* | [**getCategoriesList**](docs/Api/OperationsApi.md#getcategorieslist) | **GET** /api/v2/categories | List Categories
*OperationsApi* | [**getCategoriesShow**](docs/Api/OperationsApi.md#getcategoriesshow) | **GET** /api/v2/categories/{id} | View Category
*OperationsApi* | [**getTagsList**](docs/Api/OperationsApi.md#gettagslist) | **GET** /api/v2/tags | List Tags
*OperationsApi* | [**getTagsShow**](docs/Api/OperationsApi.md#gettagsshow) | **GET** /api/v2/tags/{id} | View Tag
*OperationsApi* | [**getTasksList**](docs/Api/OperationsApi.md#gettaskslist) | **GET** /api/v2/tasks | List Tasks
*OperationsApi* | [**getTasksShow**](docs/Api/OperationsApi.md#gettasksshow) | **GET** /api/v2/tasks/{id} | View Task
*OperationsApi* | [**postBusinessModelDiagramsCommentsCreate**](docs/Api/OperationsApi.md#postbusinessmodeldiagramscommentscreate) | **POST** /api/v2/business-model-diagrams/{diagram}/comments | Create Business Model Diagram Comment
*OperationsApi* | [**postBusinessModelDiagramsCreate**](docs/Api/OperationsApi.md#postbusinessmodeldiagramscreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
*OperationsApi* | [**postBusinessModelDiagramsPublish**](docs/Api/OperationsApi.md#postbusinessmodeldiagramspublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish Business Model Diagram
*OperationsApi* | [**postBusinessModelExceptionsCreate**](docs/Api/OperationsApi.md#postbusinessmodelexceptionscreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
*OperationsApi* | [**postBusinessModelsCreate**](docs/Api/OperationsApi.md#postbusinessmodelscreate) | **POST** /api/v2/business-models | Create Business Model
*OperationsApi* | [**postBusinessModelsPostRevision**](docs/Api/OperationsApi.md#postbusinessmodelspostrevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Business Model Diagram
*OperationsApi* | [**postBusinessModelsTag**](docs/Api/OperationsApi.md#postbusinessmodelstag) | **POST** /api/v2/business-models/{taggable}/tag | Tag Business Model
*OperationsApi* | [**postBusinessProcessesCreate**](docs/Api/OperationsApi.md#postbusinessprocessescreate) | **POST** /api/v2/business-processes | Create Business Process Tag
*OperationsApi* | [**postCategoriesCreate**](docs/Api/OperationsApi.md#postcategoriescreate) | **POST** /api/v2/categories | Create Category
*OperationsApi* | [**postTagsCreate**](docs/Api/OperationsApi.md#posttagscreate) | **POST** /api/v2/tags | Create Tag
*OperationsApi* | [**postTasksCreate**](docs/Api/OperationsApi.md#posttaskscreate) | **POST** /api/v2/tasks | Create Task
*OperationsApi* | [**putBusinessModelDiagramsUpdate**](docs/Api/OperationsApi.md#putbusinessmodeldiagramsupdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update Business Model Diagram
*OperationsApi* | [**putBusinessModelExceptionsUpdate**](docs/Api/OperationsApi.md#putbusinessmodelexceptionsupdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update Business Model Exception
*OperationsApi* | [**putBusinessModelsUpdate**](docs/Api/OperationsApi.md#putbusinessmodelsupdate) | **PUT** /api/v2/business-models/{model} | Update Business Model
*OperationsApi* | [**putBusinessProcessesUpdate**](docs/Api/OperationsApi.md#putbusinessprocessesupdate) | **PUT** /api/v2/business-processes/{tag} | Update Business Process Tag
*OperationsApi* | [**putCategoriesUpdate**](docs/Api/OperationsApi.md#putcategoriesupdate) | **PUT** /api/v2/categories/{id} | Update Category
*OperationsApi* | [**putTagsUpdate**](docs/Api/OperationsApi.md#puttagsupdate) | **PUT** /api/v2/tags/{id} | Update Tag
*OperationsApi* | [**putTasksUpdate**](docs/Api/OperationsApi.md#puttasksupdate) | **PUT** /api/v2/tasks/{id} | Update Task
*OrganizationApi* | [**deleteOrganizationUnitsDelete**](docs/Api/OrganizationApi.md#deleteorganizationunitsdelete) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete Organzation Unit
*OrganizationApi* | [**getOrganizationUnitsList**](docs/Api/OrganizationApi.md#getorganizationunitslist) | **GET** /api/v2/organization-units | List Organzation Units
*OrganizationApi* | [**getOrganizationUnitsShow**](docs/Api/OrganizationApi.md#getorganizationunitsshow) | **GET** /api/v2/organization-units/{organizationUnit} | View Organzation Unit
*OrganizationApi* | [**postOrganizationUnitsCreate**](docs/Api/OrganizationApi.md#postorganizationunitscreate) | **POST** /api/v2/organization-units | Create Organzation Unit
*OrganizationApi* | [**putOrganizationUnitsUpdate**](docs/Api/OrganizationApi.md#putorganizationunitsupdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update Organzation Unit
*TaggedApi* | [**postTaggedBusinessModelsStart**](docs/Api/TaggedApi.md#posttaggedbusinessmodelsstart) | **POST** /api/v2/tagged/business-models | Starts Business Process Models by Tag
*UserApi* | [**deleteUserOrganizationsDelete**](docs/Api/UserApi.md#deleteuserorganizationsdelete) | **DELETE** /api/v2/user/organizations/{organization} | Delete Organization
*UserApi* | [**deleteUserRevoke**](docs/Api/UserApi.md#deleteuserrevoke) | **DELETE** /api/v2/user/tokens | Revoke all tokens
*UserApi* | [**getUserMe**](docs/Api/UserApi.md#getuserme) | **GET** /api/v2/user | Me
*UserApi* | [**getUserOrganizationsList**](docs/Api/UserApi.md#getuserorganizationslist) | **GET** /api/v2/user/organizations | List Organizations
*UserApi* | [**getUserOrganizationsShow**](docs/Api/UserApi.md#getuserorganizationsshow) | **GET** /api/v2/user/organizations/{id} | View Organization
*UserApi* | [**postUserLogin**](docs/Api/UserApi.md#postuserlogin) | **POST** /api/v2/user/login | Login
*UserApi* | [**postUserOrganizationsStore**](docs/Api/UserApi.md#postuserorganizationsstore) | **POST** /api/v2/user/organizations | Create Organization
*UserApi* | [**postUserRegister**](docs/Api/UserApi.md#postuserregister) | **POST** /api/v2/user/register | Register
*UserApi* | [**postUserResetPassword**](docs/Api/UserApi.md#postuserresetpassword) | **POST** /api/v2/user/reset-password | Restore password
*UserApi* | [**putUserOrganizationsUpdate**](docs/Api/UserApi.md#putuserorganizationsupdate) | **PUT** /api/v2/user/organizations/{id} | Update Organization
*UserApi* | [**putUserUpdate**](docs/Api/UserApi.md#putuserupdate) | **PUT** /api/v2/user | Update

## Models

- [BusinessBaseModelDiagramResource](docs/Model/BusinessBaseModelDiagramResource.md)
- [BusinessBaseModelExceptionResource](docs/Model/BusinessBaseModelExceptionResource.md)
- [BusinessBaseModelPublicationResource](docs/Model/BusinessBaseModelPublicationResource.md)
- [BusinessBaseModelResource](docs/Model/BusinessBaseModelResource.md)
- [CategoryResource](docs/Model/CategoryResource.md)
- [CommentResource](docs/Model/CommentResource.md)
- [DeleteBusinessModelsDeleteBulkRequest](docs/Model/DeleteBusinessModelsDeleteBulkRequest.md)
- [DeleteBusinessProcessesDeleteBulkRequest](docs/Model/DeleteBusinessProcessesDeleteBulkRequest.md)
- [DeleteEnvironmentsDeleteBulkRequest](docs/Model/DeleteEnvironmentsDeleteBulkRequest.md)
- [EngineResource](docs/Model/EngineResource.md)
- [EnvironmentResource](docs/Model/EnvironmentResource.md)
- [GetEnvironmentUserTasksIndex401Response](docs/Model/GetEnvironmentUserTasksIndex401Response.md)
- [OrganizationUnitResource](docs/Model/OrganizationUnitResource.md)
- [PostBusinessModelDiagramsCommentsCreateRequest](docs/Model/PostBusinessModelDiagramsCommentsCreateRequest.md)
- [PostBusinessModelExceptionsCreateRequest](docs/Model/PostBusinessModelExceptionsCreateRequest.md)
- [PostBusinessModelsCreateRequest](docs/Model/PostBusinessModelsCreateRequest.md)
- [PostBusinessModelsTagRequest](docs/Model/PostBusinessModelsTagRequest.md)
- [PostBusinessProcessesCreateRequest](docs/Model/PostBusinessProcessesCreateRequest.md)
- [PostCategoriesCreateRequest](docs/Model/PostCategoriesCreateRequest.md)
- [PostEnginesCreateRequest](docs/Model/PostEnginesCreateRequest.md)
- [PostEnvironmentBusinessModelDiagramsCommentsCreateRequest](docs/Model/PostEnvironmentBusinessModelDiagramsCommentsCreateRequest.md)
- [PostEnvironmentBusinessModelDiagramsPublishRequest](docs/Model/PostEnvironmentBusinessModelDiagramsPublishRequest.md)
- [PostEnvironmentBusinessModelsCreateRequest](docs/Model/PostEnvironmentBusinessModelsCreateRequest.md)
- [PostEnvironmentServiceTasksLockRequest](docs/Model/PostEnvironmentServiceTasksLockRequest.md)
- [PostEnvironmentServiceTasksServeRequest](docs/Model/PostEnvironmentServiceTasksServeRequest.md)
- [PostEnvironmentServiceTasksUnlockRequest](docs/Model/PostEnvironmentServiceTasksUnlockRequest.md)
- [PostEnvironmentTaggedBusinessModelsStartRequest](docs/Model/PostEnvironmentTaggedBusinessModelsStartRequest.md)
- [PostEnvironmentUserTasksErrorizeRequest](docs/Model/PostEnvironmentUserTasksErrorizeRequest.md)
- [PostEnvironmentUserTasksEscalateRequest](docs/Model/PostEnvironmentUserTasksEscalateRequest.md)
- [PostEnvironmentUserTasksEscalateRequestVariablesInner](docs/Model/PostEnvironmentUserTasksEscalateRequestVariablesInner.md)
- [PostEnvironmentsCreateRequest](docs/Model/PostEnvironmentsCreateRequest.md)
- [PostOrganizationUnitsCreateRequest](docs/Model/PostOrganizationUnitsCreateRequest.md)
- [PostTaggedBusinessModelsStartRequest](docs/Model/PostTaggedBusinessModelsStartRequest.md)
- [PostTagsCreateRequest](docs/Model/PostTagsCreateRequest.md)
- [PostTasksCreateRequest](docs/Model/PostTasksCreateRequest.md)
- [PostUserLoginRequest](docs/Model/PostUserLoginRequest.md)
- [PostUserOrganizationsStoreRequest](docs/Model/PostUserOrganizationsStoreRequest.md)
- [PostUserRegisterRequest](docs/Model/PostUserRegisterRequest.md)
- [PostUserResetPasswordRequest](docs/Model/PostUserResetPasswordRequest.md)
- [PutBusinessModelExceptionsUpdateRequest](docs/Model/PutBusinessModelExceptionsUpdateRequest.md)
- [PutBusinessModelsUpdateRequest](docs/Model/PutBusinessModelsUpdateRequest.md)
- [PutBusinessProcessesUpdateRequest](docs/Model/PutBusinessProcessesUpdateRequest.md)
- [PutCategoriesUpdateRequest](docs/Model/PutCategoriesUpdateRequest.md)
- [PutEnginesUpdateRequest](docs/Model/PutEnginesUpdateRequest.md)
- [PutOrganizationUnitsUpdateRequest](docs/Model/PutOrganizationUnitsUpdateRequest.md)
- [PutTagsUpdateRequest](docs/Model/PutTagsUpdateRequest.md)
- [PutTasksUpdateRequest](docs/Model/PutTasksUpdateRequest.md)
- [PutUserOrganizationsUpdateRequest](docs/Model/PutUserOrganizationsUpdateRequest.md)
- [PutUserUpdateRequest](docs/Model/PutUserUpdateRequest.md)
- [TagResource](docs/Model/TagResource.md)
- [TaskResource](docs/Model/TaskResource.md)
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
    - Package version: `1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
