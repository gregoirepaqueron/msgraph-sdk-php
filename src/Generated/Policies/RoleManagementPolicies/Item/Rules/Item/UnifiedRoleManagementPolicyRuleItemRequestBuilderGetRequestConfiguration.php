<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnifiedRoleManagementPolicyRuleItemRequestBuilderGetRequestConfiguration 
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
     * @var UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyRuleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
