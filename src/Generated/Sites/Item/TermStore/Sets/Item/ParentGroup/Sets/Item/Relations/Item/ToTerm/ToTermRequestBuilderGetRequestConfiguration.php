<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore\Sets\Item\ParentGroup\Sets\Item\Relations\Item\ToTerm;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ToTermRequestBuilderGetRequestConfiguration 
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
     * @var ToTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ToTermRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new toTermRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ToTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ToTermRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
