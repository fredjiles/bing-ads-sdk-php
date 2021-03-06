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
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.100).aspx AdRotation Data Object
     * 
     * @uses AdRotationType
     * @used-by AdGroup
     */
final class AdRotation
{
    /**
     * Reserved for future use only.
     * @var \DateTime
     */
    public $EndDate;
    /**
     * Reserved for future use only.
     * @var \DateTime
     */
    public $StartDate;
    /**
     * The type of ad rotation to apply to the ad group.
     * @var AdRotationType
     */
    public $Type;
}
