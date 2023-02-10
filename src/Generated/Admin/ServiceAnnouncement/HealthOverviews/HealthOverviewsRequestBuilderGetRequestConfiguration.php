<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\HealthOverviews;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HealthOverviewsRequestBuilderGetRequestConfiguration 
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
     * @var HealthOverviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HealthOverviewsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new healthOverviewsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param HealthOverviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HealthOverviewsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
