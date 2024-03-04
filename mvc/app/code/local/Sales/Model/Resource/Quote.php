<?php
class Sales_Model_Resource_Quote extends Core_Model_Resource_Abstract{
    public function __construct()
    {   
        $this->init('sales', 'customer_id');
    }
}