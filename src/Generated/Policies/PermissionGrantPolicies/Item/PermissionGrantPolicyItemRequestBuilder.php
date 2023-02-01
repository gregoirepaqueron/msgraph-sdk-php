<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PermissionGrantPolicy;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\ExcludesRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\IncludesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the permissionGrantPolicies property of the microsoft.graph.policyRoot entity.
*/
class PermissionGrantPolicyItemRequestBuilder 
{
    /**
     * Provides operations to manage the excludes property of the microsoft.graph.permissionGrantPolicy entity.
    */
    public function excludes(): ExcludesRequestBuilder {
        return new ExcludesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the includes property of the microsoft.graph.permissionGrantPolicy entity.
    */
    public function includes(): IncludesRequestBuilder {
        return new IncludesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new PermissionGrantPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $permissionGrantPolicyId key: id of permissionGrantPolicy
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $permissionGrantPolicyId = null) {
        $this->urlTemplate = '{+baseurl}/policies/permissionGrantPolicies/{permissionGrantPolicy%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['permissionGrantPolicyId'] = $permissionGrantPolicyId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete navigation property permissionGrantPolicies for policies
     * @param PermissionGrantPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?PermissionGrantPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the excludes property of the microsoft.graph.permissionGrantPolicy entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\Item\PermissionGrantConditionSetItemRequestBuilder
    */
    public function excludesById(string $id): \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\Item\PermissionGrantConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantConditionSet%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\Item\PermissionGrantConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The policy that specifies the conditions under which consent can be granted.
     * @param PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the includes property of the microsoft.graph.permissionGrantPolicy entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item\PermissionGrantConditionSetItemRequestBuilder
    */
    public function includesById(string $id): \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item\PermissionGrantConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantConditionSet%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item\PermissionGrantConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property permissionGrantPolicies in policies
     * @param PermissionGrantPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(PermissionGrantPolicy $body, ?PermissionGrantPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property permissionGrantPolicies for policies
     * @param PermissionGrantPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PermissionGrantPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The policy that specifies the conditions under which consent can be granted.
     * @param PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property permissionGrantPolicies in policies
     * @param PermissionGrantPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PermissionGrantPolicy $body, ?PermissionGrantPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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