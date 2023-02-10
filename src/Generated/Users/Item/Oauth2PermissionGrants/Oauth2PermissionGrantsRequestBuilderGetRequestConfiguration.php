<?php

namespace Microsoft\Graph\Generated\Users\Item\Oauth2PermissionGrants;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Oauth2PermissionGrantsRequestBuilderGetRequestConfiguration 
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
     * @var Oauth2PermissionGrantsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Oauth2PermissionGrantsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new oauth2PermissionGrantsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param Oauth2PermissionGrantsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Oauth2PermissionGrantsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
