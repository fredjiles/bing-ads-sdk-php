<?php

namespace BingAds\v9\Reporting;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913139(v=msads.90).aspx ProductDimensionPerformanceReportFilter Data Object
 *
 * @uses DeviceTypeReportFilter
 * @used-by ProductDimensionPerformanceReportRequest
 */
final class ProductDimensionPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
}
