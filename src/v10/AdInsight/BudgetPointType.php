<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace BingAds\v10\AdInsight;


/**
     * Defines the possible values of a campaign budget point.
     * @link http://msdn.microsoft.com/en-us/library/mt219327(v=msads.100).aspx BudgetPointType Value Set
     *
     * @used-by BudgetPoint
     */
final class BudgetPointType
{
    /** The budget point includes the current budget. */
    const Current = 'Current';
    /** The budget point includes the optimal suggested budget. */
    const Suggested = 'Suggested';
    /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
    const Maximum = 'Maximum';
    /** The budget point includes a proposed budget other than current, maximum, or suggested. */
    const Other = 'Other';
}
