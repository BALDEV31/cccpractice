<?php
class Core_Model_Abstract
{
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
    }
    public function setResourceClass($resourceClass)
    {
    }
    public function setCollectionClass($collectionClass)
    {
    }
    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
        return $this;
    }
    public function getId()
    {
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function getResource()
    {
        return new $this->_resourceClass();
    }
    
    public function getCollection()
    {
        $collection = new $this->_collectionClass();
        $collection->setResource($this->getResource());
        // echo get_class($this);
        $collection->setModel(get_class($this));
        $collection->select();
        return $collection;
    }

    public function getTableName()
    {
    }
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }

    public function __call($name, $args)
    {
        $name = $this->camelCase2UnderScore(substr($name, 3));
        return isset($this->_data[$name]) ? $this->_data[$name] : '';
    }
    public function __set($key, $value)
    {
    }
    public function __get($key)
    {
    }
    public function __unset($key)
    {
    }
    public function getData($key = null)
    {
        return $this->_data;
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
    }
    public function removeData($data)
    {
    }
    public function save()
    {   
        $this->getResource()->save($this);
        return $this;
    }
    public function load($id, $column = null)
    {
        $this->_data = $this->getResource()->load($id, $column);

        return $this;
    }
    public function delete()
    {
        // echo 'helo';
        if ($this->getId()) {
            $this->getResource()->delete($this);
        }
        // echo "doe";
        return $this;
    }

    // public function update(){
    //     $this->getResource()->update($this);
    //     return $this;
    // }

}
