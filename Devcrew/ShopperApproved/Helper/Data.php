<?php
/**
 * @Vendor    Devcrew
 * @Module    Devcrew_ShopperApproved
 * @User      Hafiz Arslan
 * @Copyright Copyright (c) dercrew.io, Inc. (https://devcrew.io/)
 */

/**
 * Helper
 *
 * Devcrew\ShopperApproved\Helper
 */
 namespace Devcrew\ShopperApproved\Helper;
 use Magento\Framework\App\Config\ScopeConfigInterface;
 use Magento\Framework\App\Helper\AbstractHelper;
 use Magento\Framework\App\Helper\Context;
 class Data extends AbstractHelper
 {
    public function __construct( Context $context )
    {
    parent::__construct($context);
    }
/**
 * Check if ShopperApproved is enabled
 *
 * @return boolean
 */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
    return $this->scopeConfig->isSetFlag( 'shopperapproved/general/enable', $scope );
    }
}
