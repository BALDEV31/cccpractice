<?php
class BmiCalculator_Controller_Calculate extends Core_Controller_Front_Action{

    protected $_allowedActions=[];
    public function indexAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $bmiBlock=$layout->createBlock('bmiCalculator/bmi');
        $child->addChild('bmi', $bmiBlock);
        $layout->toHtml();
    }
    
    public function saveAction(){
        $data = $this->getRequest()->getParams('bmi');

        if(!is_null($data['weight_value'])?($data['weight_value']=='pounds'):''){
            $weight = ($data['weight']/2.20462);
            $data['weight']= $weight;
        }
        if(!is_null($data['height_value'])?($data['height_value']=='feet'):''){
            $height = ($data['height']*3.28084);
            $data['height']= $height;
        }

        $result = $data['weight']/pow(($data['height']),2);
        $product = Mage::getModel('bmiCalculator/bmiCalculator')
            ->setData($data);

            if($result<18.5){
                $result = 'underweight';
            }elseif($result <24.5 && $result > 18.5){
                $result = 'normal';
            }elseif($result <29.9 && $result > 25){
                $result='overweight';
            }else{
                $result = 'obese';
            }
            
            $product->addData('result',$result);
            $product->removeData('height_value')->removeData('weight_value');

           $product->save();

    }
    
    public function listAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $child = $layout->getChild('content');
        $bmiBlock=$layout->createBlock('bmiCalculator/list');
        $child->addChild('list', $bmiBlock);
        $layout->toHtml();
    }

    public function deleteAction(){
        $Id = $this->getRequest()->getParams("id");
        $Data = Mage::getModel("bmiCalculator/bmiCalculator")->load( $Id );
        $Data->delete();
    }
}