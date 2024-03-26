<?php
class Sales_Block_Customer_Order extends Core_Block_Template
{
    // public $data ;
    public function __construct()
    {
        $this->setTemplate("sales/customer/order.phtml");
    }

    public function OrderId()
    {
        $customerId = Mage::getSingleton("core/session")->get("logged_in_customer_id");
        return Mage::getModel("sales/order_customer")->getCollection()->addFieldToFilter("customer_id", $customerId)->getData();
    }

    public function historyStatus($orderId)
    {
        return Mage::getModel("sales/order_history")->getCollection()
            ->addFieldToFilter('order_id', $orderId)
            ->getLastItem();
    }
}
