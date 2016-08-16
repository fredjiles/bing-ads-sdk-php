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
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
final class GetAdGroupsByIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     * @var integer
     */
    public $CampaignId;
    /**
     * A maximum of 1,000 identifiers of the ad groups to get.
     * @var integer[]
     */
    public $AdGroupIds;
    /**
     * The list of additional elements that you want included within each returned AdGroup object.
     * @var AdGroupAdditionalField
     */
    public $ReturnAdditionalFields;
}
