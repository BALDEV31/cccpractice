<?php
class Catalog_Block_Admin_Product extends Core_Block_Template{
    public function __construct(){
        // echo get_class($this);
        $this->setTemplate("product/form.phtml");
    }
}
?>