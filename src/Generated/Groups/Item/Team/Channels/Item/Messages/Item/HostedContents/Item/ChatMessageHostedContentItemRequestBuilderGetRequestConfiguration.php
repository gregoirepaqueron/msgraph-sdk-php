<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Channels\Item\Messages\Item\HostedContents\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChatMessageHostedContentItemRequestBuilderGetRequestConfiguration 
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
     * @var ChatMessageHostedContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChatMessageHostedContentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChatMessageHostedContentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ChatMessageHostedContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChatMessageHostedContentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
