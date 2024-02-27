<?php
class Catalog_Model_Category extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'Catalog_Model_Resource_Category';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Category';
    }
    public function getStatus(){
        $mapping = [
            1=>"Enable",
            0=>"Disable"
        ];
        return isset($this->_data['status']) ? $mapping[$this->_data['status']]:'';
    }
}
?>