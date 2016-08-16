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
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179361(v=msads.100).aspx CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     * @used-by Sitelink2AdExtension
     */
final class CustomParameters
{
    /**
     * The collection of key and value custom parameters for URL tracking.
     * @var CustomParameter[]
     */
    public $Parameters;
}
