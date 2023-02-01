<?php

namespace Microsoft\Graph\Generated\Users\Item\Messages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphCopy\CopyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphCreateForward\CreateForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphCreateReply\CreateReplyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphCreateReplyAll\CreateReplyAllRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphForward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphMove\MoveRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphReply\ReplyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphReplyAll\ReplyAllRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MicrosoftGraphSend\SendRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\Value\ContentRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the messages property of the microsoft.graph.user entity.
*/
class MessageItemRequestBuilder 
{
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.message entity.
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.message entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copy method.
    */
    public function microsoftGraphCopy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createForward method.
    */
    public function microsoftGraphCreateForward(): CreateForwardRequestBuilder {
        return new CreateForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createReply method.
    */
    public function microsoftGraphCreateReply(): CreateReplyRequestBuilder {
        return new CreateReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createReplyAll method.
    */
    public function microsoftGraphCreateReplyAll(): CreateReplyAllRequestBuilder {
        return new CreateReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forward method.
    */
    public function microsoftGraphForward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the move method.
    */
    public function microsoftGraphMove(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reply method.
    */
    public function microsoftGraphReply(): ReplyRequestBuilder {
        return new ReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replyAll method.
    */
    public function microsoftGraphReplyAll(): ReplyAllRequestBuilder {
        return new ReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the send method.
    */
    public function microsoftGraphSend(): SendRequestBuilder {
        return new SendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.message entity.
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.message entity.
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.message entity.
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment%2Did'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $messageId key: id of message
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $messageId = null) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/messages/{message%2Did}{?%24select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['messageId'] = $messageId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete navigation property messages for users
     * @param MessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?MessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the extensions property of the microsoft.graph.message entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The messages in a mailbox or folder. Read-only. Nullable.
     * @param MessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?MessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Message::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.message entity.
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property messages in users
     * @param MessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Message $body, ?MessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Message::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.message entity.
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property messages for users
     * @param MessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The messages in a mailbox or folder. Read-only. Nullable.
     * @param MessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property messages in users
     * @param MessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Message $body, ?MessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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