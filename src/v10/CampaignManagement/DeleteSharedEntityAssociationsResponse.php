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
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
final class DeleteSharedEntityAssociationsResponse
{
    /**
     * An array of BatchError objects that contain details for any associations that were not successfully deleted.
     * @var BatchError[]
     */
    public $PartialErrors;
}
