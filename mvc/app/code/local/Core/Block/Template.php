<?php
class Core_Block_Template extends Core_Block_Abstract
{
    public $template;
    protected $_child = [];
    public function toHtml()
    {
        $this->render();
    }
    public function addChild($key, $value)
    {
        $this->_child[$key] = $value;
        return $this;
    }
    public function removeChild($key)
    {
    }
    public function getChild($key)
    {
        return $this->_child[$key];
    }

    public function getChildHtml($key)
    {
        $html = "";
        if ($key == '' && count($this->_child)) {
            foreach ($this->_child as $_child) {
                $html .= $_child->toHtml();
            }
        } else {
            $html = $this->getChild($key)->toHtml();
        }
        return $html;
    }

    // public function setTemplate($template){
    //     $this->template = $template;
    // }
    // public function getTemplate(){
    //     return $this->template;
    // }

    public function getRequest()
    {
        return mage::getModel('core/request');
    }
}
