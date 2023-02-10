<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\LinkedResources;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LinkedResourcesRequestBuilderGetRequestConfiguration 
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
     * @var LinkedResourcesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LinkedResourcesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new linkedResourcesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LinkedResourcesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LinkedResourcesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
