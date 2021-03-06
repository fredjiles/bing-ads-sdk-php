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
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
final class GetMediaByIdsRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var integer
     */
    public $AccountId;
    /**
     * The identifiers of the media to get.
     * @var integer[]
     */
    public $MediaIds;
}
