<?php
class Cart_Controller_Checkout extends Core_Controller_Front_Action{
    public function indexAction(){
        $layout = $this->getLayout();
        $layout->getchild('head')->addCss("cart/checkout.css");
        $child = $layout->getChild('content');
        $checkout = $layout->createBlock('cart/checkout');
        $child->addChild('checkout', $checkout);
        $layout->toHtml();
    }
}