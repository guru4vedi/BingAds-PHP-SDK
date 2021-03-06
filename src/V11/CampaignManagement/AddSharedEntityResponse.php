<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.110).aspx AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityResponse
    {
        /**
         * A list of long values that represents the identifiers for the list items that were added.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * The identifier for the shared entity that was added.
         * @var integer
         */
        public $SharedEntityId;
    }
}
