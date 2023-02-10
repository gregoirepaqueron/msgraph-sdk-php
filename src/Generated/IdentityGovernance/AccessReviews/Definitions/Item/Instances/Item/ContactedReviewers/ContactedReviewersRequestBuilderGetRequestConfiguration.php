<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\ContactedReviewers;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactedReviewersRequestBuilderGetRequestConfiguration 
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
     * @var ContactedReviewersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactedReviewersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new contactedReviewersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ContactedReviewersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactedReviewersRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
