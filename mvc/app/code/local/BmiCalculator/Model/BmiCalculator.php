<?php
class BmiCalculator_Model_BmiCalculator extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'BmiCalculator_Model_Resource_BmiCalculator';
        $this->_collectionClass = 'BmiCalculator_Model_Resource_Collection_BmiCalculator';
    }
    // public function getStatus(){
    //     $mapping = [
    //         1=>"Enable",
    //         0=>"Disable"
    //     ];
    //     return isset($this->_data['status']) ? $mapping[$this->_data['status']]:'';
    // }

    public function initQuote($data)
    {
        $quoteId = Mage::getSingleton("core/session")->get("session_id");
        var_dump($quoteId);
        $this->load($quoteId);
        if (!$this->getId()) {
            $quote = Mage::getModel("bmiCalculator/bmiCalculator")
                ->setData($data);
                // ->save();
            Mage::getSingleton("core/session")->set("session_id", $quote->getIdValue());
            $quoteId = $quote->getIdValue();
            $this->load($quoteId);
        }
        
        return $this;
    }
    public function addProduct($request)
    {
        $this->initQuote($request);
    
    }
}
?>