<?php
class Cart_Controller_Index extends Core_Controller_Front_Action{
    public function viewAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/cart.css');
        $child = $layout->getChild('content');
        $cart = $layout->createBlock('cart/cart');
        $child->addChild('cart', $cart);
        $layout->toHtml();
    }
    public function listAction(){
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $cart = $layout->createBlock('cart/item');
        $child->addChild('cart', $cart);
        $layout->toHtml();
    }
}