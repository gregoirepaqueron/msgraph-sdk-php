<?php

namespace Microsoft\Graph\Generated\Users\Item\People\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * People that are relevant to the user. Read-only. Nullable.
*/
class PersonItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new PersonItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
