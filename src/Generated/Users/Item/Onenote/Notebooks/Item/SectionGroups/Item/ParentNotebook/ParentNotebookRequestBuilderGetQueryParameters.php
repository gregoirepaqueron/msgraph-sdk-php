<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\SectionGroups\Item\ParentNotebook;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The notebook that contains the section group. Read-only.
*/
class ParentNotebookRequestBuilderGetQueryParameters 
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