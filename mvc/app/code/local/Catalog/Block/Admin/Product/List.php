<?php 
class Catalog_Block_Admin_Product_List extends Core_Block_Template{

    public function __construct(){
        // echo get_class($this);
        $this->setTemplate("catalog/admin/product/list.phtml");
        // $this->data=$this->getProduct();
    }
}