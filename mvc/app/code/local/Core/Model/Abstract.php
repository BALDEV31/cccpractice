<?php
class Core_Model_Abstract{
    protected $data = [];
    protected $resourceClass = '';
    protected $collectionClass = '';
    protected $resource = null;
    protected $collection = null;
    public function __construct(){

    }
    public function setResourceClass($resourceClass){

    }
    public function setCollectionClass($collectionClass){

    }
    public function setId($id){
        
    }
    public function getId(){
        
    }
    public function getResource(){
        // echo get_class($this);
        $class = substr(get_class($this), strpos(get_class($this), "_Model_")+7)."_Model_Resource_".substr(get_class($this), strpos(get_class($this), "_Model_")+7);
        return new $class();
    }
    public function getCollection(){
        
    }
    public function getPrimaryKey(){
        
    }
    public function getTableName(){
        
    }
    public function __set($key, $value){
        
    }
    public function __get($key){
        
    }
    public function __unset($key){
        
    }
    public function getData($key=null){
        
    }
    public function setData($data){
        
    }
    public function addData($key, $value){
        
    }
    public function removeData($key = null){
        
    }
    public function save(){
        
    }
    public function load($id, $column=null){
       print_r($this->getResource());
    }
    public function delete(){
        
    }

}
?>