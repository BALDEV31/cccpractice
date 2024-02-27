<?php 
class Catalog_Block_Admin_Category_Form extends Core_Block_Template{
    public $data;
    public function __construct(){
        // echo get_class($this);
        $this->setTemplate("catalog/admin/category/form.phtml");
        $this->data=$this->getProduct();
    }

    public function getProduct(){
        $data= Mage::getModel('catalog/category')
        ->load($this->getRequest()->getParams('id',0));
        return $data;
    }

    // public function getProduct(){
    //     $product_id = $this->getRequest()->getParams('id');
    //     // echo $product_id;
    //     $product = isset($product_id) ? ($product_id) : null;
    //     $data = $product ? Mage::getModel('catalog/product')->load($product): Mage::getModel('catalog/product');
    //     return $data;
    // }
}