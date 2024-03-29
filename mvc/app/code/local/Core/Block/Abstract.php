<?php
class Core_Block_Abstract{
    public $template;
    protected $_data='';
    public function setTemplate($template){
        $this->template = $template;
        return $this;
    }
    public function getTemplate(){
        return $this->template;
    }
    public function __get($key){

    }
    public function __unset($key){

    }
    public function __set($key, $value){

    }
    public function addData($key, $value){

    }
    public function getData($key=null){
        return $this->_data;
    }
    public function setData($data){
        $this->_data = $data;
        return $this;
    }
    // public function getUrl($action = null, $controller = null, $params = [], $resetParams = false)
    public function getUrl($path){
        return "http://localhost/practice/mvc/".$path;
    }
    public function getRequest(){

    }
    public function render(){
         include Mage::getBaseDir('app') . '/design/frontend/template/' . $this->getTemplate();
    }


}
?>