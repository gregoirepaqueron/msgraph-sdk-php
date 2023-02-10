<?php

namespace Microsoft\Graph\Generated\Privacy\SubjectRightsRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubjectRightsRequestsRequestBuilderGetRequestConfiguration 
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
     * @var SubjectRightsRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubjectRightsRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new subjectRightsRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SubjectRightsRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubjectRightsRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
