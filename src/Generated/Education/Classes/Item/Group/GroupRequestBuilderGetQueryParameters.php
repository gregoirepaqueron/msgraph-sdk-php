<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Group;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The underlying Microsoft 365 group object.
*/
class GroupRequestBuilderGetQueryParameters 
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