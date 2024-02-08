<?php
class Core_Controller_Front{
    public function init(){
        $request = new Core_Model_Request();
        $moduleName = $request->getModuleName();
        $controllerName = $request->getControllerName();
        $actionName = $request->getActionName();
        $actionName .= "Action";

        $frontControllerClass = $request->getFullControllerClass();
        $frontControllerObj = new $frontControllerClass();
        echo get_class($frontControllerObj);
        $frontControllerObj->$actionName();
    }
}
?>