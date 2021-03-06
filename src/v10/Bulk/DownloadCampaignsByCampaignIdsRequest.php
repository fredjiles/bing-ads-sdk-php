<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace BingAds\v10\Bulk;


/**
     * Downloads the specified campaigns' data.
     * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.100).aspx DownloadCampaignsByCampaignIds Request Object
     * 
     * @uses CampaignScope
     * @uses CompressionType
     * @uses DataScope
     * @uses DownloadFileType
     * @uses BulkDownloadEntity
     * @uses PerformanceStatsDateRange
     * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
     */
final class DownloadCampaignsByCampaignIdsRequest
{
    /**
     * The campaigns to download.
     * @var CampaignScope[]
     */
    public $Campaigns;
    /**
     * The compression type of the download file.
     * @var CompressionType
     */
    public $CompressionType;
    /**
     * You may include performance data such as spend, in addition to entity data such as campaign settings.
     * @var DataScope
     */
    public $DataScope;
    /**
     * The format of the download file.
     * @var DownloadFileType
     */
    public $DownloadFileType;
    /**
     * The entities to include in the download.
     * @var BulkDownloadEntity
     */
    public $Entities;
    /**
     * The format for records of the download file.
     * @var string
     */
    public $FormatVersion;
    /**
     * The last time that you requested a download.
     * @var \DateTime
     */
    public $LastSyncTimeInUTC;
    /**
     * Defines the start and end date when downloading performance data.
     * @var PerformanceStatsDateRange
     */
    public $PerformanceStatsDateRange;
}
