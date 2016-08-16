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
     * Defines the possible compression types for the file to download.
     * @link http://msdn.microsoft.com/en-us/library/mt179363(v=msads.100).aspx CompressionType Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
final class CompressionType
{
    /** The file should be ZIP compressed. */
    const Zip = 'Zip';
    /** The file should be GZIP compressed. */
    const GZip = 'GZip';
}
