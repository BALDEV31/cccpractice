<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $data = $this->getRequest()->getParams('cart');
        $request = $data;
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);
        $this->setRedirect('cart/index/view');
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $quote = Mage::getSingleton("sales/quote")->deleteProduct($id);
        $this->setRedirect('cart/index/view');
    }

    public function updateAction()
    {
        $data = $this->getRequest()->getParams();
        $request = ['product_id' => $data['product_id'], 'quantity' => $data['quantity']];
        $quote = Mage::getSingleton("sales/quote")
            ->updateProduct($request);
        $this->setRedirect("cart/index/view");
    }

    public function addressAction()
    {
        echo "<pre>";
        if (empty(Mage::getSingleton("core/session")->get("logged_in_customer_id"))) {
            $this->setRedirect("customer/account/login");
        } else {
            $addressData = Mage::getSingleton('core/request')->getParams('customer_address');
            $paymentData = Mage::getSingleton('core/request')->getParams('customer_payment');
            $shippingData = Mage::getSingleton('core/request')->getParams('shipping_type');
            Mage::getSingleton('sales/quote')->addAddress($addressData);

            Mage::getSingleton('sales/quote')->addPayment($paymentData);
            Mage::getSingleton('sales/quote')->addShipping($shippingData);
            Mage::getSingleton('sales/quote')->convert();
            Mage::getSingleton('core/session')->remove('quote_id');
            $this->setRedirect('');
        }
    }

    public function savepermanentaddressAction()
    {
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
        if ($quoteId) {
            $addressData = Mage::getSingleton('core/request')->getParams('customer_address');
            Mage::getSingleton('sales/quote')->addAddressPermenant($addressData);
            $this->setRedirect('cart/checkout/form');
        }else{
            $this->setRedirect('');
        }
    }
}
