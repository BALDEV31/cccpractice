<?php
class AgentClerk_Block_Form extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('test/form.phtml');
    }

    public function getParentOptions(){
       return (Mage::getModel('AgentClerk/Agent')->getCollection()->getData());
    }

}