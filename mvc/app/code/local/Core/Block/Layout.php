<?php
class Core_Block_Layout extends Core_Block_Template{
    
    public function __construct(){
        $this->setTemplate("core/column1.phtml");
        return $this;
    }
    public function prepareChildren(){

    }
    public function createBlock($className){
        mage::getBlock('page/header');
    }

    public function getRequest(){
        return mage::getModel('core/request');
    }

}
?>