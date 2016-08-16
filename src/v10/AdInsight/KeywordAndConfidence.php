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
     * Defines an object that contains a suggested keyword and a confidence score.
     * @link http://msdn.microsoft.com/en-us/library/mt219341(v=msads.100).aspx KeywordAndConfidence Data Object
     *
     * @used-by KeywordSuggestion
     * @used-by SuggestKeywordsForUrlResponse
     */
final class KeywordAndConfidence
{
    /**
     * The suggested keyword.
     * @var string
     */
    public $SuggestedKeyword;
    /**
     * A score from 0.
     * @var double
     */
    public $ConfidenceScore;
}