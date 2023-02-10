<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item\AcceptanceStatuses\Item\TermsAndConditions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsAndConditionsRequestBuilderGetRequestConfiguration 
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
     * @var TermsAndConditionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new termsAndConditionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TermsAndConditionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
