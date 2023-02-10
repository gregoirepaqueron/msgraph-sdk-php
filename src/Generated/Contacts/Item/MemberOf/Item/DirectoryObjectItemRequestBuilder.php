<?php

namespace Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphApplication\MicrosoftGraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphDevice\MicrosoftGraphDeviceRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphGroup\MicrosoftGraphGroupRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphOrgContact\MicrosoftGraphOrgContactRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphServicePrincipal\MicrosoftGraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\MicrosoftGraphUser\MicrosoftGraphUserRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Promise;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the memberOf property of the microsoft.graph.orgContact entity.
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to application.
    */
    public function microsoftGraphApplication(): MicrosoftGraphApplicationRequestBuilder {
        return new MicrosoftGraphApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function microsoftGraphDevice(): MicrosoftGraphDeviceRequestBuilder {
        return new MicrosoftGraphDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function microsoftGraphGroup(): MicrosoftGraphGroupRequestBuilder {
        return new MicrosoftGraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function microsoftGraphOrgContact(): MicrosoftGraphOrgContactRequestBuilder {
        return new MicrosoftGraphOrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): MicrosoftGraphServicePrincipalRequestBuilder {
        return new MicrosoftGraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): MicrosoftGraphUserRequestBuilder {
        return new MicrosoftGraphUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/contacts/{orgContact%2Did}/memberOf/{directoryObject%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get memberOf from contacts
     * @param DirectoryObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DirectoryObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): ?Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Promise::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get memberOf from contacts
     * @param DirectoryObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoryObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
