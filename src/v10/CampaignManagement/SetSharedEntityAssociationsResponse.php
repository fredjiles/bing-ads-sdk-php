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
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
final class SetSharedEntityAssociationsResponse
{
    /**
     * An array of BatchError objects that contain details for any request items that were not successful.
     * @var BatchError[]
     */
    public $PartialErrors;
}
