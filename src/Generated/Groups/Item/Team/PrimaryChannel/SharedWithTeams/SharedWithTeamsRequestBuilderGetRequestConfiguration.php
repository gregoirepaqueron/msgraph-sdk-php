<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\PrimaryChannel\SharedWithTeams;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharedWithTeamsRequestBuilderGetRequestConfiguration 
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
     * @var SharedWithTeamsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharedWithTeamsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new sharedWithTeamsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SharedWithTeamsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharedWithTeamsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
