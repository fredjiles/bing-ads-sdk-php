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
     * Gets the age and gender of users who have searched for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219307(v=msads.100).aspx GetKeywordDemographics Request Object
     *
     * @used-by BingAdsAdInsightService::GetKeywordDemographics
     */
final class GetKeywordDemographicsRequest
{
    /**
     * An array of keywords for which you want to get demographics data.
     * @var string[]
     */
    public $Keywords;
    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;
    /**
     * The country code of the country/region to use as the source of the demographics data.
     * @var string
     */
    public $PublisherCountry;
    /**
     * A list of one or more of the following device types: Computers, NonSmartphones, Smartphones, Tablets.
     * @var string[]
     */
    public $Device;
}