<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\ColumnLinks;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ColumnLinksRequestBuilderGetRequestConfiguration 
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
     * @var ColumnLinksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ColumnLinksRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new columnLinksRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ColumnLinksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ColumnLinksRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
