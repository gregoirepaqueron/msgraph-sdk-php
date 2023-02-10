<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\Terms\Item\Children\Item\Relations\Item\FromTerm;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FromTermRequestBuilderGetRequestConfiguration 
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
     * @var FromTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FromTermRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new fromTermRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param FromTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FromTermRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
