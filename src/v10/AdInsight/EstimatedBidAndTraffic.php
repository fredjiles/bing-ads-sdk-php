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
     * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the corresponding keyword or ad group given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219348(v=msads.100).aspx EstimatedBidAndTraffic Data Object
     *
     * @uses Currency
     * @uses MatchType
     * @used-by KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordsResponse
     */
final class EstimatedBidAndTraffic
{
    /**
     * The estimated minimum number of clicks per week.
     * @var double
     */
    public $MinClicksPerWeek;
    /**
     * The estimated maximum number of clicks per week.
     * @var double
     */
    public $MaxClicksPerWeek;
    /**
     * The estimated average CPC.
     * @var double
     */
    public $AverageCPC;
    /**
     * The estimated minimum number of impressions per week.
     * @var integer
     */
    public $MinImpressionsPerWeek;
    /**
     * The estimated maximum number of impressions per week.
     * @var integer
     */
    public $MaxImpressionsPerWeek;
    /**
     * The estimated CTR.
     * @var double
     */
    public $CTR;
    /**
     * The estimated minimum cost per week.
     * @var double
     */
    public $MinTotalCostPerWeek;
    /**
     * The estimated maximum cost per week.
     * @var double
     */
    public $MaxTotalCostPerWeek;
    /**
     * The monetary unit of the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;
    /**
     * The match type used to determine the estimates.
     * @var MatchType
     */
    public $MatchType;
    /**
     * The suggested bid value.
     * @var double
     */
    public $EstimatedMinBid;
}
