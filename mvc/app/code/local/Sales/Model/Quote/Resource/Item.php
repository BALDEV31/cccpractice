<?php
class Sales_Model_Quote_Resource_Item extends Core_Model_Resource_Abstract{
    public function __construct()
    {   
        $this->init('customer', 'customer_id');
    }
}