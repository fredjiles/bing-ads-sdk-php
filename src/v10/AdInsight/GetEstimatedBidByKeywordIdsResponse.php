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
     * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219291(v=msads.100).aspx GetEstimatedBidByKeywordIds Response Object
     *
     * @uses KeywordIdEstimatedBid
     * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywordIds
     */
final class GetEstimatedBidByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedBid data objects.
     * @var KeywordIdEstimatedBid[]
     */
    public $KeywordEstimatedBids;
}