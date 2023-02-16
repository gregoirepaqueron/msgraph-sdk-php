<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ApplePushNotificationCertificate;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplePushNotificationCertificateRequestBuilderGetRequestConfiguration 
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
     * @var ApplePushNotificationCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplePushNotificationCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new applePushNotificationCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplePushNotificationCertificateRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ApplePushNotificationCertificateRequestBuilderGetQueryParameters {
        return new ApplePushNotificationCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new applePushNotificationCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ApplePushNotificationCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplePushNotificationCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
