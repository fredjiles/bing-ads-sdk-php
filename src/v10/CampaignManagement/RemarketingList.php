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
     * Defines a remarketing list that can be associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt735047(v=msads.100).aspx RemarketingList Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses EntityScope
     * @uses RemarketingListTemplate
     * @used-by GetRemarketingListsResponse
     */
final class RemarketingList
{
    /**
     * The description of the remarketing list.
     * @var string
     */
    public $Description;
    /**
     * The list of key and value strings for forward compatibility.
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The Bing Ads identifier of the remarketing list.
     * @var integer
     */
    public $Id;
    /**
     * When you create a remarketing list, you can specify how far back in time Bing Ads should look for actions that match your remarketing list definition in order to add people to your list.
     * @var integer
     */
    public $MembershipDuration;
    /**
     * The name of the remarketing list.
     * @var string
     */
    public $Name;
    /**
     * The Bing Ads identifier of the account or customer.
     * @var integer
     */
    public $ParentId;
    /**
     * Scope defines what accounts can use this remarketing list.
     * @var EntityScope
     */
    public $Scope;
    /**
     * The Bing Ads identifier of the Universal Event Tracking (UET) tag that is used with the remarketing list.
     * @var integer
     */
    public $TagId;
    /**
     * We offer four types of rules so you can target different groups of people.
     * @var RemarketingListTemplate
     */
    public $Template;
}