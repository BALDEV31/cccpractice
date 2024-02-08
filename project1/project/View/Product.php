<?php
// print_r($_POST);
class View_Product{
    public $newObj;
    public function __construct($pdata=null)
    {
        $pdata=!is_null($pdata)?$pdata:"";
       print_r($this->newObj=new Data_Object($pdata));
       print_r($this->newObj->getsku());
    }
    public function createForm(){
        $option1 =['Bar & Game Room','Bedroom','Decor','Dining & Kitchen','Lighting','Living Room','Mattresses','Office','Outdoor'];
        $option2 =['enabled','disabled'];
        $form = '<form action="" method="post">';
        $form .= '<fieldset>';
        // $form .= '<legend>'.$this->createTitle($title).'</legend>';
        $form .= '<div>';
        $form .= $this->createTextField("product Name",'pdata[product_name]','',!is_null($this->newObj->getproduct_name())?$this->newObj->getproduct_name():'');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("SKU",'pdata[sku]','',$this->newObj->getsku());
        $form .= '</div>';
        $form .= '<div>';
        $form .= '<span>Product Type: </span>';
        $form .=$this->createRadioButton('simple','pdata[product_type]','','simple',true);
        $form .=$this->createRadioButton('bundle','pdata[product_type]','','bundle',false);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSelect('category','pdata[category]',$option1,'',$this->newObj->getcategory());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Manufacturer Cost",'pdata[manufacturer_cost]','',$this->newObj->getmanufacturer_cost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Shipping Cost",'pdata[shipping_cost]','',$this->newObj->getshipping_cost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Total Cost",'pdata[total_cost]','',$this->newObj->gettotal_cost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Price",'pdata[price]','',$this->newObj->getprice());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSelect('Status','pdata[status]',$option2,'',$this->newObj->getstatus());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createCalenderDate('Created At','pdata[created_at]',$this->newObj->getcreated_at());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createCalenderDate('Updated At','pdata[updated_at]',$this->newObj->getupdated_at());
        $form .= '</div>';
        $form .= $this->createSubmitButtton('submit');
        $form .= $this->createHiddenField('pdata[id]', $this->newObj->getid());
        $form .= '</fieldset>';
        $form .= '</form>';
        return $form;
    }

    // public function createTitle(){
    //     $Title = "<h1>{$title}</h1>";
    //     return $Title;
    // }

    public function createTextField($title,$name,$id='',$value=''){
        
            $inputField = '<label for="'. $title .'">'. $title. ':</label>';
            $inputField .= '<input type="text" name="'.$name.'" id="'.$id.'" value="'.$value.'">';
            return $inputField;
    }
    public function createRadioButton($title,$name,$class='',$value='',$checked){
        $button = '<label for="'.$title.'">' .$title.' :</label>';
        $button .= '<input type="radio" name="'.$name.'" class="'.$class.'" value="'.$value.'"';
        $methodName = 'getproduct_type';
        if($this->newObj->{$methodName}() == $value||$checked){
            $button .= 'checked>';
        }
        return $button;
    }
    public function createSubmitButtton($value,$name=''){
        $submit = '<input type="submit" value="'.$value.'" name="'.$name.'">';
        return $submit;
    }

    public function createCalenderDate($title,$name,$value='',$id=''){
        $date = '<label for="'.$title.'">'.$title.' :</label>';
        $date .= '<input type="Date" id="'.$id.'" name="'.$name.'" value="'.$value.'"></inPut>';
        return $date;
    }

    public function createSelect($title,$name,$options=[],$id,$selected){
        $select = '<label for="'.$title.'">'.$title.':</label>';
        $select .= '<select name="'.$name.'" id="'.$id.'">';
            foreach($options as $value){
                      $select .= '<option value="'.$value.'"';
                      if($selected==$value){
                          $select .= 'selected';
                      }
                      $select .='>'.$value.'</option>';
            };
        $select .= '</select>';
        return $select;
    }

    public function toHtml(){
        return $this->createForm();
    }

    public function createHiddenField($name, $value = ''){
    $hiddenField = '<input type="hidden" name="' . $name . '" value="' . $value . '">';
    return $hiddenField;
    }
}
?>