<?php class Banner_Model_Resource_Banner extends Core_Model_Resource_Abstract{
   
        //above part is abstract
        public function __construct()
        {   
            $this->init('banner', 'banner_id');
        }
    
    
}