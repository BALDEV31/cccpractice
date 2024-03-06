<?php
class BmiCalculator_Controller_Calculate extends Core_Controller_Front_Action{
    public function indexAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $bmiBlock=$layout->createBlock('bmiCalculator/bmi');
        $child->addChild('bmi', $bmiBlock);
        $layout->toHtml();
    }

    public function saveAction(){
        echo '<pre>';
        $data = $this->getRequest()->getParams('bmi');
        print_r($data);

        if($data['weight_value']=='pounds'){
            $weight = ($data['weight']*2.20462);
            $data['weight']= $weight;
        }
        if($data['height_value']=='feet'){
            $height = ($data['height']*3.28084);
            $data['height']= $height;
        }

        $result = $data['weight']/pow(($data['height']),2);
        $product = Mage::getModel('bmiCalculator/bmiCalculator')
            ->setData($data);
            Mage::getSingleton('core/session');
            $product->addData('result',$result);

            print_r($product);

        $product->save();
    }

    public function viewAction(){

    }
}