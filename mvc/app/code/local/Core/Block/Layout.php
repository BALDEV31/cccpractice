<?php
class Core_Block_Layout extends Core_Block_Template{
    
    public function __construct(){
        $this->setTemplate("core/column1.phtml");
        $this->prepareChildren();
        // return $this;
    }
    public function prepareChildren(){
        // echo get_class($this);
        $header = $this->createBlock("page/header");
        $this->addChild('header',$header);

        $head = $this->createBlock('page/head');
        $this->addChild('head',$head);

        // $form = $this->createBlock('catalog/Admin_product');
        // $this->addChild('form',$form);
        $content = $this->createBlock('page/content');
        $this->addChild('content',$content);

        $footer = $this->createBlock('page/footer');
        $this->addChild('footer',$footer);


        // $messages = $this->createBlock('core/template');
        // $messages->setTemplate('core/messages.phtml');
        // $this->addChild('messages',$messages);
    }
    public function createBlock($className){
       return Mage::getBlock($className);
    }

    public function getRequest(){
        return Mage::getModel('core/request');
    }

}
?>