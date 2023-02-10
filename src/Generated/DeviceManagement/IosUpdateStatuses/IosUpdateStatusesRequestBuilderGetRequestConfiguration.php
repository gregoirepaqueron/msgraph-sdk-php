<?php

namespace Microsoft\Graph\Generated\DeviceManagement\IosUpdateStatuses;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IosUpdateStatusesRequestBuilderGetRequestConfiguration 
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
     * @var IosUpdateStatusesRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public IosUpdateStatusesRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new iosUpdateStatusesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return IosUpdateStatusesRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): IosUpdateStatusesRequestBuilderGetQueryParameters {
        return new IosUpdateStatusesRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

    /**
     * Instantiates a new iosUpdateStatusesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param IosUpdateStatusesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosUpdateStatusesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
