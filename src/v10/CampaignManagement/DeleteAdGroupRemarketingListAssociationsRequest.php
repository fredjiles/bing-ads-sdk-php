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
     * Deletes one or more ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735051(v=msads.100).aspx DeleteAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupRemarketingListAssociations
     */
final class DeleteAdGroupRemarketingListAssociationsRequest
{
    /**
     * The list of up to 1,000 ad group remarketing list associations to delete.
     * @var AdGroupRemarketingListAssociation[]
     */
    public $AdGroupRemarketingListAssociations;
}
