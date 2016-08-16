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
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.100).aspx DeleteAdExtensions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
final class DeleteAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var integer
     */
    public $AccountId;
    /**
     * The identifiers of the extensions to delete.
     * @var integer[]
     */
    public $AdExtensionIds;
}
