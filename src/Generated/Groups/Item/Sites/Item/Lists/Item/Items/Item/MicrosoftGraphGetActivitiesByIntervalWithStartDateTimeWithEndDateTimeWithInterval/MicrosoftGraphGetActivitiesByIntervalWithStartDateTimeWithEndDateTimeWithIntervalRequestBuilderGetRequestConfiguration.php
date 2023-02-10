<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\Item\Items\Item\MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new microsoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
