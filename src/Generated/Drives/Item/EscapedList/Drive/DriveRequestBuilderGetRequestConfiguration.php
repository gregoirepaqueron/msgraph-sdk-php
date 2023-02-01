<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\Drive;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriveRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DriveRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriveRequestBuilderGetQueryParameters $queryParameters = null;
    
}