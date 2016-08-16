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
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
final class DeleteCampaignCriterionsRequest
{
    /**
     * A list of unique system identifiers corresponding to the campaign criterions that you want to delete.
     * @var integer[]
     */
    public $CampaignCriterionIds;
    /**
     * The type of campaign criterion, for example ProductScope.
     * @var CampaignCriterionType
     */
    public $CriterionType;
}