<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskDetections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskDetectionItemRequestBuilderGetRequestConfiguration 
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
     * @var RiskDetectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskDetectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}