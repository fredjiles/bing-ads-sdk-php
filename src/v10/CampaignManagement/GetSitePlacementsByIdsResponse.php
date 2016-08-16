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
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
final class GetSitePlacementsByIdsResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}