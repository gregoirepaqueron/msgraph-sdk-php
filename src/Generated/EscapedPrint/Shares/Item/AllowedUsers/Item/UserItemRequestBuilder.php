<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedUsers\Item;

use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedUsers\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /print/shares/{printerShare-id}/allowedUsers/{user-id}
*/
class UserItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of print entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new UserItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $userId key: id of user
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $userId = null) {
        $this->urlTemplate = '{+baseurl}/print/shares/{printerShare%2Did}/allowedUsers/{user%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['userId'] = $userId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
