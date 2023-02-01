<?php

namespace Microsoft\Graph\Generated\Me\Onenote\Sections\Item\ParentSectionGroup;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The section group that contains the section.  Read-only.
*/
class ParentSectionGroupRequestBuilderGetQueryParameters 
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