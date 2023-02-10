<?php

namespace Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NotificationMessageTemplatesRequestBuilderGetRequestConfiguration 
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
     * @var NotificationMessageTemplatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NotificationMessageTemplatesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new notificationMessageTemplatesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param NotificationMessageTemplatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NotificationMessageTemplatesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
