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
    $status = $this->getRequest()->getParams('order');
    $order = Mage::getModel('sales/order')->getCollection()
      ->addFieldToFilter('order_id', $status['order_id'])
      ->getFirstItem()
      ->getStatus();
    $data = Mage::getModel('sales/order')->setData($status);
    $data->save();
    Mage::getModel('sales/order_history')->setData(
      [
        'from_status' => $order,
        'to_status' => $status['status'],
        'order_id' => $status['order_id'],
        'action_by' => 1
      ]
    )->save();
  }

  public function approveAction()
  {
    $orderStatus = $this->getRequest()->getParams('approve');
    // print_r($orderStatus);
    $order = Mage::getModel('sales/order')->load($orderStatus['order_id']);
    $order->addData('status', 4)->save();
    $orderId = $orderStatus['order_id'];
    Mage::getModel('sales/order_history')->setData(
      [

        'order_id' => $orderId,
        'from_status' => '5',
        'to_status' => '6',
        'action_by' => 1
      ]
    )->save();
  }
  public function rejectAction()
  {
    $orderStatus = $this->getRequest()->getParams('Reject');
    Mage::getModel('sales/order_history')->setData(
      [

        'order_id' => $orderStatus['order_id'],
        'from_status' => '5',
        'to_status' => '7',
        'action_by' => 1
      ]
    )->save();
  }
}
