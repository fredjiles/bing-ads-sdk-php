<?php

namespace BingAds\v9\Reporting;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913141(v=msads.90).aspx ProductDimensionPerformanceReportRequest Data Object
 *
 * @uses ReportAggregation
 * @uses ProductDimensionPerformanceReportColumn
 * @uses ProductDimensionPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class ProductDimensionPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data.
     *
     * @var ReportAggregation
     */
    public $Aggregation;
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var ProductDimensionPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var ProductDimensionPerformanceReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
