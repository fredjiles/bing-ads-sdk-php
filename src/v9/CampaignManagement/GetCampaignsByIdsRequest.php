<?php

namespace BingAds\v9\CampaignManagement;

/**
 * Retrieves the specified campaigns from the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.90).aspx GetCampaignsByIds Request Object
 *
 * @uses CampaignType
 * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
 */
final class GetCampaignsByIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     *
     * @var int
     */
    public $AccountId;
    /**
     * A maximum of 100 identifiers of the campaigns to get from the specified account.
     *
     * @var integer[]
     */
    public $CampaignIds;
    /**
     * The type of campaign to get.
     *
     * @var CampaignType
     */
    public $CampaignType;
}
