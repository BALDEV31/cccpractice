<?php
class Catalog_Model_Resource_Category extends Core_Model_Resource_Abstract
{
    //above part is abstract
    public function __construct()
    {   
        $this->init('catalog_category', 'category_id');
    }

}