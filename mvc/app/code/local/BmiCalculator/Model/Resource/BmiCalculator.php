<?php
class BmiCalculator_Model_Resource_BmiCalculator extends Core_Model_Resource_Abstract
{
    //above part is abstract
    public function __construct()
    {   
        $this->init('ccc_bmi_calculator', 'id_value');
    }

}