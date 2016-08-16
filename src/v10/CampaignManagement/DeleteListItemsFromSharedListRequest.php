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
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
final class DeleteListItemsFromSharedListRequest
{
    /**
     * An array of identifiers of the list items to delete from the shared list, for example a list of negative keyword identifiers.
     * @var integer[]
     */
    public $ListItemIds;
    /**
     * The list within the account's shared library, from which to delete the specified list items.
     * @var SharedList
     */
    public $SharedList;
}
