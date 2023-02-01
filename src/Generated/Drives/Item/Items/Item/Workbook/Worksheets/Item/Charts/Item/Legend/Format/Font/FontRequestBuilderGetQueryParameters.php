<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Legend\Format\Font;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the font attributes such as font name, font size, color, etc. of a chart legend. Read-only.
*/
class FontRequestBuilderGetQueryParameters 
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
