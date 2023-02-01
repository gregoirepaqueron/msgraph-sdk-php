<?php

namespace Microsoft\Graph\Generated\Groups\Item\CalendarView\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\InstancesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphAccept\AcceptRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphCancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphDecline\DeclineRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphDismissReminder\DismissReminderRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphForward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphSnoozeReminder\SnoozeReminderRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MicrosoftGraphTentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Event;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the calendarView property of the microsoft.graph.group entity.
*/
class EventItemRequestBuilder 
{
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.event entity.
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.event entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.event entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the instances property of the microsoft.graph.event entity.
    */
    public function instances(): InstancesRequestBuilder {
        return new InstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accept method.
    */
    public function microsoftGraphAccept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function microsoftGraphCancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decline method.
    */
    public function microsoftGraphDecline(): DeclineRequestBuilder {
        return new DeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismissReminder method.
    */
    public function microsoftGraphDismissReminder(): DismissReminderRequestBuilder {
        return new DismissReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forward method.
    */
    public function microsoftGraphForward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the snoozeReminder method.
    */
    public function microsoftGraphSnoozeReminder(): SnoozeReminderRequestBuilder {
        return new SnoozeReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tentativelyAccept method.
    */
    public function microsoftGraphTentativelyAccept(): TentativelyAcceptRequestBuilder {
        return new TentativelyAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.event entity.
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
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.event entity.
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment%2Did'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EventItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $eventId key: id of event
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $eventId = null) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/calendarView/{event%2Did}{?startDateTime*,endDateTime*,%24select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['eventId'] = $eventId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Provides operations to manage the extensions property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The calendar view for the calendar. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Event::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the instances property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\Item\EventItemRequestBuilder
    */
    public function instancesById(string $id): \Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The calendar view for the calendar. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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