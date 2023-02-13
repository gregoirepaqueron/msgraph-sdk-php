<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration 
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
     * @var DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
