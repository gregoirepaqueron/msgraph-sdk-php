<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\MicrosoftGraphAdd\MicrosoftGraphAddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\MicrosoftGraphAddFormulaLocal\MicrosoftGraphAddFormulaLocalRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookNamedItem;
use Microsoft\Graph\Generated\Models\WorkbookNamedItemCollectionResponse;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the names property of the microsoft.graph.workbook entity.
*/
class NamesRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the add method.
    */
    public function microsoftGraphAdd(): MicrosoftGraphAddRequestBuilder {
        return new MicrosoftGraphAddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addFormulaLocal method.
    */
    public function microsoftGraphAddFormulaLocal(): MicrosoftGraphAddFormulaLocalRequestBuilder {
        return new MicrosoftGraphAddFormulaLocalRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new NamesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/names{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of nameditem objects.
     * @param NamesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/nameditem-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?NamesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookNamedItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to names for drives
     * @param WorkbookNamedItem $body The request body
     * @param NamesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(WorkbookNamedItem $body, ?NamesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookNamedItem::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a list of nameditem objects.
     * @param NamesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NamesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to names for drives
     * @param WorkbookNamedItem $body The request body
     * @param NamesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkbookNamedItem $body, ?NamesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
