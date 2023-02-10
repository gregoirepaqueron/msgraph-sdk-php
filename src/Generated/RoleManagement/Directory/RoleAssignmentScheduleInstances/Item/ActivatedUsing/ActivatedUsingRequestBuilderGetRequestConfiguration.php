<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\Item\ActivatedUsing;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivatedUsingRequestBuilderGetRequestConfiguration 
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
     * @var ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new activatedUsingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
