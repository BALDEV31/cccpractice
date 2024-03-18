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

    public function getWeightMeasure(){
        $data = ['pounds','kilogram'];
        return $data;
    }

    public function getHeightMeasure(){
        $data = ['meters','feet'];
        return $data;
    }

    public function sessionId(){
     $session = Mage::getSingleton('core/session')->getId();
        return $session;
    }
}