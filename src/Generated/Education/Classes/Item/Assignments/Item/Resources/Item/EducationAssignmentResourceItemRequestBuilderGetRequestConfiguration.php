<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EducationAssignmentResourceItemRequestBuilderGetRequestConfiguration 
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
     * @var EducationAssignmentResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EducationAssignmentResourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EducationAssignmentResourceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param EducationAssignmentResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EducationAssignmentResourceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
