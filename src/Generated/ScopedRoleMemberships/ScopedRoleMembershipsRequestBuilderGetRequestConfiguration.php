<?php

namespace Microsoft\Graph\Generated\ScopedRoleMemberships;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScopedRoleMembershipsRequestBuilderGetRequestConfiguration 
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
     * @var ScopedRoleMembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScopedRoleMembershipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new scopedRoleMembershipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ScopedRoleMembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScopedRoleMembershipsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
