<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\Item\Sessions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SessionItemRequestBuilderGetRequestConfiguration 
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
     * @var SessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SessionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}