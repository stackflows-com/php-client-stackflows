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




$apiInstance = new Stackflows\Clients\Stackflows\Api\AuthenticatedEnvironmentBusinessModelCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diagram = 03b764f0-fc1f-11ec-9893-6df708406f80; // string | 
$authBusinessModelDiagramsCommentsCreateRequest = new \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest(); // \Stackflows\Clients\Stackflows\Model\AuthBusinessModelDiagramsCommentsCreateRequest
$contentType = application/json; // string | 
$accept = application/json; // string | 

try {
    $result = $apiInstance->authBusinessModelDiagramsCommentsCreate($diagram, $authBusinessModelDiagramsCommentsCreateRequest, $contentType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticatedEnvironmentBusinessModelCommentsApi->authBusinessModelDiagramsCommentsCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8081*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticatedEnvironmentBusinessModelCommentsApi* | [**authBusinessModelDiagramsCommentsCreate**](docs/Api/AuthenticatedEnvironmentBusinessModelCommentsApi.md#authbusinessmodeldiagramscommentscreate) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | Create
*AuthenticatedEnvironmentBusinessModelCommentsApi* | [**authBusinessModelDiagramsCommentsDelete**](docs/Api/AuthenticatedEnvironmentBusinessModelCommentsApi.md#authbusinessmodeldiagramscommentsdelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments/{comment} | Delete
*AuthenticatedEnvironmentBusinessModelCommentsApi* | [**authBusinessModelDiagramsCommentsList**](docs/Api/AuthenticatedEnvironmentBusinessModelCommentsApi.md#authbusinessmodeldiagramscommentslist) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram}/comments | List
*AuthenticatedEnvironmentBusinessModelDiagramsApi* | [**authBusinessModelDiagramsCreate**](docs/Api/AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authbusinessmodeldiagramscreate) | **POST** /api/v2/auth/environment/business-model-diagrams | Create
*AuthenticatedEnvironmentBusinessModelDiagramsApi* | [**authBusinessModelDiagramsDelete**](docs/Api/AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authbusinessmodeldiagramsdelete) | **DELETE** /api/v2/auth/environment/business-model-diagrams/{diagram} | Delete
*AuthenticatedEnvironmentBusinessModelDiagramsApi* | [**authBusinessModelDiagramsList**](docs/Api/AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authbusinessmodeldiagramslist) | **GET** /api/v2/auth/environment/business-model-diagrams | List
*AuthenticatedEnvironmentBusinessModelDiagramsApi* | [**authBusinessModelDiagramsPublish**](docs/Api/AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authbusinessmodeldiagramspublish) | **POST** /api/v2/auth/environment/business-model-diagrams/{diagram}/publish | Publish
*AuthenticatedEnvironmentBusinessModelDiagramsApi* | [**authBusinessModelDiagramsShow**](docs/Api/AuthenticatedEnvironmentBusinessModelDiagramsApi.md#authbusinessmodeldiagramsshow) | **GET** /api/v2/auth/environment/business-model-diagrams/{diagram} | View
*AuthenticatedEnvironmentBusinessModelsApi* | [**authBusinessModelsCommentsList**](docs/Api/AuthenticatedEnvironmentBusinessModelsApi.md#authbusinessmodelscommentslist) | **GET** /api/v2/auth/environment/business-models/{model}/comments | List Comments
*AuthenticatedEnvironmentBusinessModelsApi* | [**authBusinessModelsCreate**](docs/Api/AuthenticatedEnvironmentBusinessModelsApi.md#authbusinessmodelscreate) | **POST** /api/v2/auth/environment/business-models | Create
*AuthenticatedEnvironmentBusinessModelsApi* | [**authBusinessModelsDelete**](docs/Api/AuthenticatedEnvironmentBusinessModelsApi.md#authbusinessmodelsdelete) | **DELETE** /api/v2/auth/environment/business-models/{model} | Delete
*AuthenticatedEnvironmentBusinessModelsApi* | [**authBusinessModelsList**](docs/Api/AuthenticatedEnvironmentBusinessModelsApi.md#authbusinessmodelslist) | **GET** /api/v2/auth/environment/business-models | List
*AuthenticatedEnvironmentBusinessModelsApi* | [**authBusinessModelsShow**](docs/Api/AuthenticatedEnvironmentBusinessModelsApi.md#authbusinessmodelsshow) | **GET** /api/v2/auth/environment/business-models/{model} | View
*AuthenticatedEnvironmentServiceTasksApi* | [**authServiceTasksLock**](docs/Api/AuthenticatedEnvironmentServiceTasksApi.md#authservicetaskslock) | **POST** /api/v2/auth/environment/service-tasks | Lock
*AuthenticatedEnvironmentServiceTasksApi* | [**authServiceTasksServe**](docs/Api/AuthenticatedEnvironmentServiceTasksApi.md#authservicetasksserve) | **POST** /api/v2/auth/environment/service-tasks/{reference}/serve | Serve
*AuthenticatedEnvironmentServiceTasksApi* | [**authServiceTasksUnlock**](docs/Api/AuthenticatedEnvironmentServiceTasksApi.md#authservicetasksunlock) | **POST** /api/v2/auth/environment/service-tasks/{reference}/unlock | Unlock
*AuthenticatedEnvironmentTaggedBusinessModelsApi* | [**authTaggedBusinessModelsStart**](docs/Api/AuthenticatedEnvironmentTaggedBusinessModelsApi.md#authtaggedbusinessmodelsstart) | **POST** /api/v2/auth/environment/tagged/business-process-models | Starts business processes by tags
*AuthenticatedEnvironmentUserTasksApi* | [**authUserTasksComplete**](docs/Api/AuthenticatedEnvironmentUserTasksApi.md#authusertaskscomplete) | **POST** /api/v2/auth/environment/user-tasks/{id}/complete | Complete
*AuthenticatedEnvironmentUserTasksApi* | [**authUserTasksErrorize**](docs/Api/AuthenticatedEnvironmentUserTasksApi.md#authusertaskserrorize) | **POST** /api/v2/auth/environment/user-tasks/{id}/errorize | Errorize
*AuthenticatedEnvironmentUserTasksApi* | [**authUserTasksEscalate**](docs/Api/AuthenticatedEnvironmentUserTasksApi.md#authusertasksescalate) | **POST** /api/v2/auth/environment/user-tasks/{id}/escalate | Escalate
*AuthenticatedEnvironmentUserTasksApi* | [**authUserTasksIndex**](docs/Api/AuthenticatedEnvironmentUserTasksApi.md#authusertasksindex) | **GET** /api/v2/auth/environment/user-tasks | List
*AuthenticatedUserApi* | [**authUserMe**](docs/Api/AuthenticatedUserApi.md#authuserme) | **GET** /api/v2/auth/user | Me
*AuthenticatedUserApi* | [**authUserRevoke**](docs/Api/AuthenticatedUserApi.md#authuserrevoke) | **DELETE** /api/v2/auth/user/tokens | Revoke all tokens
*AuthenticatedUserApi* | [**authUserUpdate**](docs/Api/AuthenticatedUserApi.md#authuserupdate) | **PUT** /api/v2/auth/user | Update
*AuthenticatedUserOrganizationsApi* | [**authUserOrganizationsDelete**](docs/Api/AuthenticatedUserOrganizationsApi.md#authuserorganizationsdelete) | **DELETE** /api/v2/auth/user/organizations/{organization} | Delete
*AuthenticatedUserOrganizationsApi* | [**authUserOrganizationsList**](docs/Api/AuthenticatedUserOrganizationsApi.md#authuserorganizationslist) | **GET** /api/v2/auth/user/organizations | List
*AuthenticatedUserOrganizationsApi* | [**authUserOrganizationsShow**](docs/Api/AuthenticatedUserOrganizationsApi.md#authuserorganizationsshow) | **GET** /api/v2/auth/user/organizations/{id} | View
*AuthenticatedUserOrganizationsApi* | [**authUserOrganizationsStore**](docs/Api/AuthenticatedUserOrganizationsApi.md#authuserorganizationsstore) | **POST** /api/v2/auth/user/organizations | Create
*AuthenticatedUserOrganizationsApi* | [**authUserOrganizationsUpdate**](docs/Api/AuthenticatedUserOrganizationsApi.md#authuserorganizationsupdate) | **PUT** /api/v2/auth/user/organizations/{id} | Update
*AuthenticationApi* | [**authLogin**](docs/Api/AuthenticationApi.md#authlogin) | **POST** /api/v2/auth/login | Login
*AuthenticationApi* | [**authRegister**](docs/Api/AuthenticationApi.md#authregister) | **POST** /api/v2/auth/register | Register
*AuthenticationApi* | [**authResetPassword**](docs/Api/AuthenticationApi.md#authresetpassword) | **POST** /api/v2/auth/reset-password | Restore password
*BusinessModelCommentsApi* | [**businessModelDiagramsCommentsCreate**](docs/Api/BusinessModelCommentsApi.md#businessmodeldiagramscommentscreate) | **POST** /api/v2/business-model-diagrams/{diagram}/comments | Create
*BusinessModelCommentsApi* | [**businessModelDiagramsCommentsDelete**](docs/Api/BusinessModelCommentsApi.md#businessmodeldiagramscommentsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram}/comments/{comment} | Delete
*BusinessModelCommentsApi* | [**businessModelDiagramsCommentsList**](docs/Api/BusinessModelCommentsApi.md#businessmodeldiagramscommentslist) | **GET** /api/v2/business-model-diagrams/{diagram}/comments | List
*BusinessModelDiagramsApi* | [**businessModelDiagramsCreate**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramscreate) | **POST** /api/v2/business-model-diagrams | Create
*BusinessModelDiagramsApi* | [**businessModelDiagramsDelete**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramsdelete) | **DELETE** /api/v2/business-model-diagrams/{diagram} | Delete
*BusinessModelDiagramsApi* | [**businessModelDiagramsList**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramslist) | **GET** /api/v2/business-model-diagrams | List
*BusinessModelDiagramsApi* | [**businessModelDiagramsPublish**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramspublish) | **POST** /api/v2/business-model-diagrams/{diagram}/publish | Publish
*BusinessModelDiagramsApi* | [**businessModelDiagramsShow**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramsshow) | **GET** /api/v2/business-model-diagrams/{diagram} | View
*BusinessModelDiagramsApi* | [**businessModelDiagramsUpdate**](docs/Api/BusinessModelDiagramsApi.md#businessmodeldiagramsupdate) | **PUT** /api/v2/business-model-diagrams/{diagram} | Update
*BusinessModelExceptionsApi* | [**businessModelExceptionsCreate**](docs/Api/BusinessModelExceptionsApi.md#businessmodelexceptionscreate) | **POST** /api/v2/business-model-exceptions | Create
*BusinessModelExceptionsApi* | [**businessModelExceptionsDelete**](docs/Api/BusinessModelExceptionsApi.md#businessmodelexceptionsdelete) | **DELETE** /api/v2/business-model-exceptions/{exception} | Delete
*BusinessModelExceptionsApi* | [**businessModelExceptionsList**](docs/Api/BusinessModelExceptionsApi.md#businessmodelexceptionslist) | **GET** /api/v2/business-model-exceptions | List
*BusinessModelExceptionsApi* | [**businessModelExceptionsShow**](docs/Api/BusinessModelExceptionsApi.md#businessmodelexceptionsshow) | **GET** /api/v2/business-model-exceptions/{exception} | View
*BusinessModelExceptionsApi* | [**businessModelExceptionsUpdate**](docs/Api/BusinessModelExceptionsApi.md#businessmodelexceptionsupdate) | **PUT** /api/v2/business-model-exceptions/{exception} | Update
*BusinessModelPublicationsApi* | [**businessModelPublicationsList**](docs/Api/BusinessModelPublicationsApi.md#businessmodelpublicationslist) | **GET** /api/v2/business-model-publications | List
*BusinessModelPublicationsApi* | [**businessModelPublicationsShow**](docs/Api/BusinessModelPublicationsApi.md#businessmodelpublicationsshow) | **GET** /api/v2/business-model-publications/{publication} | View
*BusinessModelsApi* | [**businessModelsCommentsList**](docs/Api/BusinessModelsApi.md#businessmodelscommentslist) | **GET** /api/v2/business-models/{model}/comments | List Comments
*BusinessModelsApi* | [**businessModelsCreate**](docs/Api/BusinessModelsApi.md#businessmodelscreate) | **POST** /api/v2/business-models | Create
*BusinessModelsApi* | [**businessModelsDelete**](docs/Api/BusinessModelsApi.md#businessmodelsdelete) | **DELETE** /api/v2/business-models/{model} | Delete
*BusinessModelsApi* | [**businessModelsDeleteBulk**](docs/Api/BusinessModelsApi.md#businessmodelsdeletebulk) | **DELETE** /api/v2/business-models | Delete bulk
*BusinessModelsApi* | [**businessModelsList**](docs/Api/BusinessModelsApi.md#businessmodelslist) | **GET** /api/v2/business-models | List
*BusinessModelsApi* | [**businessModelsPostRevision**](docs/Api/BusinessModelsApi.md#businessmodelspostrevision) | **POST** /api/v2/business-models/{model}/revisions | Submit Related Diagram
*BusinessModelsApi* | [**businessModelsShow**](docs/Api/BusinessModelsApi.md#businessmodelsshow) | **GET** /api/v2/business-models/{model} | View
*BusinessModelsApi* | [**businessModelsShowRevision**](docs/Api/BusinessModelsApi.md#businessmodelsshowrevision) | **GET** /api/v2/business-models/{model}/revisions/{revision} | View Related Diagram
*BusinessModelsApi* | [**businessModelsShowRevisions**](docs/Api/BusinessModelsApi.md#businessmodelsshowrevisions) | **GET** /api/v2/business-models/{model}/revisions | List Disgrams
*BusinessModelsApi* | [**businessModelsTag**](docs/Api/BusinessModelsApi.md#businessmodelstag) | **POST** /api/v2/business-models/{taggable}/tag | Tag
*BusinessModelsApi* | [**businessModelsUpdate**](docs/Api/BusinessModelsApi.md#businessmodelsupdate) | **PUT** /api/v2/business-models/{model} | Update
*BusinessProcessTagsApi* | [**businessProcessesCreate**](docs/Api/BusinessProcessTagsApi.md#businessprocessescreate) | **POST** /api/v2/business-processes | Create
*BusinessProcessTagsApi* | [**businessProcessesDelete**](docs/Api/BusinessProcessTagsApi.md#businessprocessesdelete) | **DELETE** /api/v2/business-processes/{tag} | Delete
*BusinessProcessTagsApi* | [**businessProcessesDeleteBulk**](docs/Api/BusinessProcessTagsApi.md#businessprocessesdeletebulk) | **DELETE** /api/v2/business-processes | Delete bulk
*BusinessProcessTagsApi* | [**businessProcessesList**](docs/Api/BusinessProcessTagsApi.md#businessprocesseslist) | **GET** /api/v2/business-processes | List
*BusinessProcessTagsApi* | [**businessProcessesShow**](docs/Api/BusinessProcessTagsApi.md#businessprocessesshow) | **GET** /api/v2/business-processes/{tag} | View
*BusinessProcessTagsApi* | [**businessProcessesUpdate**](docs/Api/BusinessProcessTagsApi.md#businessprocessesupdate) | **PUT** /api/v2/business-processes/{tag} | Update
*CategoriesApi* | [**categoriesCreate**](docs/Api/CategoriesApi.md#categoriescreate) | **POST** /api/v2/categories | Create
*CategoriesApi* | [**categoriesDelete**](docs/Api/CategoriesApi.md#categoriesdelete) | **DELETE** /api/v2/categories/{category} | Delete
*CategoriesApi* | [**categoriesList**](docs/Api/CategoriesApi.md#categorieslist) | **GET** /api/v2/categories | List
*CategoriesApi* | [**categoriesShow**](docs/Api/CategoriesApi.md#categoriesshow) | **GET** /api/v2/categories/{id} | View
*CategoriesApi* | [**categoriesUpdate**](docs/Api/CategoriesApi.md#categoriesupdate) | **PUT** /api/v2/categories/{id} | Update
*EnginesApi* | [**enginesCreate**](docs/Api/EnginesApi.md#enginescreate) | **POST** /api/v2/engines | Create
*EnginesApi* | [**enginesDelete**](docs/Api/EnginesApi.md#enginesdelete) | **DELETE** /api/v2/engines/{engine} | Delete
*EnginesApi* | [**enginesShow**](docs/Api/EnginesApi.md#enginesshow) | **GET** /api/v2/engines/{id} | View
*EnginesApi* | [**enginesUpdate**](docs/Api/EnginesApi.md#enginesupdate) | **PUT** /api/v2/engines/{id} | Update
*EnginesApi* | [**getEngine**](docs/Api/EnginesApi.md#getengine) | **GET** /api/v2/engines | List
*EnvironmentsApi* | [**environmentsCreate**](docs/Api/EnvironmentsApi.md#environmentscreate) | **POST** /api/v2/environments | Create
*EnvironmentsApi* | [**environmentsDeleteBulk**](docs/Api/EnvironmentsApi.md#environmentsdeletebulk) | **DELETE** /api/v2/environments | Delete Bulk
*EnvironmentsApi* | [**environmentsList**](docs/Api/EnvironmentsApi.md#environmentslist) | **GET** /api/v2/environments | List
*OrganizationApi* | [**organizationUnitsCreate**](docs/Api/OrganizationApi.md#organizationunitscreate) | **POST** /api/v2/organization-units | Create
*OrganizationApi* | [**organizationUnitsDelete**](docs/Api/OrganizationApi.md#organizationunitsdelete) | **DELETE** /api/v2/organization-units/{organizationUnit} | Delete
*OrganizationApi* | [**organizationUnitsList**](docs/Api/OrganizationApi.md#organizationunitslist) | **GET** /api/v2/organization-units | List
*OrganizationApi* | [**organizationUnitsShow**](docs/Api/OrganizationApi.md#organizationunitsshow) | **GET** /api/v2/organization-units/{organizationUnit} | View
*OrganizationApi* | [**organizationUnitsUpdate**](docs/Api/OrganizationApi.md#organizationunitsupdate) | **PUT** /api/v2/organization-units/{organizationUnit} | Update
*TaggedBusinessProcessModelsApi* | [**taggedBusinessModelsStart**](docs/Api/TaggedBusinessProcessModelsApi.md#taggedbusinessmodelsstart) | **POST** /api/v2/tagged/business-models | Starts business processes by tags
*TagsApi* | [**tagsCreate**](docs/Api/TagsApi.md#tagscreate) | **POST** /api/v2/tags | Create
*TagsApi* | [**tagsDelete**](docs/Api/TagsApi.md#tagsdelete) | **DELETE** /api/v2/tags/{tag} | Delete
*TagsApi* | [**tagsList**](docs/Api/TagsApi.md#tagslist) | **GET** /api/v2/tags | List
*TagsApi* | [**tagsShow**](docs/Api/TagsApi.md#tagsshow) | **GET** /api/v2/tags/{id} | View
*TagsApi* | [**tagsUpdate**](docs/Api/TagsApi.md#tagsupdate) | **PUT** /api/v2/tags/{id} | Update
*TasksApi* | [**tasksCreate**](docs/Api/TasksApi.md#taskscreate) | **POST** /api/v2/tasks | Create task
*TasksApi* | [**tasksDelete**](docs/Api/TasksApi.md#tasksdelete) | **DELETE** /api/v2/tasks/{task} | Delete task
*TasksApi* | [**tasksList**](docs/Api/TasksApi.md#taskslist) | **GET** /api/v2/tasks | List
*TasksApi* | [**tasksShow**](docs/Api/TasksApi.md#tasksshow) | **GET** /api/v2/tasks/{id} | View task
*TasksApi* | [**tasksUpdate**](docs/Api/TasksApi.md#tasksupdate) | **PUT** /api/v2/tasks/{id} | Update task

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
- [BusinessBaseModelExceptionResource](docs/Model/BusinessBaseModelExceptionResource.md)
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
- [OrganizationUnitResource](docs/Model/OrganizationUnitResource.md)
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
