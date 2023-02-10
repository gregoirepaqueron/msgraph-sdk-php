<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item\AcceptanceStatuses\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsAndConditionsAcceptanceStatusItemRequestBuilderGetRequestConfiguration 
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
     * @var TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsAcceptanceStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
