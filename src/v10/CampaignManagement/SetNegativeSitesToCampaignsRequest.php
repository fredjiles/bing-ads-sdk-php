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
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Request Object
     * 
     * @uses CampaignNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
final class SetNegativeSitesToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var integer
     */
    public $AccountId;
    /**
     * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}
