<?php

namespace Microsoft\Graph\Generated\Applications\Item\TokenIssuancePolicies\Item;

use Microsoft\Graph\Generated\Applications\Item\TokenIssuancePolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /applications/{application-id}/tokenIssuancePolicies/{tokenIssuancePolicy-id}
*/
class TokenIssuancePolicyItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of application entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new TokenIssuancePolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $tokenIssuancePolicyId key: id of tokenIssuancePolicy
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $tokenIssuancePolicyId = null) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}/tokenIssuancePolicies/{tokenIssuancePolicy%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['tokenIssuancePolicyId'] = $tokenIssuancePolicyId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}