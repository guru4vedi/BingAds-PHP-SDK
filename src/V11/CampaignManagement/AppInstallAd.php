<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an app install ad.
     * @link http://msdn.microsoft.com/en-us/library/mt712576(v=msads.110).aspx AppInstallAd Data Object
     */
    final class AppInstallAd extends Ad
    {
        public $AppPlatform;
        public $AppStoreId;
        public $Text;
        public $Title;
    }

}
