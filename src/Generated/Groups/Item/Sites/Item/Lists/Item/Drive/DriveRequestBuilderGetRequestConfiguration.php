<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\Item\Drive;

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
    
    /**
     * Instantiates a new driveRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DriveRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
