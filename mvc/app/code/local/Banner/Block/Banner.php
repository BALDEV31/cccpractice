<?php 
class Banner_Block_Banner extends Core_Block_Template{
    public $data;
    public function __construct(){
        // echo get_class($this);
        $this->setTemplate("banner/banner.phtml");
    }

    public function getBannerList(){
        return Mage::getModel('banner/banner')->getCollection()->addFieldToFilter('status',1)->getData();
    }
}