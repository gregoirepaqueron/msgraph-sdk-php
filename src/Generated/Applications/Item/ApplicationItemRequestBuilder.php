<?php

namespace Microsoft\Graph\Generated\Applications\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Applications\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\ExtensionPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\Item\ExtensionPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\FederatedIdentityCredentialsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\Item\FederatedIdentityCredentialItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Logo\LogoRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphAddKey\MicrosoftGraphAddKeyRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphAddPassword\MicrosoftGraphAddPasswordRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphCheckMemberGroups\MicrosoftGraphCheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphCheckMemberObjects\MicrosoftGraphCheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphGetMemberGroups\MicrosoftGraphGetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphGetMemberObjects\MicrosoftGraphGetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphRemoveKey\MicrosoftGraphRemoveKeyRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphRemovePassword\MicrosoftGraphRemovePasswordRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphSetVerifiedPublisher\MicrosoftGraphSetVerifiedPublisherRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\MicrosoftGraphUnsetVerifiedPublisher\MicrosoftGraphUnsetVerifiedPublisherRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Models\Application;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Promise;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of application entities.
*/
class ApplicationItemRequestBuilder 
{
    /**
     * Provides operations to manage the createdOnBehalfOf property of the microsoft.graph.application entity.
    */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensionProperties property of the microsoft.graph.application entity.
    */
    public function extensionProperties(): ExtensionPropertiesRequestBuilder {
        return new ExtensionPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.application entity.
    */
    public function federatedIdentityCredentials(): FederatedIdentityCredentialsRequestBuilder {
        return new FederatedIdentityCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.application entity.
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the application entity.
    */
    public function logo(): LogoRequestBuilder {
        return new LogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addKey method.
    */
    public function microsoftGraphAddKey(): MicrosoftGraphAddKeyRequestBuilder {
        return new MicrosoftGraphAddKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addPassword method.
    */
    public function microsoftGraphAddPassword(): MicrosoftGraphAddPasswordRequestBuilder {
        return new MicrosoftGraphAddPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function microsoftGraphCheckMemberGroups(): MicrosoftGraphCheckMemberGroupsRequestBuilder {
        return new MicrosoftGraphCheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function microsoftGraphCheckMemberObjects(): MicrosoftGraphCheckMemberObjectsRequestBuilder {
        return new MicrosoftGraphCheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function microsoftGraphGetMemberGroups(): MicrosoftGraphGetMemberGroupsRequestBuilder {
        return new MicrosoftGraphGetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function microsoftGraphGetMemberObjects(): MicrosoftGraphGetMemberObjectsRequestBuilder {
        return new MicrosoftGraphGetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeKey method.
    */
    public function microsoftGraphRemoveKey(): MicrosoftGraphRemoveKeyRequestBuilder {
        return new MicrosoftGraphRemoveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removePassword method.
    */
    public function microsoftGraphRemovePassword(): MicrosoftGraphRemovePasswordRequestBuilder {
        return new MicrosoftGraphRemovePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setVerifiedPublisher method.
    */
    public function microsoftGraphSetVerifiedPublisher(): MicrosoftGraphSetVerifiedPublisherRequestBuilder {
        return new MicrosoftGraphSetVerifiedPublisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsetVerifiedPublisher method.
    */
    public function microsoftGraphUnsetVerifiedPublisher(): MicrosoftGraphUnsetVerifiedPublisherRequestBuilder {
        return new MicrosoftGraphUnsetVerifiedPublisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the owners property of the microsoft.graph.application entity.
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.application entity.
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.application entity.
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ApplicationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an application object. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param ApplicationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/application-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ApplicationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): ?Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, 'Promise', $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the extensionProperties property of the microsoft.graph.application entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionPropertyItemRequestBuilder
    */
    public function extensionPropertiesById(string $id): ExtensionPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extensionProperty%2Did'] = $id;
        return new ExtensionPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.application entity.
     * @param string $id Unique identifier of the item
     * @return FederatedIdentityCredentialItemRequestBuilder
    */
    public function federatedIdentityCredentialsById(string $id): FederatedIdentityCredentialItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['federatedIdentityCredential%2Did'] = $id;
        return new FederatedIdentityCredentialItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get the properties and relationships of an application object.
     * @param ApplicationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/application-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApplicationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): ?Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Promise::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.application entity.
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.applications.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of an application object.
     * @param \Microsoft\Graph\Generated\Models\Application $body The request body
     * @param ApplicationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/application-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(\Microsoft\Graph\Generated\Models\Application $body, ?ApplicationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): ?Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Promise::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete an application object. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param ApplicationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApplicationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of an application object.
     * @param ApplicationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.applications.item.tokenIssuancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.applications.item.tokenLifetimePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of an application object.
     * @param \Microsoft\Graph\Generated\Models\Application $body The request body
     * @param ApplicationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(\Microsoft\Graph\Generated\Models\Application $body, ?ApplicationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
