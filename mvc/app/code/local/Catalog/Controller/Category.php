<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action{
    public function viewAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('category/view.css');
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $view = $layout->createBlock('catalog/category_view');
        $child ->addChild('view', $view);
        $layout->toHtml();
    }
}