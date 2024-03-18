<?php
class Catalog_Block_Category_View extends Core_Block_Template{
    public $data ;
    public function __construct(){
        $this->setTemplate("catalog/category/view.phtml");
        $this->getProduct();
    }
    public function getProduct(){
        $data = Mage::getModel('catalog/product')
        ->getCollection()->addFieldToFilter('category_id',$this->getRequest()->getParams('id',0))->getData();

        if($data){
            $this->data = $data;
        }else{
            $this->data = Mage::getModel('catalog/product')->getCollection()->getData();
        }
        
        return $this->data;
    }
}