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
     * Adds one or more website placement bids to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
final class AddSitePlacementsRequest
{
    /**
     * The identifier of the ad group to add the site placement bids to.
     * @var integer
     */
    public $AdGroupId;
    /**
     * An array of SitePlacement objects that contains the site placement bids to add.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}