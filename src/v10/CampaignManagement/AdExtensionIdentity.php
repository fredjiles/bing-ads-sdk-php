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
     * Defines an object that identifies an ad extension revision.
     * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.100).aspx AdExtensionIdentity Data Object
     * 
     * @used-by AddAdExtensionsResponse
     */
final class AdExtensionIdentity
{
    /**
     * The system-generated identifier of the ad extension.
     * @var integer
     */
    public $Id;
    /**
     * The number of times the contents of the ad extension has been updated.
     * @var integer
     */
    public $Version;
}
