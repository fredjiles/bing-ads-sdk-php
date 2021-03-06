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
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
final class AddSitePlacementsResponse
{
    /**
     * The identifiers of the website placement bids that were added.
     * @var integer[]
     */
    public $SitePlacementIds;
}
