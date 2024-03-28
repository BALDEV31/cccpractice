<?php
class AgentClerk_Controller_Index extends Core_Controller_Front_Action{

    public function indexAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $bmiBlock=$layout->createBlock('agentclerk/form');
        $child->addChild('bmi', $bmiBlock);
        ($layout->toHtml());
    }

    public function saveAction(){
        $agentId=empty($this->getRequest()->getParams('agentId')) ?? "1";
        $data=Mage::getModel('AgentClerk/Clerk')->getCollection()->addFieldToFilter('agent_id',$agentId)->getData();
    }
}