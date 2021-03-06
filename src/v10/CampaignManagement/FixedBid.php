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
     * Defines the monetary bid to use in the auction.
     * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.100).aspx FixedBid Data Object
     * 
     * @uses Bid
     */
final class FixedBid extends CriterionBid
{
    /**
     * The amount to bid in the auction.
     * @var Bid
     */
    public $Bid;
}
