<?php
class Catalog_Model_Product extends Core_Model_Abstract{
    protected static $_categoryNames = [];
    public function init(){
        $this->_resourceClass = 'Catalog_Model_Resource_Product';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
    }
    public function getStatus(){
        $mapping = [
            1=>"Enable",
            0=>"Disable"
        ];
        return isset($this->_data['status']) ? $mapping[$this->_data['status']]:'';
    }
    public function getCategoryName()
    {
        if (isset(self::$_categoryNames[$this->getCategoryId()])) {
            return self::$_categoryNames[$this->getCategoryId()];
        } else {
            $category = Mage::getModel('catalog/category')->load($this->getCategoryId());
            self::$_categoryNames[$this->getCategoryId()] = $category->getCategoryName();
            return self::$_categoryNames[$this->getCategoryId()];
        }
    }
}
?>