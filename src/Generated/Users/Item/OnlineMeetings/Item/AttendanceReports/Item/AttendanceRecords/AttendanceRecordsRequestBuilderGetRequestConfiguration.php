<?php

namespace Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\AttendanceReports\Item\AttendanceRecords;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttendanceRecordsRequestBuilderGetRequestConfiguration 
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
     * @var AttendanceRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttendanceRecordsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new attendanceRecordsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AttendanceRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttendanceRecordsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
