<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleManagementPolicyAssignmentsRequestBuilderGetRequestConfiguration 
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
     * @var RoleManagementPolicyAssignmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleManagementPolicyAssignmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new roleManagementPolicyAssignmentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RoleManagementPolicyAssignmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleManagementPolicyAssignmentsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
