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
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.100).aspx AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
final class AdRotationType
{
    /** Favor the best performing ads. */
    const OptimizeForClicks = 'OptimizeForClicks';
    /** Rotate ads evenly into the auction. */
    const RotateAdsEvenly = 'RotateAdsEvenly';
}