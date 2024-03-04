<?php
class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    protected $_allowedActions = [];

    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('banner/form.css');
        // echo '123';
        $child = $layout->getChild('content');
        $bannerForm = $layout->createBlock('banner/form');
        $child->addChild('form', $bannerForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $bannerData = $this->getRequest()->getPostData('banner');
        $bannerFileData = $this->getRequest()->getFileData('banner');
        $bannerName = $bannerFileData['name']['banner_image'];
        $targetDir = Mage::getBaseDir('media/banner/') . $bannerName;
        $bannerData['banner_image'] = $bannerName;

        if (move_uploaded_file($bannerFileData["tmp_name"]["banner_image"], $targetDir)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }

        $bannerModel = Mage::getModel("banner/banner");
        $bannerModel->setData($bannerData)->save();
    }

    public function deleteAction(){
        $bannerId = $this->getRequest()->getParams("id");
        $bannerData = Mage::getModel("banner/banner")->load( $bannerId );
        $bannerImgPath = Mage::getBaseDir("media/banner/") . $bannerData->getBannerName();
        unlink($bannerImgPath);
        $bannerData->delete();
        $this->setRedirect("admin/banner/list");
    }

    public function listAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('');
        $child = $layout->getChild('content');
        $bannerList = $layout->createBlock('banner/list');
        $child->addChild('bannerList',$bannerList);
        $layout->toHtml();
    }
}
