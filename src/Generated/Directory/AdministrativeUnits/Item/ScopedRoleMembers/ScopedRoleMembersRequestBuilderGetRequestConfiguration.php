<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\ScopedRoleMembers;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScopedRoleMembersRequestBuilderGetRequestConfiguration 
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
     * @var ScopedRoleMembersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScopedRoleMembersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new scopedRoleMembersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ScopedRoleMembersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScopedRoleMembersRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
