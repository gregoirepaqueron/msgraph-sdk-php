<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of subscriptions on the list.
*/
class SubscriptionItemRequestBuilderGetQueryParameters 
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