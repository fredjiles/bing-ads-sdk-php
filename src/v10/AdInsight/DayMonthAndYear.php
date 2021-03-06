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
     * Defines an object that you use to specify the start and end dates of a date range.
     * @link http://msdn.microsoft.com/en-us/library/mt219345(v=msads.100).aspx DayMonthAndYear Data Object
     *
     * @used-by AdGroupBidLandscape
     * @used-by HistoricalSearchCountPeriodic
     * @used-by KeywordBidLandscape
     * @used-by GetHistoricalSearchCountRequest
     */
final class DayMonthAndYear
{
    /**
     * The day of the month.
     * @var integer
     */
    public $Day;
    /**
     * The month specified as an integer value in the range of 1 through 12, where 1 is January and 12 is December.
     * @var integer
     */
    public $Month;
    /**
     * The year specified as a four-digit integer value.
     * @var integer
     */
    public $Year;
}
