<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\AttachmentSessions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttachmentSessionItemRequestBuilderGetRequestConfiguration 
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
     * @var AttachmentSessionItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public AttachmentSessionItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new AttachmentSessionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return AttachmentSessionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): AttachmentSessionItemRequestBuilderGetQueryParameters {
        return new AttachmentSessionItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new AttachmentSessionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AttachmentSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttachmentSessionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
