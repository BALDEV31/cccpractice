<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('page.js');
        $layout->getChild('head')->addCss('navigation.css');
        $layout->getChild('head')->addCss('product/form.css');
        $layout->getChild('head')->addCss('footer.css');

        $child = $layout->getChild("content");

        $form = $layout->createBlock("catalog/admin_product_form");
        $child->addChild('form', $form);
        $layout->toHtml();
    }

    public function saveAction()
    {
        // echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();
        // print_r($data);
    }

    // public function deleteAction()
    // {
    //     // echo "<pre>";
    //     $id = $this->getRequest()->getParams('id');
    //     // echo $id;
    //     Mage::getModel('catalog/product')
    //         ->setId($id)->delete();
    //     // print_r($product);
    // }
    public function deleteAction()
    {
        // echo "<pre>";
        $id = $this->getRequest()->getParams('id');
        // echo $id;
       $product = Mage::getModel('catalog/product')->load($id);
            $product->delete();
        // print_r($product);
    }

    public function listAction(){
        $layout= $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addCss('navigation.css');
        $layout->getChild('head')->addCss('footer.css');
        $layout->getChild('head')->addCss('product/list.css');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);
        $layout->toHtml();
    }
}
