<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TroubleshootingEvents;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TroubleshootingEventsRequestBuilderGetRequestConfiguration 
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
     * @var TroubleshootingEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TroubleshootingEventsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new troubleshootingEventsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TroubleshootingEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TroubleshootingEventsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
