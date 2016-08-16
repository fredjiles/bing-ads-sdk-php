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
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Response Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
final class GetAdExtensionsByIdsResponse
{
    /**
     * A list of AdExtension objects.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
