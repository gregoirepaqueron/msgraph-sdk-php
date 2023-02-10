<?php

namespace Microsoft\Graph\Generated\Policies\TokenIssuancePolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TokenIssuancePoliciesRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TokenIssuancePoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TokenIssuancePoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new tokenIssuancePoliciesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TokenIssuancePoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TokenIssuancePoliciesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
