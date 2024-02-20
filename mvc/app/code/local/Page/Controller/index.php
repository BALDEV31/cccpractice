<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('css/navigation.css');
        $layout->getChild('head')->addCss('css/page.css');

        $banner = $layout->createBlock('core/template')
            ->setTemplate('banner/banner.phtml');

        // echo get_class($banner);die;
        $layout->getChild('content')
            ->addChild('banner', $banner)
            ->addChild('banner1', $banner);
        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // echo dirname(__FILE__);
        // echo get_class($this);
    }
}
