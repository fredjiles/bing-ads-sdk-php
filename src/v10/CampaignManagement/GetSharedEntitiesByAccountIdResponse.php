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
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
final class GetSharedEntitiesByAccountIdResponse
{
    /**
     * The shared entities from the account's shared library, for example negative keyword lists.
     * @var SharedEntity[]
     */
    public $SharedEntities;
}
