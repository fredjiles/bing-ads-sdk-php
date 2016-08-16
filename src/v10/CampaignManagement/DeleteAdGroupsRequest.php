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
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
final class DeleteAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be deleted.
     * @var integer
     */
    public $CampaignId;
    /**
     * A maximum of 1,000 ad group identifiers to delete.
     * @var integer[]
     */
    public $AdGroupIds;
}
