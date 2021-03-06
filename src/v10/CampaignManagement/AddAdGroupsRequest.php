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
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
final class AddAdGroupsRequest
{
    /**
     * The identifier of the campaign to add the ad groups to.
     * @var integer
     */
    public $CampaignId;
    /**
     * An array of AdGroup objects to add to the specified campaign.
     * @var AdGroup[]
     */
    public $AdGroups;
}
