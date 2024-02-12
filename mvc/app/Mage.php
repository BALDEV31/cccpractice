<?php
class Mage{
    public static $baseDir='D:/xampp/htdocs/practice/mvc';
    public static function init(){
        // $request=new Core_Model_Request();
        // $request=Mage::getModel("core/request");
        // echo $request->getRequestUri();
        $request = new Core_Controller_Front();
        $request->init();
    }

    public static function getModel($className){
       $className= ucwords(str_replace("/","_Model_", $className),'_');
       echo $className;
       return new $className();
    }

    public static function getBlock($className){
        $className= ucwords(str_replace('/','_Block_',$className),'_');
        echo $className;  
        return new $className();
    }

    public static function getSingleton($className){

    }

    public static function register($key, $value){

    }
    public static function registry($key){

    }
    public static function getBaseDir($subDir = null){
        if(($subDir)){
            return self::$baseDir.'/'.$subDir;
        }
        return self::$baseDir;
}
}

?>