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
     * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.100).aspx EditorialError Data Object
     * 
     * @used-by EditorialApiFaultDetail
     */
final class EditorialError extends BatchError
{
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $Appealable;
    /**
     * The text that caused the entity to be disapproved.
     * @var string
     */
    public $DisapprovedText;
    /**
     * The element or property of the entity that caused the entity to be disapproved.
     * @var string
     */
    public $Location;
    /**
     * The corresponding country or region for the flagged editorial issue.
     * @var string
     */
    public $PublisherCountry;
    /**
     * A numeric code that identifies the error.
     * @var integer
     */
    public $ReasonCode;
}
