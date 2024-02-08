<?php
class Core_Model_Request{

    protected $_moduleName;
    protected $_controllerName;
    protected $_actionName;
    public function __construct()
    {
        $request = $this->getRequestUri();
        $url=explode("/", $request);
        $this->_moduleName=$url[0];
        $this->_controllerName=$url[1];
        $this->_actionName=$url[2];

    }

    public function getFullControllerClass(){
        $controllerClass = implode('_', [ucfirst($this->_moduleName), 'Controller', ucfirst($this->_controllerName)]);
        return $controllerClass;
    }

    public function getModuleName(){
        return $this->_moduleName;
    }

    public function getControllerName(){
        return $this->_controllerName;
    }

    public function getActionName(){
        return $this->_actionName;
    }

    public function getParams($key=''){
        return ($key == '')? $_REQUEST : (isset($_REQUEST[$key])? $_REQUEST[$key]: '');
    }

    public function getPostData($key=''){
        return ($key == '')? $_POST : (isset($_POST[$key])? $_POST[$key]: '');
    }

    public function getQueryData($key=''){
        return ($key == '')? $_GET : (isset($_GET[$key])? $_GET[$key]: '');
    }
    
    public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}
    // public function getRequestUri(){
		public function getRequestUri(){
            $uri = $_SERVER['REQUEST_URI'];
            $uri = str_replace('/practice/mvc/','', $uri);
            return $uri;
        }
	// }
    // public function getaction($key){
    //     return $this->getQueryData($key);
    // }
}
?>