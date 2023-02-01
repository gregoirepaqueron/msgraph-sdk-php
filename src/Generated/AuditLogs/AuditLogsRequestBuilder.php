<?php

namespace Microsoft\Graph\Generated\AuditLogs;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\DirectoryAuditsRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\Item\DirectoryAuditItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\Item\ProvisioningObjectSummaryItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\ProvisioningRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\SignIns\Item\SignInItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\SignIns\SignInsRequestBuilder;
use Microsoft\Graph\Generated\Models\AuditLogRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the auditLogRoot singleton.
*/
class AuditLogsRequestBuilder 
{
    /**
     * Provides operations to manage the directoryAudits property of the microsoft.graph.auditLogRoot entity.
    */
    public function directoryAudits(): DirectoryAuditsRequestBuilder {
        return new DirectoryAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
    */
    public function provisioning(): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the signIns property of the microsoft.graph.auditLogRoot entity.
    */
    public function signIns(): SignInsRequestBuilder {
        return new SignInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new AuditLogsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/auditLogs{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the directoryAudits property of the microsoft.graph.auditLogRoot entity.
     * @param string $id Unique identifier of the item
     * @return DirectoryAuditItemRequestBuilder
    */
    public function directoryAuditsById(string $id): DirectoryAuditItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryAudit%2Did'] = $id;
        return new DirectoryAuditItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update auditLogs
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
     * @param string $id Unique identifier of the item
     * @return ProvisioningObjectSummaryItemRequestBuilder
    */
    public function provisioningById(string $id): ProvisioningObjectSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['provisioningObjectSummary%2Did'] = $id;
        return new ProvisioningObjectSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the signIns property of the microsoft.graph.auditLogRoot entity.
     * @param string $id Unique identifier of the item
     * @return SignInItemRequestBuilder
    */
    public function signInsById(string $id): SignInItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['signIn%2Did'] = $id;
        return new SignInItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update auditLogs
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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