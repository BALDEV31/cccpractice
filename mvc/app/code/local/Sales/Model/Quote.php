<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote';
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }
    public function initQuote()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        echo $customerId;
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        $existingQuoteId = Mage::getModel("sales/quote")->getCollection()
            ->addFieldToFilter("order_id", 0)
            ->addFieldToFilter("customer_id", $customerId)
            ->getFirstItem();

        if (!is_null($existingQuoteId)) {
            Mage::getSingleton("core/session")->set("quote_id", $existingQuoteId->getId());

            $this->load($existingQuoteId->getId());
        } else {
            if (!$this->getId()) {

                $quote = Mage::getModel("sales/quote")
                    ->setData(["tax_percent" => 8, "grand_total" => 0])
                    ->addData("customer_id", $customerId)
                    ->save();
                Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
                $quoteId = $quote->getId();
                $this->load($quoteId);
            }
        }
        return $this;
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }


    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += (int)$_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }

    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->addItem($this, $request['product_id'], $request['quantity']);
        }
        $this->save();
    }

    public function deleteProduct($id)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->deleteItem($this, $id);
        }
        $this->save();
    }
    public function updateProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->updateItem($this, $request['product_id'], $request['quantity']);
        }
        $this->save();
    }

    public function addAddress($request)
    {
        $this->initQuote();

        if ($this->getId()) {
            Mage::getModel("sales/quote_customer")->saveAddress($this, $request);
        }
        $this->save();
    }

    public function addPayment($payment)
    {
        $this->initQuote();
        if ($this->getId()) {
            $id =  Mage::getModel("sales/quote_payment")->addPaymentMethod($this, $payment)->getId();
            $this->addData('payment_id', $id);
        }
        $this->save();
    }

    public function addShipping($method)
    {
        $this->initQuote();
        if ($this->getId()) {
            $id = Mage::getModel("sales/quote_shipping")->addShippingMethod($this, $method)->getId();
            $this->addData('shipping_id', $id);
        }
        $this->save();
    }

    public function convert()
    {
        $this->initQuote();
        $order = $this->convertQuoteToOrder();
        $orderId = $this->getId();
        $this->convertQuoteItemToOrderItem($orderId);
        $this->convertQuoteAddressToOrderAddress($orderId);
        $payment = $this->quotePayToOrderPay($orderId);
        $shipping = $this->quoteShippingToOrderShipping($orderId);
        $this->addData("order_id", $order->getId())->save();
        $order->addData('payment_id', $payment->getId())->addData('shipping_id', $shipping->getId())->save();
    }


    public function convertQuoteToOrder()
    {
        if ($this->getId()) {
            return Mage::getModel('sales/order')->setData($this->getData())
                ->removeData("quote_id")
                ->removeData("shipping_id")
                ->removeData("payment_id")
                ->removeData("order_id")
                ->save();
        }
    }
    public function convertQuoteItemToOrderItem($orderId)
    {
        if ($this->getId()) {
            foreach ($this->getItemCollection()->getData() as $_item) {
                $data = Mage::getModel('catalog/product')->load($_item->getProductId());
                Mage::getModel('sales/order_item')
                    ->setData($_item->getData())
                    ->removeData('quote_id')
                    ->removeData('item_id')
                    ->addData('product_name', $data->getName())
                    ->addData('product_color', $data->getColor())
                    ->addData('order_id', $orderId)
                    ->save();
                $product = Mage::getModel("catalog/product")->load($_item->getProductId());
                $updatedInventory = $product->getInventory() - $_item->getQty();
                $product->addData('inventory', $updatedInventory)->save();
            }
        }
    }

    public function convertQuoteAddressToOrderAddress($orderId)
    {
        if ($this->getId()) {
            $address = Mage::getModel('sales/quote_customer')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();

            Mage::getModel('sales/order_customer')->setData($address->getData())
                ->removeData('quote_id')
                ->removeData('quote_customer_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }

    public function quotePayToOrderPay($orderId)
    {
        if ($this->getId()) {
            $payment = Mage::getModel('sales/quote_payment')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();

            return Mage::getModel('sales/order_payment')->setData($payment->getData())
                ->removeData('payment_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }

    public function quoteShippingToOrderShipping($orderId)
    {
        if ($this->getId()) {
            $shipping = Mage::getModel('sales/quote_shipping')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();

            return Mage::getModel('sales/order_payment')->setData($shipping->getData())
                ->removeData('shipping_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }

    public function addAddressPermenant($addressData)
    {
        echo "<pre>";
        $CustomerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $modelName = Mage::getModel('customer/address');
        print_r($modelName);
        $modelName->setData($addressData);
        print_r($modelName);
        if ($CustomerId) {
            $modelName->addData('customer_id', $CustomerId)
                ->save();
        }
    }
}
