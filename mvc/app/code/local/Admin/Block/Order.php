<?php
class Admin_Block_Order extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/user/order.phtml');
    }
    public function getOrderDetails(){
        return Mage::getModel('sales/order')->getCollection()->getData();
    }

    public function setStatus(){
        return [
            0 =>'pending',
            1 =>'shipping',
            2 => 'declined',
            3 => 'refunded',
            4 =>'cancel'
        ];
    }

    public function getStatusName($id){
        $arr = [
            0 =>'pending',
            1 =>'shipping',
            2 => 'declined',
            3 => 'refunded',
            4 =>'cancel'
        ];
        return $arr[$id];
    }
}