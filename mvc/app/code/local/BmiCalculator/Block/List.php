<?php
class BmiCalculator_Block_List extends Core_Block_Template{
    // public $data;
    public function __construct(){
        $this->setTemplate('bmi/list.phtml');
    }
}