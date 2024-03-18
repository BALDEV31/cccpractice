<?php
class Catalog_Block_Product_View extends Core_Block_Template{
    public $data;
    public function __construct(){
        $this->setTemplate("catalog/product/view.phtml");
        $this->getProduct();
    }
    public function getProduct(){
        // echo '<pre>';
        $this->data= Mage::getModel('catalog/product')
        ->load($this->getRequest()->getParams('id',0));        
        return $this->data;
    }
}