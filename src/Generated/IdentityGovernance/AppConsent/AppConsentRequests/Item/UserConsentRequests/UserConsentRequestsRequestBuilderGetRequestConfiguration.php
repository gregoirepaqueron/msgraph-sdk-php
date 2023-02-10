<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AppConsent\AppConsentRequests\Item\UserConsentRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserConsentRequestsRequestBuilderGetRequestConfiguration 
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
     * @var UserConsentRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserConsentRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new userConsentRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserConsentRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserConsentRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
