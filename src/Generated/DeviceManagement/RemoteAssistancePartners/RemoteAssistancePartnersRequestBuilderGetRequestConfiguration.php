<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RemoteAssistancePartners;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteAssistancePartnersRequestBuilderGetRequestConfiguration 
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
     * @var RemoteAssistancePartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteAssistancePartnersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new remoteAssistancePartnersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RemoteAssistancePartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteAssistancePartnersRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
