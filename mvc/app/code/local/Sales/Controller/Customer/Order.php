<?php
class Sales_Controller_Customer_Order extends Core_Controller_Front_Action
{
    public function orderViewAction(){
        $layout = $this->getLayout();
        // $layout->getChild('head')->addCss('');
        // $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $view = $layout->createBlock('sales/customer_order');
        $child ->addChild('view', $view);
        $layout->toHtml();
    }
}
