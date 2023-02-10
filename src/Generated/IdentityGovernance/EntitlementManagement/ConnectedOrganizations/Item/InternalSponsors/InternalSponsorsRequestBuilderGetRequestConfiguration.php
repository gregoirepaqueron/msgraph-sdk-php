<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InternalSponsorsRequestBuilderGetRequestConfiguration 
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
     * @var InternalSponsorsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InternalSponsorsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new internalSponsorsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InternalSponsorsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InternalSponsorsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
