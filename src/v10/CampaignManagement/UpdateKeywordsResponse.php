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
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
final class UpdateKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any request items that were not successful.
     * @var BatchError[]
     */
    public $PartialErrors;
}
