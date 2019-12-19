<?php
/**
 * @Vendor    Devcrew
 * @Module    Devcrew_ShopperApproved
 * @User      Hafiz Arslan
 * @Copyright Copyright (c) dercrew.io, Inc. (https://devcrew.io/)
 */
?>
<?php
namespace Devcrew\ShopperApproved\Block;
use Magento\Framework\View\Element\Template;
class Success extends Template
{
protected $checkoutSession;
protected $orderFactory;
protected $scopeConfig;
public function __construct(
    \Magento\Checkout\Model\Session $checkoutSession,
    \Magento\Sales\Model\OrderFactory $orderFactory,
    \Magento\Framework\View\Element\Context $context
) {
    $this->checkoutSession = $checkoutSession;
    $this->orderFactory = $orderFactory;
    $this->scopeConfig = $context->getScopeConfig();
}
// Use this method to get ID
public function getRealOrderId()
{
    $order = $this->checkoutSession->getLastRealOrder();
    $orderId = $order->getEntityId();
    $orderIdd = $order->getIncrementId();
    return $orderIdd;
}
public function getOrder()
{
    if ($this->checkoutSession->getLastRealOrderId()) {
         $order = $this->orderFactory->create()->loadByIncrementId($this->getRealOrderId());
         return $order;
    }
  }
}
?>
