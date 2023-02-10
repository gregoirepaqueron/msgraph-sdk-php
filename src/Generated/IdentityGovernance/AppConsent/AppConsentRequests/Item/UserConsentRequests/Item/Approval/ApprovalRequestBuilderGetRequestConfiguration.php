<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AppConsent\AppConsentRequests\Item\UserConsentRequests\Item\Approval;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApprovalRequestBuilderGetRequestConfiguration 
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
     * @var ApprovalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApprovalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new approvalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ApprovalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApprovalRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
