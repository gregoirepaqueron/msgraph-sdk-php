<?php

namespace Microsoft\Graph\Generated\Education\Me\Rubrics\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EducationRubricItemRequestBuilderGetRequestConfiguration 
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
     * @var EducationRubricItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public EducationRubricItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new EducationRubricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EducationRubricItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): EducationRubricItemRequestBuilderGetQueryParameters {
        return new EducationRubricItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new EducationRubricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param EducationRubricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EducationRubricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
