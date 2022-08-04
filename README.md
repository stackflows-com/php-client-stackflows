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



// Configure Bearer authorization: default
$config = Stackflows\Clients\Stackflows\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Stackflows\Clients\Stackflows\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$diagramId = 078c96e0-13c7-11ed-9f88-2f5b1abeb570; // string | The ID of the diagram.

try {
    $result = $apiInstance->deleteEnvironmentBusinessModelDiagrams($diagramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->deleteEnvironmentBusinessModelDiagrams: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8081*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EnvironmentApi* | [**deleteEnvironmentBusinessModelDiagrams**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodeldiagrams) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram_id} | Delete Business Model Diagram
*EnvironmentApi* | [**deleteEnvironmentBusinessModelDiagramsComments**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodeldiagramscomments) | **DELETE** /api/v2/environment/business-model-diagrams/{diagram_id}/comments/{comment_id} | Delete Business Model Diagram Comment
*EnvironmentApi* | [**deleteEnvironmentBusinessModels**](docs/Api/EnvironmentApi.md#deleteenvironmentbusinessmodels) | **DELETE** /api/v2/environment/business-models/{model_id} | Delete Business Model
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsCommentsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramscommentslist) | **GET** /api/v2/environment/business-model-diagrams/{diagram_id}/comments | List Business Model Diagram Comments
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramslist) | **GET** /api/v2/environment/business-model-diagrams | List Business Model Diagram
*EnvironmentApi* | [**getEnvironmentBusinessModelDiagramsShow**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodeldiagramsshow) | **GET** /api/v2/environment/business-model-diagrams/{diagram_id} | View Business Model Diagram
*EnvironmentApi* | [**getEnvironmentBusinessModelsCommentsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelscommentslist) | **GET** /api/v2/environment/business-models/{model_id}/comments | List Business Model Comments
*EnvironmentApi* | [**getEnvironmentBusinessModelsList**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelslist) | **GET** /api/v2/environment/business-models | List Business Models
*EnvironmentApi* | [**getEnvironmentBusinessModelsShow**](docs/Api/EnvironmentApi.md#getenvironmentbusinessmodelsshow) | **GET** /api/v2/environment/business-models/{model_id} | View Business Model
*EnvironmentApi* | [**getEnvironmentUserTasksList**](docs/Api/EnvironmentApi.md#getenvironmentusertaskslist) | **GET** /api/v2/environment/user-tasks | List User Tasks
*EnvironmentApi* | [**getEnvironmentUserTasksView**](docs/Api/EnvironmentApi.md#getenvironmentusertasksview) | **GET** /api/v2/environment/user-tasks/{id} | View User Task
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsCommentsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramscommentscreate) | **POST** /api/v2/environment/business-model-diagrams/{diagram_id}/comments | Create Business Model Diagram Comment
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramscreate) | **POST** /api/v2/environment/business-model-diagrams | Create Business Model Diagram
*EnvironmentApi* | [**postEnvironmentBusinessModelDiagramsPublish**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodeldiagramspublish) | **POST** /api/v2/environment/business-model-diagrams/{diagram_id}/publish | Publish Business Model Diagram
*EnvironmentApi* | [**postEnvironmentBusinessModelsCreate**](docs/Api/EnvironmentApi.md#postenvironmentbusinessmodelscreate) | **POST** /api/v2/environment/business-models | Create Business Model
*EnvironmentApi* | [**postEnvironmentEventsMessage**](docs/Api/EnvironmentApi.md#postenvironmenteventsmessage) | **POST** /api/v2/environment/events/message | Send Message
*EnvironmentApi* | [**postEnvironmentEventsSignal**](docs/Api/EnvironmentApi.md#postenvironmenteventssignal) | **POST** /api/v2/environment/events/signal | Send Message
*EnvironmentApi* | [**postEnvironmentServiceTasksLock**](docs/Api/EnvironmentApi.md#postenvironmentservicetaskslock) | **POST** /api/v2/environment/service-tasks | Lock Service Tasks
*EnvironmentApi* | [**postEnvironmentServiceTasksServe**](docs/Api/EnvironmentApi.md#postenvironmentservicetasksserve) | **POST** /api/v2/environment/service-tasks/{reference}/serve | Serve Service Task
*EnvironmentApi* | [**postEnvironmentServiceTasksUnlock**](docs/Api/EnvironmentApi.md#postenvironmentservicetasksunlock) | **POST** /api/v2/environment/service-tasks/{reference}/unlock | Unlock Service Task
*EnvironmentApi* | [**postEnvironmentTaggedBusinessModelsStart**](docs/Api/EnvironmentApi.md#postenvironmenttaggedbusinessmodelsstart) | **POST** /api/v2/environment/tagged/business-process-models | Starts Business Process Models by Tag
*EnvironmentApi* | [**postEnvironmentUserTasksComplete**](docs/Api/EnvironmentApi.md#postenvironmentusertaskscomplete) | **POST** /api/v2/environment/user-tasks/{id}/complete | Complete User Task
*EnvironmentApi* | [**postEnvironmentUserTasksErrorize**](docs/Api/EnvironmentApi.md#postenvironmentusertaskserrorize) | **POST** /api/v2/environment/user-tasks/{id}/errorize | Errorize User Task
*EnvironmentApi* | [**postEnvironmentUserTasksEscalate**](docs/Api/EnvironmentApi.md#postenvironmentusertasksescalate) | **POST** /api/v2/environment/user-tasks/{id}/escalate | Escalate User Task
*InstallationApi* | [**deleteEngines**](docs/Api/InstallationApi.md#deleteengines) | **DELETE** /api/v2/engines/{engine_id} | Delete Engine
*InstallationApi* | [**deleteEnvironmentsDeleteBulk**](docs/Api/InstallationApi.md#deleteenvironmentsdeletebulk) | **DELETE** /api/v2/environments | Delete Environments
*InstallationApi* | [**getEngine**](docs/Api/InstallationApi.md#getengine) | **GET** /api/v2/engines | List Engines
*InstallationApi* | [**getEnginesShow**](docs/Api/InstallationApi.md#getenginesshow) | **GET** /api/v2/engines/{id} | View Engine
*InstallationApi* | [**getEnvironmentsList**](docs/Api/InstallationApi.md#getenvironmentslist) | **GET** /api/v2/environments | List Environments
*InstallationApi* | [**postEnginesCreate**](docs/Api/InstallationApi.md#postenginescreate) | **POST** /api/v2/engines | Create Engine
*InstallationApi* | [**postEnvironmentsCreate**](docs/Api/InstallationApi.md#postenvironmentscreate) | **POST** /api/v2/environments | Create Environment
*InstallationApi* | [**putEnginesUpdate**](docs/Api/InstallationApi.md#putenginesupdate) | **PUT** /api/v2/engines/{id} | Update Engine
*OperationsApi* | [**deleteBusinessModelDiagrams**](docs/Api/OperationsApi.md#deletebusinessmodeldiagrams) | **DELETE** /api/v2/business-model-diagrams/{diagram_id} | Delete Business Model Diagram
*OperationsApi* | [**deleteBusinessModelDiagramsComments**](docs/Api/OperationsApi.md#deletebusinessmodeldiagramscomments) | **DELETE** /api/v2/business-model-diagrams/{diagram_id}/comments/{comment_id} | Delete Business Model Diagram Comment
*OperationsApi* | [**deleteBusinessModelExceptions**](docs/Api/OperationsApi.md#deletebusinessmodelexceptions) | **DELETE** /api/v2/business-model-exceptions/{exception_id} | Delete Business Model Exception
*OperationsApi* | [**deleteBusinessModels**](docs/Api/OperationsApi.md#deletebusinessmodels) | **DELETE** /api/v2/business-models/{model_id} | Delete Business Model
*OperationsApi* | [**deleteBusinessModelsDeleteBulk**](docs/Api/OperationsApi.md#deletebusinessmodelsdeletebulk) | **DELETE** /api/v2/business-models | Delete Business Models
*OperationsApi* | [**deleteBusinessProcesses**](docs/Api/OperationsApi.md#deletebusinessprocesses) | **DELETE** /api/v2/business-processes/{tag_id} | Delete Business Process Tag
*OperationsApi* | [**deleteBusinessProcessesDeleteBulk**](docs/Api/OperationsApi.md#deletebusinessprocessesdeletebulk) | **DELETE** /api/v2/business-processes | Delete Business Process Tags
*OperationsApi* | [**deleteCategories**](docs/Api/OperationsApi.md#deletecategories) | **DELETE** /api/v2/categories/{category_id} | Delete Category
*OperationsApi* | [**deleteTags**](docs/Api/OperationsApi.md#deletetags) | **DELETE** /api/v2/tags/{tag_id} | Delete Tag
*OperationsApi* | [**deleteTasks**](docs/Api/OperationsApi.md#deletetasks) | **DELETE** /api/v2/tasks/{task_id} | Delete Task
*OperationsApi* | [**getBusinessModelDiagramsCommentsList**](docs/Api/OperationsApi.md#getbusinessmodeldiagramscommentslist) | **GET** /api/v2/business-model-diagrams/{diagram_id}/comments | List Business Model Diagram Comments
*OperationsApi* | [**getBusinessModelDiagramsList**](docs/Api/OperationsApi.md#getbusinessmodeldiagramslist) | **GET** /api/v2/business-model-diagrams | List Business Model Diagram
*OperationsApi* | [**getBusinessModelDiagramsShow**](docs/Api/OperationsApi.md#getbusinessmodeldiagramsshow) | **GET** /api/v2/business-model-diagrams/{diagram_id} | View Business Model Diagram
*OperationsApi* | [**getBusinessModelExceptionsList**](docs/Api/OperationsApi.md#getbusinessmodelexceptionslist) | **GET** /api/v2/business-model-exceptions | List Business Model Exceptions
*OperationsApi* | [**getBusinessModelExceptionsShow**](docs/Api/OperationsApi.md#getbusinessmodelexceptionsshow) | **GET** /api/v2/business-model-exceptions/{exception_id} | View Business Model Exception
*OperationsApi* | [**getBusinessModelPublicationsList**](docs/Api/OperationsApi.md#getbusinessmodelpublicationslist) | **GET** /api/v2/business-model-publications | List Business Model Publications
*OperationsApi* | [**getBusinessModelPublicationsShow**](docs/Api/OperationsApi.md#getbusinessmodelpublicationsshow) | **GET** /api/v2/business-model-publications/{publication_id} | View Business Model Publication
*OperationsApi* | [**getBusinessModelsCommentsList**](docs/Api/OperationsApi.md#getbusinessmodelscommentslist) | **GET** /api/v2/business-models/{model_id}/comments | List Business Model Comments
*OperationsApi* | [**getBusinessModelsList**](docs/Api/OperationsApi.md#getbusinessmodelslist) | **GET** /api/v2/business-models | List Business Models
*OperationsApi* | [**getBusinessModelsShow**](docs/Api/OperationsApi.md#getbusinessmodelsshow) | **GET** /api/v2/business-models/{model_id} | View Business Model
*OperationsApi* | [**getBusinessModelsShowRevision**](docs/Api/OperationsApi.md#getbusinessmodelsshowrevision) | **GET** /api/v2/business-models/{model_id}/revisions/{revision} | View Business Model Diagram
*OperationsApi* | [**getBusinessModelsShowRevisions**](docs/Api/OperationsApi.md#getbusinessmodelsshowrevisions) | **GET** /api/v2/business-models/{model_id}/revisions | List Business Model Diagrams
*OperationsApi* | [**getBusinessProcessesList**](docs/Api/OperationsApi.md#getbusinessprocesseslist) | **GET** /api/v2/business-processes | List Business Process Tags
*OperationsApi* | [**getBusinessProcessesShow**](docs/Api/OperationsApi.md#getbusinessprocessesshow) | **GET** /api/v2/business-processes/{tag_id} | View Business Process Tag
*OperationsApi* | [**getCategoriesList**](docs/Api/OperationsApi.md#getcategorieslist) | **GET** /api/v2/categories | List Categories
*OperationsApi* | [**getCategoriesShow**](docs/Api/OperationsApi.md#getcategoriesshow) | **GET** /api/v2/categories/{id} | View Category
*OperationsApi* | [**getTagsList**](docs/Api/OperationsApi.md#gettagslist) | **GET** /api/v2/tags | List Tags
*OperationsApi* | [**getTagsShow**](docs/Api/OperationsApi.md#gettagsshow) | **GET** /api/v2/tags/{id} | View Tag
*OperationsApi* | [**getTasksList**](docs/Api/OperationsApi.md#gettaskslist) | **GET** /api/v2/tasks | List Tasks
*OperationsApi* | [**getTasksShow**](docs/Api/OperationsApi.md#gettasksshow) | **GET** /api/v2/tasks/{id} | View Task
*OperationsApi* | [**postBusinessModelDiagramsCommentsCreate**](docs/Api/OperationsApi.md#postbusinessmodeldiagramscommentscreate) | **POST** /api/v2/business-model-diagrams/{diagram_id}/comments | Create Business Model Diagram Comment
*OperationsApi* | [**postBusinessModelDiagramsCreate**](docs/Api/OperationsApi.md#postbusinessmodeldiagramscreate) | **POST** /api/v2/business-model-diagrams | Create Business Model Diagram
*OperationsApi* | [**postBusinessModelDiagramsPublish**](docs/Api/OperationsApi.md#postbusinessmodeldiagramspublish) | **POST** /api/v2/business-model-diagrams/{diagram_id}/publish | Publish Business Model Diagram
*OperationsApi* | [**postBusinessModelExceptionsCreate**](docs/Api/OperationsApi.md#postbusinessmodelexceptionscreate) | **POST** /api/v2/business-model-exceptions | Create Business Model Exception
*OperationsApi* | [**postBusinessModelsCreate**](docs/Api/OperationsApi.md#postbusinessmodelscreate) | **POST** /api/v2/business-models | Create Business Model
*OperationsApi* | [**postBusinessModelsPostRevision**](docs/Api/OperationsApi.md#postbusinessmodelspostrevision) | **POST** /api/v2/business-models/{model_id}/revisions | Submit Business Model Diagram
*OperationsApi* | [**postBusinessModelsTag**](docs/Api/OperationsApi.md#postbusinessmodelstag) | **POST** /api/v2/business-models/{taggable_id}/tag | Tag Business Model
*OperationsApi* | [**postBusinessProcessModelsStart**](docs/Api/OperationsApi.md#postbusinessprocessmodelsstart) | **POST** /api/v2/business-process-models/{environment_id} | Starts Business Process Model
*OperationsApi* | [**postBusinessProcessesCreate**](docs/Api/OperationsApi.md#postbusinessprocessescreate) | **POST** /api/v2/business-processes | Create Business Process Tag
*OperationsApi* | [**postCategoriesCreate**](docs/Api/OperationsApi.md#postcategoriescreate) | **POST** /api/v2/categories | Create Category
*OperationsApi* | [**postTagsCreate**](docs/Api/OperationsApi.md#posttagscreate) | **POST** /api/v2/tags | Create Tag
*OperationsApi* | [**postTasksCreate**](docs/Api/OperationsApi.md#posttaskscreate) | **POST** /api/v2/tasks | Create Task
*OperationsApi* | [**putBusinessModelDiagramsUpdate**](docs/Api/OperationsApi.md#putbusinessmodeldiagramsupdate) | **PUT** /api/v2/business-model-diagrams/{diagram_id} | Update Business Model Diagram
*OperationsApi* | [**putBusinessModelExceptionsUpdate**](docs/Api/OperationsApi.md#putbusinessmodelexceptionsupdate) | **PUT** /api/v2/business-model-exceptions/{exception_id} | Update Business Model Exception
*OperationsApi* | [**putBusinessModelsUpdate**](docs/Api/OperationsApi.md#putbusinessmodelsupdate) | **PUT** /api/v2/business-models/{model_id} | Update Business Model
*OperationsApi* | [**putBusinessProcessesUpdate**](docs/Api/OperationsApi.md#putbusinessprocessesupdate) | **PUT** /api/v2/business-processes/{tag_id} | Update Business Process Tag
*OperationsApi* | [**putCategoriesUpdate**](docs/Api/OperationsApi.md#putcategoriesupdate) | **PUT** /api/v2/categories/{id} | Update Category
*OperationsApi* | [**putTagsUpdate**](docs/Api/OperationsApi.md#puttagsupdate) | **PUT** /api/v2/tags/{id} | Update Tag
*OperationsApi* | [**putTasksUpdate**](docs/Api/OperationsApi.md#puttasksupdate) | **PUT** /api/v2/tasks/{id} | Update Task
*OrganizationApi* | [**deleteOrganizationUnits**](docs/Api/OrganizationApi.md#deleteorganizationunits) | **DELETE** /api/v2/organization-units/{organizationUnit_id} | Delete Organzation Unit
*OrganizationApi* | [**getOrganizationUnitsList**](docs/Api/OrganizationApi.md#getorganizationunitslist) | **GET** /api/v2/organization-units | List Organzation Units
*OrganizationApi* | [**getOrganizationUnitsShow**](docs/Api/OrganizationApi.md#getorganizationunitsshow) | **GET** /api/v2/organization-units/{organizationUnit_id} | View Organzation Unit
*OrganizationApi* | [**postOrganizationUnitsCreate**](docs/Api/OrganizationApi.md#postorganizationunitscreate) | **POST** /api/v2/organization-units | Create Organzation Unit
*OrganizationApi* | [**putOrganizationUnitsUpdate**](docs/Api/OrganizationApi.md#putorganizationunitsupdate) | **PUT** /api/v2/organization-units/{organizationUnit_id} | Update Organzation Unit
*TaggedApi* | [**postTaggedBusinessModelsStart**](docs/Api/TaggedApi.md#posttaggedbusinessmodelsstart) | **POST** /api/v2/tagged/business-models | Starts Business Process Models by Tag
*UserApi* | [**deleteUserOrganizations**](docs/Api/UserApi.md#deleteuserorganizations) | **DELETE** /api/v2/user/organizations/{organization_id} | Delete Organization
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

- [ActivityType](docs/Model/ActivityType.md)
- [BusinessBaseModelDiagramModel](docs/Model/BusinessBaseModelDiagramModel.md)
- [BusinessBaseModelExceptionModel](docs/Model/BusinessBaseModelExceptionModel.md)
- [BusinessBaseModelModel](docs/Model/BusinessBaseModelModel.md)
- [BusinessProcessInstanceType](docs/Model/BusinessProcessInstanceType.md)
- [BusinessProcessModelDiagramModel](docs/Model/BusinessProcessModelDiagramModel.md)
- [BusinessProcessModelModel](docs/Model/BusinessProcessModelModel.md)
- [BusinessProcessModelPublicationModel](docs/Model/BusinessProcessModelPublicationModel.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CommentModel](docs/Model/CommentModel.md)
- [CompleteUserTaskResponse](docs/Model/CompleteUserTaskResponse.md)
- [CreateBusinessModelDiagramCommentResponse](docs/Model/CreateBusinessModelDiagramCommentResponse.md)
- [CreateBusinessModelDiagramResponse](docs/Model/CreateBusinessModelDiagramResponse.md)
- [CreateBusinessModelExceptionResponse](docs/Model/CreateBusinessModelExceptionResponse.md)
- [CreateBusinessModelResponse](docs/Model/CreateBusinessModelResponse.md)
- [CreateBusinessProcessTagResponse](docs/Model/CreateBusinessProcessTagResponse.md)
- [CreateCategoryResponse](docs/Model/CreateCategoryResponse.md)
- [CreateEngineResponse](docs/Model/CreateEngineResponse.md)
- [CreateEnvironmentResponse](docs/Model/CreateEnvironmentResponse.md)
- [CreateOrganizationResponse](docs/Model/CreateOrganizationResponse.md)
- [CreateOrganzationUnitResponse](docs/Model/CreateOrganzationUnitResponse.md)
- [CreateTagResponse](docs/Model/CreateTagResponse.md)
- [CreateTaskResponse](docs/Model/CreateTaskResponse.md)
- [DataAttributeType](docs/Model/DataAttributeType.md)
- [DataPointType](docs/Model/DataPointType.md)
- [DeleteBusinessModelDiagramCommentResponse](docs/Model/DeleteBusinessModelDiagramCommentResponse.md)
- [DeleteBusinessModelDiagramResponse](docs/Model/DeleteBusinessModelDiagramResponse.md)
- [DeleteBusinessModelExceptionResponse](docs/Model/DeleteBusinessModelExceptionResponse.md)
- [DeleteBusinessModelResponse](docs/Model/DeleteBusinessModelResponse.md)
- [DeleteBusinessModelsDeleteBulkRequest](docs/Model/DeleteBusinessModelsDeleteBulkRequest.md)
- [DeleteBusinessModelsResponse](docs/Model/DeleteBusinessModelsResponse.md)
- [DeleteBusinessProcessTagResponse](docs/Model/DeleteBusinessProcessTagResponse.md)
- [DeleteBusinessProcessTagsResponse](docs/Model/DeleteBusinessProcessTagsResponse.md)
- [DeleteBusinessProcessesDeleteBulkRequest](docs/Model/DeleteBusinessProcessesDeleteBulkRequest.md)
- [DeleteCategoryResponse](docs/Model/DeleteCategoryResponse.md)
- [DeleteEngineResponse](docs/Model/DeleteEngineResponse.md)
- [DeleteEnvironmentsDeleteBulkRequest](docs/Model/DeleteEnvironmentsDeleteBulkRequest.md)
- [DeleteEnvironmentsResponse](docs/Model/DeleteEnvironmentsResponse.md)
- [DeleteOrganizationResponse](docs/Model/DeleteOrganizationResponse.md)
- [DeleteOrganzationUnitResponse](docs/Model/DeleteOrganzationUnitResponse.md)
- [DeleteTagResponse](docs/Model/DeleteTagResponse.md)
- [DeleteTaskResponse](docs/Model/DeleteTaskResponse.md)
- [EngineModel](docs/Model/EngineModel.md)
- [EnvironmentModel](docs/Model/EnvironmentModel.md)
- [EscalateUserTaskResponse](docs/Model/EscalateUserTaskResponse.md)
- [EventType](docs/Model/EventType.md)
- [GetEnvironmentUserTasksListRequest](docs/Model/GetEnvironmentUserTasksListRequest.md)
- [ListBusinessModelCommentsResponse](docs/Model/ListBusinessModelCommentsResponse.md)
- [ListBusinessModelDiagramCommentsResponse](docs/Model/ListBusinessModelDiagramCommentsResponse.md)
- [ListBusinessModelDiagramResponse](docs/Model/ListBusinessModelDiagramResponse.md)
- [ListBusinessModelDiagramsResponse](docs/Model/ListBusinessModelDiagramsResponse.md)
- [ListBusinessModelExceptionsResponse](docs/Model/ListBusinessModelExceptionsResponse.md)
- [ListBusinessModelPublicationsResponse](docs/Model/ListBusinessModelPublicationsResponse.md)
- [ListBusinessModelsResponse](docs/Model/ListBusinessModelsResponse.md)
- [ListBusinessProcessTagsResponse](docs/Model/ListBusinessProcessTagsResponse.md)
- [ListCategoriesResponse](docs/Model/ListCategoriesResponse.md)
- [ListEnginesResponse](docs/Model/ListEnginesResponse.md)
- [ListEnvironmentsResponse](docs/Model/ListEnvironmentsResponse.md)
- [ListOrganizationsResponse](docs/Model/ListOrganizationsResponse.md)
- [ListOrganzationUnitsResponse](docs/Model/ListOrganzationUnitsResponse.md)
- [ListTagsResponse](docs/Model/ListTagsResponse.md)
- [ListTasksResponse](docs/Model/ListTasksResponse.md)
- [ListUserTasksResponse](docs/Model/ListUserTasksResponse.md)
- [LockServiceTasksResponse](docs/Model/LockServiceTasksResponse.md)
- [LoginResponse](docs/Model/LoginResponse.md)
- [MeResponse](docs/Model/MeResponse.md)
- [OrganizationUnitModel](docs/Model/OrganizationUnitModel.md)
- [PostBusinessModelDiagramsCommentsCreateRequest](docs/Model/PostBusinessModelDiagramsCommentsCreateRequest.md)
- [PostBusinessModelExceptionsCreateRequest](docs/Model/PostBusinessModelExceptionsCreateRequest.md)
- [PostBusinessModelsCreateRequest](docs/Model/PostBusinessModelsCreateRequest.md)
- [PostBusinessModelsTagRequest](docs/Model/PostBusinessModelsTagRequest.md)
- [PostBusinessProcessModelsStartRequest](docs/Model/PostBusinessProcessModelsStartRequest.md)
- [PostBusinessProcessesCreateRequest](docs/Model/PostBusinessProcessesCreateRequest.md)
- [PostCategoriesCreateRequest](docs/Model/PostCategoriesCreateRequest.md)
- [PostEnginesCreateRequest](docs/Model/PostEnginesCreateRequest.md)
- [PostEnvironmentBusinessModelDiagramsCommentsCreateRequest](docs/Model/PostEnvironmentBusinessModelDiagramsCommentsCreateRequest.md)
- [PostEnvironmentBusinessModelDiagramsPublishRequest](docs/Model/PostEnvironmentBusinessModelDiagramsPublishRequest.md)
- [PostEnvironmentBusinessModelsCreateRequest](docs/Model/PostEnvironmentBusinessModelsCreateRequest.md)
- [PostEnvironmentEventsMessageRequest](docs/Model/PostEnvironmentEventsMessageRequest.md)
- [PostEnvironmentEventsSignalRequest](docs/Model/PostEnvironmentEventsSignalRequest.md)
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
- [PublishBusinessModelDiagramResponse](docs/Model/PublishBusinessModelDiagramResponse.md)
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
- [RegisterResponse](docs/Model/RegisterResponse.md)
- [RevokeAllTokensResponse](docs/Model/RevokeAllTokensResponse.md)
- [SendMessageResponse](docs/Model/SendMessageResponse.md)
- [ServeServiceTaskResponse](docs/Model/ServeServiceTaskResponse.md)
- [ServiceTaskType](docs/Model/ServiceTaskType.md)
- [StartsBusinessProcessModelResponse](docs/Model/StartsBusinessProcessModelResponse.md)
- [StartsBusinessProcessModelsByTagResponse](docs/Model/StartsBusinessProcessModelsByTagResponse.md)
- [SubmitBusinessModelDiagramResponse](docs/Model/SubmitBusinessModelDiagramResponse.md)
- [TagBusinessModelResponse](docs/Model/TagBusinessModelResponse.md)
- [TagModel](docs/Model/TagModel.md)
- [TaskModel](docs/Model/TaskModel.md)
- [UnlockServiceTaskResponse](docs/Model/UnlockServiceTaskResponse.md)
- [UpdateBusinessModelDiagramResponse](docs/Model/UpdateBusinessModelDiagramResponse.md)
- [UpdateBusinessModelExceptionResponse](docs/Model/UpdateBusinessModelExceptionResponse.md)
- [UpdateBusinessModelResponse](docs/Model/UpdateBusinessModelResponse.md)
- [UpdateBusinessProcessTagResponse](docs/Model/UpdateBusinessProcessTagResponse.md)
- [UpdateCategoryResponse](docs/Model/UpdateCategoryResponse.md)
- [UpdateEngineResponse](docs/Model/UpdateEngineResponse.md)
- [UpdateOrganizationResponse](docs/Model/UpdateOrganizationResponse.md)
- [UpdateOrganzationUnitResponse](docs/Model/UpdateOrganzationUnitResponse.md)
- [UpdateResponse](docs/Model/UpdateResponse.md)
- [UpdateTagResponse](docs/Model/UpdateTagResponse.md)
- [UpdateTaskResponse](docs/Model/UpdateTaskResponse.md)
- [UserModel](docs/Model/UserModel.md)
- [UserTaskType](docs/Model/UserTaskType.md)
- [ViewBusinessModelDiagramResponse](docs/Model/ViewBusinessModelDiagramResponse.md)
- [ViewBusinessModelDiagramResponse1](docs/Model/ViewBusinessModelDiagramResponse1.md)
- [ViewBusinessModelExceptionResponse](docs/Model/ViewBusinessModelExceptionResponse.md)
- [ViewBusinessModelPublicationResponse](docs/Model/ViewBusinessModelPublicationResponse.md)
- [ViewBusinessModelResponse](docs/Model/ViewBusinessModelResponse.md)
- [ViewBusinessProcessTagResponse](docs/Model/ViewBusinessProcessTagResponse.md)
- [ViewCategoryResponse](docs/Model/ViewCategoryResponse.md)
- [ViewEngineResponse](docs/Model/ViewEngineResponse.md)
- [ViewOrganizationResponse](docs/Model/ViewOrganizationResponse.md)
- [ViewOrganzationUnitResponse](docs/Model/ViewOrganzationUnitResponse.md)
- [ViewTagResponse](docs/Model/ViewTagResponse.md)
- [ViewTaskResponse](docs/Model/ViewTaskResponse.md)
- [ViewUserTaskResponse](docs/Model/ViewUserTaskResponse.md)

## Authorization

### default

- **Type**: Bearer authentication

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
