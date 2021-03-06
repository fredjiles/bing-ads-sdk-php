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
     * Defines an object that contains a list of identifiers, for example negative keyword identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn743736(v=msads.100).aspx IdCollection Data Object
     * 
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by GetCampaignIdsByBudgetIdsResponse
     */
final class IdCollection
{
    /**
     * A list of identifiers, for example negative keyword identifiers.
     * @var integer[]
     */
    public $Ids;
}
