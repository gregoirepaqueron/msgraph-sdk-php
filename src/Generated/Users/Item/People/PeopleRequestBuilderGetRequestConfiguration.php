<?php

namespace Microsoft\Graph\Generated\Users\Item\People;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PeopleRequestBuilderGetRequestConfiguration 
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
     * @var PeopleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PeopleRequestBuilderGetQueryParameters $queryParameters = null;
    
}