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
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
final class DeleteAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var integer
     */
    public $AccountId;
    /**
     * The list of ad extensions that are associated with campaigns or ad groups before calling this operation.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;
    /**
     * The entity type or types associated with an ad extension.
     * @var AssociationType
     */
    public $AssociationType;
}
