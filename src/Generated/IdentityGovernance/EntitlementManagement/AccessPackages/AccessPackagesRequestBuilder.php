<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\MicrosoftGraphFilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackage;
use Microsoft\Graph\Generated\Models\AccessPackageCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the accessPackages property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackagesRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new AccessPackagesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/accessPackages{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Retrieve a list of accessPackage objects.  The resulting list includes all the access packages that the caller has access to read, across all catalogs.
     * @param AccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/entitlementmanagement-list-accesspackages?view=graph-rest-1.0 Find more info here
    */
    public function get(?AccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the filterByCurrentUser method.
     * @param string $on Usage: on='{on}'
     * @return FilterByCurrentUserWithOnRequestBuilder
    */
    public function microsoftGraphFilterByCurrentUserWithOn(string $on): FilterByCurrentUserWithOnRequestBuilder {
        return new FilterByCurrentUserWithOnRequestBuilder($this->pathParameters, $this->requestAdapter, $on);
    }

    /**
     * Create a new accessPackage object. The access package will be added to an existing accessPackageCatalog.
     * @param AccessPackagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/entitlementmanagement-post-accesspackages?view=graph-rest-1.0 Find more info here
    */
    public function post(AccessPackage $body, ?AccessPackagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a list of accessPackage objects.  The resulting list includes all the access packages that the caller has access to read, across all catalogs.
     * @param AccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new accessPackage object. The access package will be added to an existing accessPackageCatalog.
     * @param AccessPackagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackage $body, ?AccessPackagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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