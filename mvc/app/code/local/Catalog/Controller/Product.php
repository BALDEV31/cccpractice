<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action{
    public function viewAction(){
        // $id = $this->getRequest()->getParams('id');
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('product/view.css');
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $view = $layout->createBlock('catalog/product_view');
        $child ->addChild('view', $view);
        $layout->toHtml();
    }
}