<?php
class Core_Controller_Front{
    public function init(){
        $request = mage::getModel('core/request');
        $actionName = $request->getActionName().'Action';
        $fullClassName = $request->getFullControllerClass();
        $controller = new $fullClassName();
        $controller->$actionName();
    }
}
?>