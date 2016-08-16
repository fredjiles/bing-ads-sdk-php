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
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
final class GetSharedEntityAssociationsByEntityIdsResponse
{
    /**
     * An array of SharedEntityAssociation objects that corresponds directly to the entity identifiers that you specified in the request.
     * @var SharedEntityAssociation[]
     */
    public $Associations;
    /**
     * An array of BatchError objects that contain details for any request items that were not successful.
     * @var BatchError[]
     */
    public $PartialErrors;
}
