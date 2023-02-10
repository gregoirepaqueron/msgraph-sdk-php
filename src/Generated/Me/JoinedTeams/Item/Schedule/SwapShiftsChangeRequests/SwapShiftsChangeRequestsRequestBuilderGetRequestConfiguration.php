<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\SwapShiftsChangeRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SwapShiftsChangeRequestsRequestBuilderGetRequestConfiguration 
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
     * @var SwapShiftsChangeRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SwapShiftsChangeRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new swapShiftsChangeRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SwapShiftsChangeRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SwapShiftsChangeRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
