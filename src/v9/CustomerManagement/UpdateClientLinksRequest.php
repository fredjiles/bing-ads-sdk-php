<?php

namespace BingAds\v9\CustomerManagement;

/**
 * This feature is not supported in sandbox.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.90).aspx UpdateClientLinks Request Object
 *
 * @uses ClientLink
 * @used-by BingAdsCustomerManagementService::UpdateClientLinks
 */
final class UpdateClientLinksRequest
{
    /**
     * The list of client links to update.
     *
     * @var ClientLink[]
     */
    public $ClientLinks;
}
