<?php 
class Banner_Block_Form extends Core_Block_Template{
    public $data;
    public function __construct(){
        $this->setTemplate("banner/admin/form.phtml");
        $this->data=$this->getProduct();
    }
    public function getProduct(){
        $data= Mage::getModel('banner/banner')
        ->load($this->getRequest()->getParams('id',0));
        return $data;
    }
}