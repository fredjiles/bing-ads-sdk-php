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
     * Defines a key performance index object for a keyword.
     * @link http://msdn.microsoft.com/en-us/library/mt219293(v=msads.100).aspx KeywordKPI Data Object
     *
     * @uses MatchType
     * @uses AdPosition
     * @used-by KeywordHistoricalPerformance
     */
final class KeywordKPI
{
    /**
     * The device where the ad appeared.
     * @var string
     */
    public $Device;
    /**
     * The match type that you specified in the request.
     * @var MatchType
     */
    public $MatchType;
    /**
     * The position in the search results in which the ad appeared.
     * @var AdPosition
     */
    public $AdPosition;
    /**
     * The number of clicks that the keyword and match type generated during the specified time interval.
     * @var integer
     */
    public $Clicks;
    /**
     * The number of impressions that the keyword and match type generated during the specified time interval.
     * @var integer
     */
    public $Impressions;
    /**
     * The average cost per click (CPC).
     * @var double
     */
    public $AverageCPC;
    /**
     * The click-through rate (CTR) as a percentage.
     * @var double
     */
    public $CTR;
    /**
     * The cost of using the specified keyword and match type during the specified time interval.
     * @var double
     */
    public $TotalCost;
    /**
     * The average bid of the keyword.
     * @var double
     */
    public $AverageBid;
}
