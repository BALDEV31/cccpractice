<?php 
class Admin_Block_User extends Core_Block_Template{
    public function __construct(){
        // echo get_class($this);
        $this->setTemplate("admin/user/login.phtml");
    }
}