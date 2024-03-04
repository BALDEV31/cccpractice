<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedActions = ['form'];
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
        $productData = $this->getRequest()->getPostData('catalog_product');
        $productFileData = $this->getRequest()->getFileData('catalog_product');
        $bannerName = $productFileData['name']['image_link'];
        $targetDir = Mage::getBaseDir('media/category/') . $bannerName;
        $productData['image_link'] = $bannerName;

        if (move_uploaded_file($productFileData["tmp_name"]["image_link"], $targetDir)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }

        $productModel = Mage::getModel("catalog/product");
        $productModel->setData($productData)->save();
        
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
