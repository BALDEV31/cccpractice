<?php
class Page_Controller_Index extends Core_Controller_Front_Action{
    public function indexAction(){
        $layout=$this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/page.css');
        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // echo dirname(__FILE__);
        // echo get_class($this);
    }
}
?>