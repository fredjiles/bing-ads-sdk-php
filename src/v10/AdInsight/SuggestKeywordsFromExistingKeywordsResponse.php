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
     * Suggests keywords that could perform better than the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219311(v=msads.100).aspx SuggestKeywordsFromExistingKeywords Response Object
     *
     * @uses KeywordSuggestion
     * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
     */
final class SuggestKeywordsFromExistingKeywordsResponse
{
    /**
     * An array of KeywordSuggestion data objects.
     * @var KeywordSuggestion[]
     */
    public $KeywordSuggestions;
}
