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
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219300(v=msads.100).aspx GetEstimatedPositionByKeywordIds Response Object
     *
     * @uses KeywordIdEstimatedPosition
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywordIds
     */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * A list of KeywordIdEstimatedPosition data objects.
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
