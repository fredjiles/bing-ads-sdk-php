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
     * Defines a list of optional AdGroup elements that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709095(v=msads.100).aspx AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
final class AdGroupAdditionalField
{
    /** Includes the BiddingScheme element in the AdGroup object. */
    const BiddingScheme = 'BiddingScheme';
    /** Includes the RemarketingTargetingSetting element in the AdGroup object. */
    const RemarketingTargetingSetting = 'RemarketingTargetingSetting';
}
