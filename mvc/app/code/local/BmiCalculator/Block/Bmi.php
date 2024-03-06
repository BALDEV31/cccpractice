<?php
class BmiCalculator_Block_Bmi extends Core_Block_Template{
    public $data;
    public function __construct(){
        echo 123;
        $this->setTemplate('bmi/calcultor.phtml');
        $this->data=$this->getProduct();
    }

    public function getProduct(){
        // echo '<pre>';
        $data= Mage::getModel('catalog/category')
        ->load($this->getRequest()->getParams('id',0));
        // print_r($data);
        return $data;
    }
}