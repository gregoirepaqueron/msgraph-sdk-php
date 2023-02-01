<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Item\Results;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResultsRequestBuilderGetRequestConfiguration 
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
     * @var ResultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResultsRequestBuilderGetQueryParameters $queryParameters = null;
    
}