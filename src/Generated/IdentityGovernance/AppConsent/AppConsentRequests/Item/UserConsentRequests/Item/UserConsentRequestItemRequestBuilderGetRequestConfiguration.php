<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AppConsent\AppConsentRequests\Item\UserConsentRequests\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserConsentRequestItemRequestBuilderGetRequestConfiguration 
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
     * @var UserConsentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserConsentRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserConsentRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserConsentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserConsentRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
