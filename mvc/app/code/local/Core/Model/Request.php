<?php
class Core_Model_Request{

    protected $_moduleName;
    protected $_controllerName;
    protected $_actionName;
    public function __construct()
    {
        $url = $this->getRequestUri();
        $url=array_filter(explode("/", $url));
        
        $this->_moduleName      = isset($url[0]) ? $url[0]:'page';
        $this->_controllerName  = isset($url[1]) ? $url[1]:'index';
        $this->_actionName      = isset($url[2]) ? $url[2]:'index';

    }

    public function getFullControllerClass(){
        $strclass = $this->_moduleName.'_Controller_'.$this->_controllerName;
        $controllerClass = ucwords($strclass,'_');
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
		public function getRequestUri(){
            $uri = $_SERVER['REQUEST_URI'];
            // $uri = stristr($uri,'?');
            $uri = str_replace('/practice/mvc/','', $uri);
            $uri = stristr($uri,'?',true);
            return $uri;
        }
}
?>