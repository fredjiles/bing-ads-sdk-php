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
     * Defines a postal address.
     * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.100).aspx Address Data Object
     * 
     * @used-by LocationAdExtension
     */
final class Address
{
    /**
     * The name of the city where the street address is located.
     * @var string
     */
    public $CityName;
    /**
     * The country where the street address is located.
     * @var string
     */
    public $CountryCode;
    /**
     * The postal or zip code.
     * @var string
     */
    public $PostalCode;
    /**
     * A code that identifies the state or province where the street address is located.
     * @var string
     */
    public $ProvinceCode;
    /**
     * The name of the state or province where the street address is located.
     * @var string
     */
    public $ProvinceName;
    /**
     * The first line of the address.
     * @var string
     */
    public $StreetAddress;
    /**
     * The second line of the address.
     * @var string
     */
    public $StreetAddress2;
}
