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
     * Retrieves detailed information about the targets that are associated with the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
     */
final class GetTargetsByAdGroupIdsRequest
{
    /**
     * A list of identifiers of the ad groups that contain the targets that you want to get.
     * @var integer[]
     */
    public $AdGroupIds;
}
