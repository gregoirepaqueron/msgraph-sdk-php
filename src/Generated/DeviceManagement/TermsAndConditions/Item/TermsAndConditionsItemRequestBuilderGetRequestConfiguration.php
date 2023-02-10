<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsAndConditionsItemRequestBuilderGetRequestConfiguration 
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
     * @var TermsAndConditionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TermsAndConditionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
