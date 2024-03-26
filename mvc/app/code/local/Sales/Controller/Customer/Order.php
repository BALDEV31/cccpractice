<?php
class Sales_Controller_Customer_Order extends Core_Controller_Front_Action
{
    public function orderViewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('sales/customer/orderList.css');
        $child = $layout->getChild('content');
        $view = $layout->createBlock('sales/customer_order');
        $child->addChild('view', $view);
        $layout->toHtml();
    }
    public function cancelAction()
    {
        $cancelArray = $this->getRequest()->getParams('cancel');
        Mage::getModel('sales/order_history')->setData(
            [
                'order_id' => $cancelArray['order_id'],
                'to_status' => $cancelArray['cancel'],
                'action_by' => 0
            ]
        )->save();
    }
}
