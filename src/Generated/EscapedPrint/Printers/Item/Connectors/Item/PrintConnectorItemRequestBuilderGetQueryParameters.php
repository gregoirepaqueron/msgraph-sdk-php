<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Connectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The connectors that are associated with the printer.
*/
class PrintConnectorItemRequestBuilderGetQueryParameters 
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