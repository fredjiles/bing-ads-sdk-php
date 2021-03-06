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
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Response Object
     * 
     * @uses AdExtensionAssociationCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
final class GetAdExtensionsAssociationsResponse
{
    /**
     * An array of ad extension association collections.
     * @var AdExtensionAssociationCollection[]
     */
    public $AdExtensionAssociationCollection;
    /**
     * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
     * @var BatchError[]
     */
    public $PartialErrors;
}
