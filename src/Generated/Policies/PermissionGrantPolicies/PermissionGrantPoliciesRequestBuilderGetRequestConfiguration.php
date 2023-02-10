<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionGrantPoliciesRequestBuilderGetRequestConfiguration 
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
     * @var PermissionGrantPoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionGrantPoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new permissionGrantPoliciesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PermissionGrantPoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionGrantPoliciesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
