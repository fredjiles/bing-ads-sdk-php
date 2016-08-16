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
     * Defines an object that contains a keyword category and a confidence score.
     * @link http://msdn.microsoft.com/en-us/library/mt219331(v=msads.100).aspx KeywordCategory Data Object
     *
     * @used-by KeywordCategoryResult
     */
final class KeywordCategory
{
    /**
     * The keyword category that the keyword might belong to.
     * @var string
     */
    public $Category;
    /**
     * A score from 0.
     * @var double
     */
    public $ConfidenceScore;
}