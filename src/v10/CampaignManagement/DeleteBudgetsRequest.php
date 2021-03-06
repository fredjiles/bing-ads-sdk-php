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
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
final class DeleteBudgetsRequest
{
    /**
     * A maximum of 1,000 budget identifiers to delete from the account's shared budget library.
     * @var integer[]
     */
    public $BudgetIds;
}
