<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Apps\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedMobileAppItemRequestBuilderGetRequestConfiguration 
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
     * @var ManagedMobileAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedMobileAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedMobileAppItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ManagedMobileAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedMobileAppItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
