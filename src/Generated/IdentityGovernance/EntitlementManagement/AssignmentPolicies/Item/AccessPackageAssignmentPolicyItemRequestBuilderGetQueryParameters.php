<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
*/
class AccessPackageAssignmentPolicyItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AccessPackageAssignmentPolicyItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
