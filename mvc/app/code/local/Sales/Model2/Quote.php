<?php
class Sales_Model_Quote extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }
    public function initQuote(){
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        if (!$this->getId()) {
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0]);
             
                // ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId(); 
            $this->load($quoteId);
        }
        return $this;

    }
    public function addProduct($request)
    {
        var_dump( $this->getId());
        $this->initQuote();
        if($this->getId()) {
            Mage::getModel("sales/quote_item")->addItem($this,$request['product_id'],$request['qty']);
        }

        // $this->save();
        
    }
}