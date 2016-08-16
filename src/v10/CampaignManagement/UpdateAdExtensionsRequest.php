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
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
final class UpdateAdExtensionsRequest
{
    /**
     * The identifier of the account which contains the extensions.
     * @var integer
     */
    public $AccountId;
    /**
     * The list of ad extensions of any type, to update within the account.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
