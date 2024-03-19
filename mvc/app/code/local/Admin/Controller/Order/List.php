<?php
class Admin_Controller_Order_List extends Core_Controller_Admin_Action
{
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addCss('admin/order/list.css');
        $child = $layout->getChild("content");
        $form = $layout->createBlock("admin/Order");
        $child->addChild('list', $form);
        $layout->toHtml();
    }

    // public function editAction(){
    //     $layout = $this->getLayout();
    //     $layout->getChild('head');
    //     $layout->getChild('head')->addJs('page.js');
    //     $child = $layout->getChild("content");

    //     $form = $layout->createBlock("admin/editForm");
    //     $child->addChild('list', $form);
    //     $layout->toHtml();
    // }

    public function saveAction()
    {
        //    $order = Mage::getModel('sales/order');
        //    $orderArray=$this->getRequest()->getPostData('order');
        //    $data=$order->getCollection()->addFieldToFilter('order_id',$orderArray['order_id'])->getFirstItem();
        //    $data->addData('status',$orderArray['status'])->save();
        $status = $this->getRequest()->getParams('order');
        $data = Mage::getModel('sales/order')->setData($status);
        $data->save();
        $this->setRedirect('admin/order_list/list');
    }
}
