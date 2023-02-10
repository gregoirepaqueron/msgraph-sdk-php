<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessReviewInstanceItemRequestBuilderGetRequestConfiguration 
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
     * @var AccessReviewInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessReviewInstanceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewInstanceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AccessReviewInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewInstanceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
