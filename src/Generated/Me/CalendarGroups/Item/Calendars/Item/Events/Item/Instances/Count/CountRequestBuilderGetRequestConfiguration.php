<?php

namespace Microsoft\Graph\Generated\Me\CalendarGroups\Item\Calendars\Item\Events\Item\Instances\Count;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CountRequestBuilderGetRequestConfiguration 
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
     * @var CountRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public CountRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters.
     * @param string|null $filter Filter items by property values
     * @return CountRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?string $filter = null): CountRequestBuilderGetQueryParameters {
        return new CountRequestBuilderGetQueryParameters($filter);
    }

    /**
     * Instantiates a new CountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CountRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
