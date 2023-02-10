<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatAssessmentRequestsRequestBuilderGetRequestConfiguration 
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
     * @var ThreatAssessmentRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatAssessmentRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new threatAssessmentRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ThreatAssessmentRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatAssessmentRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
