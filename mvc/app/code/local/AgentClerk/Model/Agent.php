<?php
class AgentClerk_Model_Agent extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'AgentClerk_Model_Agent_Resource_Agent';
        $this->_collectionClass = 'AgentClerk_Model_Agent_Resource_Collection_Agent';
    }
}