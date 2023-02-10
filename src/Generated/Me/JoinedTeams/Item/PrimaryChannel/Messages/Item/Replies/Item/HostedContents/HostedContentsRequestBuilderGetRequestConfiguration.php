<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\PrimaryChannel\Messages\Item\Replies\Item\HostedContents;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HostedContentsRequestBuilderGetRequestConfiguration 
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
     * @var HostedContentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HostedContentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new hostedContentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param HostedContentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HostedContentsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
