<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\OfferShiftRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OfferShiftRequestsRequestBuilderGetRequestConfiguration 
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
     * @var OfferShiftRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OfferShiftRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new offerShiftRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OfferShiftRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OfferShiftRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
