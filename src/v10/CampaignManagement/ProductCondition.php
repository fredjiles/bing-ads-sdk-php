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
     * Defines a condition that determines whether a product is selected from a customer's Bing Merchant Center catalog file.
     * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.100).aspx ProductCondition Data Object
     * 
     * @used-by ProductPartition
     * @used-by ProductScope
     */
final class ProductCondition
{
    /**
     * The condition's attribute value.
     * @var string
     */
    public $Attribute;
    /**
     * The condition's operand.
     * @var string
     */
    public $Operand;
}
