<?php

namespace Microsoft\Graph\Generated\Users\Item\Insights\Trending\Item\Resource;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used for navigating to the trending document.
*/
class ResourceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}