<?php

namespace Microsoft\Graph\Generated\Invitations\Item\InvitedUser;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitedUserRequestBuilderGetRequestConfiguration 
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
     * @var InvitedUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitedUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new invitedUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InvitedUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvitedUserRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
