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
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
final class UpdateAdGroupsRequest
{
    /**
     * The identifier of the campaign that owns the ad groups to update.
     * @var integer
     */
    public $CampaignId;
    /**
     * An array that can contain a maximum of 1,000 AdGroup objects to update.
     * @var AdGroup[]
     */
    public $AdGroups;
    /**
     * Determines whether or not the service should use the NativeBidAdjustment element of each specified AdGroup during update.
     * @var boolean
     */
    public $UpdateNativeBidAdjustment;
}
