<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration 
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
     * @var WindowsHelloForBusinessMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsHelloForBusinessMethodsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new windowsHelloForBusinessMethodsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param WindowsHelloForBusinessMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsHelloForBusinessMethodsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
