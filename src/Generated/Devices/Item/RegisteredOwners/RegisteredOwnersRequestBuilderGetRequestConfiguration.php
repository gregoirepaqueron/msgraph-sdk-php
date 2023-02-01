<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredOwners;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegisteredOwnersRequestBuilderGetRequestConfiguration 
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
     * @var RegisteredOwnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegisteredOwnersRequestBuilderGetQueryParameters $queryParameters = null;
    
}