<?php

namespace Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonthlyPrintUsageByPrinterRequestBuilderGetRequestConfiguration 
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
     * @var MonthlyPrintUsageByPrinterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonthlyPrintUsageByPrinterRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new monthlyPrintUsageByPrinterRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MonthlyPrintUsageByPrinterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonthlyPrintUsageByPrinterRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
