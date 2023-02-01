<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All the custom questions of this business. Read-only. Nullable.
*/
class BookingCustomQuestionItemRequestBuilderGetQueryParameters 
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