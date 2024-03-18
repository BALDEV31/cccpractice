<?php
class Customer_Block_Account_Dashboard extends Core_Block_Template{

    public $data = [];
    public function __construct(){
        $this->setTemplate("customer/account/dashboard.phtml");
        $this->getUserData();
    }

    public function getUserData(){
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $this->data = Mage::getModel('customer/customer')->load($customerId);
        return isset($this->data)?$this->data:'';
    }
}