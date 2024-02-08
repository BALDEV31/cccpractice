<?php
class Mage{
    public static function init(){
        $request=new Core_Model_Request();
        $request=Mage::getModel("core/request");
        echo $request->getRequestUri();
        $re = new Core_Controller_Front();
        $re->init();
    }

    public static function getModel($className){
       $className= ucwords(str_replace("/","_Model_", $className),'_');
    //    echo''.$className.'';
       return new $className();
    }

    public static function getSingleton($className){

    }

    public static function register($key, $value){

    }
    public static function registry($key){

    }
    public static function getBaseDir($subDir = null){
        
    }
}

?>