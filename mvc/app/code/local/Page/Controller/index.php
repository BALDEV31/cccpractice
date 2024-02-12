<?php
class Page_Controller_Index extends Core_Controller_Front_Action{
    public function indexAction(){
        $layout=$this->getLayout()->toHtml();
        // echo dirname(__FILE__);
        // echo get_class($this);
    }
}
?>