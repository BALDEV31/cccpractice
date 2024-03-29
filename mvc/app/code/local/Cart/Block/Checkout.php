<?php
class Cart_Block_Checkout extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate("cart/checkout.phtml");
    }

    public function getCustomerAddress(){
        $customerId = Mage::getSingleton("core/session")->get("logged_in_customer_id");
        return Mage::getModel("customer/address")->getCollection()->addFieldToFilter("customer_id",$customerId);
    }
}