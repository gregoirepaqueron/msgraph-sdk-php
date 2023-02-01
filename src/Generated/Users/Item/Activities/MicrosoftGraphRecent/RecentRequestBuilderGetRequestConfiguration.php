<?php

namespace Microsoft\Graph\Generated\Users\Item\Activities\MicrosoftGraphRecent;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecentRequestBuilderGetRequestConfiguration 
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
     * @var RecentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecentRequestBuilderGetQueryParameters $queryParameters = null;
    
}