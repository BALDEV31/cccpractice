<?php
class Sales_Model_Quote_Item extends Core_Model_Abstract
{
    protected $_product=null;
    public function init()
    {
        $this->_modelClass = 'sales/quote_item';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Item';
    }
    public function getProduct()
    {
        if(!is_null($this->_product)){
            return $this->_product;
        }
        $this->_product = Mage::getModel('catalog/product')->load($this->getProductId());
        return $this->_product;
    }

    protected function _beforeSave()
    {
        if ($this->getProductId()) {
            $price = $this->getProduct()->getPrice();
            $this->addData('price', $price);
            $this->addData('row_total', $price * $this->getQty());
        } else {
        }
    }

    public function addItem(Sales_Model_Quote $quote, $productId, $qty)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();

        if ($item) {
            $qty = $qty + $item->getQty();
        }
        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'product_id' => $productId,
                'qty' => $qty,
            ]
        );

        if ($item) {
            $this->setId($item->getId());
        }
        $this->save();
        return $this;
    }

    public function deleteItem(Sales_Model_Quote $quote,$productId){
        $item = $this->getCollection()
        ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();

    
        if ($item) {
            // $this->setId($productId);
            $item->delete();
        }
      
        // die();
        return $this;
    }

    public function updateItem(Sales_Model_Quote $quote, $productId, $qty)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();

        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'product_id' => $productId,
                'qty' => $qty,
            ]
        );

        if ($item) {
            $this->setId($item->getId());
        }
        $this->save();
        return $this;
    }
}
