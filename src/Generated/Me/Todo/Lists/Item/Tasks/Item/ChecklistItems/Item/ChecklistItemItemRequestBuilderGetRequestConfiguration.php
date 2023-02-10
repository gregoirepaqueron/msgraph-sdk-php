<?php

namespace Microsoft\Graph\Generated\Me\Todo\Lists\Item\Tasks\Item\ChecklistItems\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChecklistItemItemRequestBuilderGetRequestConfiguration 
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
     * @var ChecklistItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChecklistItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChecklistItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ChecklistItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChecklistItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
