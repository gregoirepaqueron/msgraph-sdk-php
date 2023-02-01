<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedGroups\AllowedGroupsRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedGroups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedUsers\AllowedUsersRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\AllowedUsers\Item\UserItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\Printer\PrinterRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrinterShare;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the shares property of the microsoft.graph.print entity.
*/
class PrinterShareItemRequestBuilder 
{
    /**
     * Provides operations to manage the allowedGroups property of the microsoft.graph.printerShare entity.
    */
    public function allowedGroups(): AllowedGroupsRequestBuilder {
        return new AllowedGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the allowedUsers property of the microsoft.graph.printerShare entity.
    */
    public function allowedUsers(): AllowedUsersRequestBuilder {
        return new AllowedUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the printer property of the microsoft.graph.printerShare entity.
    */
    public function printer(): PrinterRequestBuilder {
        return new PrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Gets an item from the Microsoft/Graph/Generated.print.shares.item.allowedGroups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function allowedGroupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.print.shares.item.allowedUsers.item collection
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function allowedUsersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PrinterShareItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $printerShareId key: id of printerShare
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $printerShareId = null) {
        $this->urlTemplate = '{+baseurl}/print/shares/{printerShare%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['printerShareId'] = $printerShareId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete navigation property shares for print
     * @param PrinterShareItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?PrinterShareItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The list of printer shares registered in the tenant.
     * @param PrinterShareItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PrinterShareItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrinterShare::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property shares in print
     * @param PrinterShareItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(PrinterShare $body, ?PrinterShareItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrinterShare::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property shares for print
     * @param PrinterShareItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PrinterShareItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The list of printer shares registered in the tenant.
     * @param PrinterShareItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrinterShareItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property shares in print
     * @param PrinterShareItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PrinterShare $body, ?PrinterShareItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}