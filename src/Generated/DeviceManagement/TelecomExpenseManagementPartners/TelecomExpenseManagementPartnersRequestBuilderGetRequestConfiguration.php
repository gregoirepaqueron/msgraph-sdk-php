<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TelecomExpenseManagementPartners;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TelecomExpenseManagementPartnersRequestBuilderGetRequestConfiguration 
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
     * @var TelecomExpenseManagementPartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TelecomExpenseManagementPartnersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new telecomExpenseManagementPartnersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TelecomExpenseManagementPartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TelecomExpenseManagementPartnersRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
