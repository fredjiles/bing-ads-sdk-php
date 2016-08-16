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
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
final class DeleteBudgetsResponse
{
    /**
     * An array of BatchError objects that contain details for any request items that were not successful.
     * @var BatchError[]
     */
    public $PartialErrors;
}