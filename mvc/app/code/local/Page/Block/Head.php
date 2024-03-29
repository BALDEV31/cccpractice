<?php 
class Page_Block_Head extends Core_Block_Template{
    protected $_css=[];
    protected $_js=[];
    public function __construct(){
        $this->setTemplate("page/head.phtml");
        $this->addCss('navigation.css');
        $this->addCss('footer.css');
        $this->addJs('jquery-3.7.1.js');
    }

    public function addJs($file){
        $this->_js[]=$file;
    }
    public function addCss($file){
        $this->_css[]=$file;
    }
    public function getJs(){
        return $this->_js;
    }
    public function getCss(){
        return $this->_css;
    }

    public function getJsUrl($file){
        return Mage::getBaseUrl('skin/js').'/'.$file;
    }
    public function getCssUrl($file){
        return Mage::getBaseUrl('skin/css').'/'.$file;
    }
}
?>