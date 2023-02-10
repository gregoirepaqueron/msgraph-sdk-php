<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\AccessAssignments;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessAssignmentsRequestBuilderGetRequestConfiguration 
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
     * @var AccessAssignmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessAssignmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new accessAssignmentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AccessAssignmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessAssignmentsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
