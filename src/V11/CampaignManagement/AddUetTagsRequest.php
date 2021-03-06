<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new Universal Event Tracking (UET) tags that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759506(v=msads.110).aspx AddUetTags Request Object
     * 
     * @uses UetTag
     * @used-by BingAdsCampaignManagementService::AddUetTags
     */
    final class AddUetTagsRequest
    {
        public $UetTags;
    }
}
