<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OfferShiftRequests\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OfferShiftRequestItemRequestBuilderGetRequestConfiguration 
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
     * @var OfferShiftRequestItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public OfferShiftRequestItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new OfferShiftRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OfferShiftRequestItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OfferShiftRequestItemRequestBuilderGetQueryParameters {
        return new OfferShiftRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OfferShiftRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OfferShiftRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OfferShiftRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
