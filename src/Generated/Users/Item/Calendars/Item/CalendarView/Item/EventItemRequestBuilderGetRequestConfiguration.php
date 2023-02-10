<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventItemRequestBuilderGetRequestConfiguration 
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
     * @var EventItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public EventItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new EventItemRequestBuilderGetQueryParameters.
     * @param string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param array<string>|null $select Select properties to be returned
     * @param string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @return EventItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?string $endDateTime = null, ?array $select = null, ?string $startDateTime = null): EventItemRequestBuilderGetQueryParameters {
        return new EventItemRequestBuilderGetQueryParameters($endDateTime, $select, $startDateTime);
    }

    /**
     * Instantiates a new EventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param EventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
