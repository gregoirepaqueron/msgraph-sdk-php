<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationContextClassReferencesRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationContextClassReferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationContextClassReferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
}