<?php

namespace Microsoft\Graph\Generated\Me\Authentication\SoftwareOathMethods;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SoftwareOathMethodsRequestBuilderGetRequestConfiguration 
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
     * @var SoftwareOathMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SoftwareOathMethodsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new softwareOathMethodsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SoftwareOathMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SoftwareOathMethodsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
