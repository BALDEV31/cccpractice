<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('navigation.js');
        $layout->getChild('head')->addJs('form.js');
        $layout->getChild('head')->addCss('navigation.css');
        $layout->getChild('head')->addCss('form.css');

        $banner = $layout->createBlock('banner/banner');

        // echo get_class($banner);die;
        $layout->getChild('content')
            ->addChild('banner', $banner);
        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // echo dirname(__FILE__);
        // echo get_class($this);
    }
}
