<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendar\SingleValueExtendedProperties\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
*/
class SingleValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters 
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