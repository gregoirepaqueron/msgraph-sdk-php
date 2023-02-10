<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServiceAnnouncementAttachmentItemRequestBuilderGetRequestConfiguration 
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
     * @var ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters $queryParameters Request query parameters
    */
    public ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters $queryParameters;
    
    /**
     * Instantiates a new ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters {
        return new ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ServiceAnnouncementAttachmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServiceAnnouncementAttachmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
