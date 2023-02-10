<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScheduledActionConfigurationsRequestBuilderGetRequestConfiguration 
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
     * @var ScheduledActionConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScheduledActionConfigurationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new scheduledActionConfigurationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ScheduledActionConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScheduledActionConfigurationsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
