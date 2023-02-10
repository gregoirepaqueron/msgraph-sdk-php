<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Operations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RichLongRunningOperationItemRequestBuilderGetRequestConfiguration 
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
     * @var RichLongRunningOperationItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public RichLongRunningOperationItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new RichLongRunningOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RichLongRunningOperationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RichLongRunningOperationItemRequestBuilderGetQueryParameters {
        return new RichLongRunningOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RichLongRunningOperationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RichLongRunningOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RichLongRunningOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
