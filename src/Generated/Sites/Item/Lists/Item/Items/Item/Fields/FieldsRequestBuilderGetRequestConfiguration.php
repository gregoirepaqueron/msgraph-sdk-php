<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item\Fields;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FieldsRequestBuilderGetRequestConfiguration 
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
     * @var FieldsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FieldsRequestBuilderGetQueryParameters $queryParameters = null;
    
}