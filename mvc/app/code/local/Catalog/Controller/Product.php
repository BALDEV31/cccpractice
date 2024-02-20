<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function newAction(){
        $layout = $this->getLayout();
        $child = $layout->getChild("content");

        $form = $layout->createBlock("catalog/admin_product");
        // $form = $layout->setTemplate("product/form.phtml");
        $child->addChild('form',$form);
        $layout->toHtml();
    }

    public function saveAction(){
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
                ->setData($data);
                $product->save();
        echo "<pre>";
        print_r($data);
    }
}
?>