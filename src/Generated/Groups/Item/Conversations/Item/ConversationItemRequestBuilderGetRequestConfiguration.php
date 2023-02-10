<?php

namespace Microsoft\Graph\Generated\Groups\Item\Conversations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConversationItemRequestBuilderGetRequestConfiguration 
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
     * @var ConversationItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public ConversationItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new ConversationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return ConversationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): ConversationItemRequestBuilderGetQueryParameters {
        return new ConversationItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new ConversationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ConversationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConversationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
