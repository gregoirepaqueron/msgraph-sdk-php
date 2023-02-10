<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration 
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
     * @var DeviceEnrollmentConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceEnrollmentConfigurationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceEnrollmentConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceEnrollmentConfigurationsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
