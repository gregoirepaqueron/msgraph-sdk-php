<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleAssignmentSchedulesRequestBuilderGetRequestConfiguration 
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
     * @var RoleAssignmentSchedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleAssignmentSchedulesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new roleAssignmentSchedulesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RoleAssignmentSchedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleAssignmentSchedulesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
