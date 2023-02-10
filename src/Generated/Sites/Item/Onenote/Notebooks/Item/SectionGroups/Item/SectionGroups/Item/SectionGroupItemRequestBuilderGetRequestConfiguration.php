<?php

namespace Microsoft\Graph\Generated\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\SectionGroups\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SectionGroupItemRequestBuilderGetRequestConfiguration 
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
     * @var SectionGroupItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public SectionGroupItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new SectionGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SectionGroupItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SectionGroupItemRequestBuilderGetQueryParameters {
        return new SectionGroupItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SectionGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SectionGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SectionGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
