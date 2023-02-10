<?php

namespace Microsoft\Graph\Generated\Planner\Tasks\Item\AssignedToTaskBoardFormat;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignedToTaskBoardFormatRequestBuilderGetRequestConfiguration 
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
     * @var AssignedToTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignedToTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new assignedToTaskBoardFormatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AssignedToTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignedToTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
