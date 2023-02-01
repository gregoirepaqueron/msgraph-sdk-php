<?php

namespace Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintUsageByUserItemRequestBuilderGetRequestConfiguration 
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
     * @var PrintUsageByUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintUsageByUserItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}