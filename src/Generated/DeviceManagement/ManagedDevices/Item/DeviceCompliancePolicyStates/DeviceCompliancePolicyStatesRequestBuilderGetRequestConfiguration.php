<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration 
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
     * @var DeviceCompliancePolicyStatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicyStatesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceCompliancePolicyStatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicyStatesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
