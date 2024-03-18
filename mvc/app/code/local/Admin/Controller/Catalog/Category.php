<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('page.js');
        $layout->getChild('head')->addCss('navigation.css');
        $layout->getChild('head')->addCss('category/form.css');
        $layout->getChild('head')->addCss('footer.css');

        $child = $layout->getChild("content");

        $form = $layout->createBlock("catalog/admin_category_form");
        $child->addChild('form', $form);
        $layout->toHtml();
    }
    public function saveAction()
    {
        // echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_category');
        $product = Mage::getModel('catalog/category')
            ->setData($data);
        $product->save();
        // print_r($data);
    }

    // public function deleteAction()
    // {
    //     // echo "<pre>";
    //     $id = $this->getRequest()->getParams('id');
    //     // echo $id;
    //     Mage::getModel('catalog/category')
    //         ->setId($id)->delete();
    //     // print_r($product);
    // }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams('id');
        $product = Mage::getModel('catalog/category')->load($id);
        $product->delete();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addCss('navigation.css');
        $layout->getChild('head')->addCss('footer.css');
        $layout->getChild('head')->addCss('category/list.css');
        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryForm);
        $layout->toHtml();
    }
}
