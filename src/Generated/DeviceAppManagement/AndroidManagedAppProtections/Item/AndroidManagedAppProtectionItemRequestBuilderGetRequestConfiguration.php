<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration 
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
     * @var AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters {
        return new AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
