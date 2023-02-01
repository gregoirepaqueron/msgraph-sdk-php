<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of messages in the mailFolder.
*/
class MessageItemRequestBuilderGetQueryParameters 
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