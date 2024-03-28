<?php
class AgentClerk_Model_Clerk extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'AgentClerk_Model_Clerk_Resource_Clerk';
        $this->_collectionClass = 'AgentClerk_Model_Clerk_Resource_Collection_Clerk';
    }
}