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
     * Defines the possible types of ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.100).aspx CriterionType Value Set
     * 
     * @used-by AddAdGroupCriterionsRequest
     * @used-by DeleteAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by UpdateAdGroupCriterionsRequest
     */
final class CriterionType
{
    /** The ad group criterion represents a Bing Shopping product partition. */
    const ProductPartition = 'ProductPartition';
}
