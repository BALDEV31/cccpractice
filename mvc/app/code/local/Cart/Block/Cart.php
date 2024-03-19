<?php
class Cart_Block_Cart extends Core_Block_Template{
    public $data;
    public function __construct(){
        $this->setTemplate('cart/cart.phtml');
        $this->data=$this->getQuoteItems();
    }
    public function getQuoteItems(){
        $data= Mage::getModel('sales/quote_item')
        ->getCollection()->addFieldToFilter('quote_id',Mage::getSingleton('core/session')->get('quote_id'))->getData();
        return $data;
    }
}