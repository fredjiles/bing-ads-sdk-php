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
     * Defines a specific geographical radius target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.100).aspx RadiusTargetBid Data Object
     * 
     * @uses DistanceUnit
     * @used-by RadiusTarget
     */
final class RadiusTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
     * @var integer
     */
    public $BidAdjustment;
    /**
     * Reserved for future use.
     * @var integer
     */
    public $Id;
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $IsExcluded;
    /**
     * The latitude, in degrees, of the target location.
     * @var double
     */
    public $LatitudeDegrees;
    /**
     * The longitude, in degrees, of the target location.
     * @var double
     */
    public $LongitudeDegrees;
    /**
     * The name of the geographical location being targeted.
     * @var string
     */
    public $Name;
    /**
     * The radius that specifies the area surrounding the geographical location to target.
     * @var double
     */
    public $Radius;
    /**
     * The unit of measurement for the specified radius, for example kilometers or miles.
     * @var DistanceUnit
     */
    public $RadiusUnit;
}