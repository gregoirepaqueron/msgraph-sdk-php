<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetRequestConfiguration 
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
     * @var WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters {
        return new WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
