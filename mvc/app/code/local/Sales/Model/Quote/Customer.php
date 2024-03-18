<?php
class Sales_Model_Quote_Customer extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote_customer';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Customer';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Customer';
    }

    public function saveAddress(Sales_Model_Quote $quote, $data)
    {
        $customerId = Mage::getSingleton("core/session")->get("logged_in_customer_id");
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        $emailData = Mage::getModel("customer/customer")->load($customerId);
        $email = $emailData->getCustomerEmail();
        $item = $this->getCollection()
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();
        $this->setData($data)->addData('quote_id', $quoteId)->addData('customer_id', $customerId)->addData('email', $email);
        if ($item) {
            $this->setId($item->getId());
        }
        $this->save();
        return $this;
    }
}
