<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace BingAds\v10\CampaignManagement;


/**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
final class GetMediaMetaDataByIdsRequest
{
    /**
     * The identifiers of the media to get.
     * @var integer[]
     */
    public $MediaIds;
}
