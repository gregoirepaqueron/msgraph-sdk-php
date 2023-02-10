<?php

namespace Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TokenLifetimePoliciesRequestBuilderGetRequestConfiguration 
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
     * @var TokenLifetimePoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TokenLifetimePoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new tokenLifetimePoliciesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TokenLifetimePoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TokenLifetimePoliciesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
