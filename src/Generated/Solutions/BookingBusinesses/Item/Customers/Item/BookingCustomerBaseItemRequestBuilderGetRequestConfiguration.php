<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookingCustomerBaseItemRequestBuilderGetRequestConfiguration 
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
     * @var BookingCustomerBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookingCustomerBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookingCustomerBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param BookingCustomerBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookingCustomerBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
