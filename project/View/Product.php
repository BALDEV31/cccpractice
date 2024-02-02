<?php
// print_r($_POST);
class View_Product{
    public function __construct()
    {
        
    }

    public function createForm($title){
        $option1 =['Bar & Game Room','Bedroom','Decor','Dining & Kitchen','Lighting','Living Room','Mattresses','Office','Outdoor'];
        $option2 =['enabled','disabled'];
        $form = '<form action="" method="post">';
        $form .= '<fieldset>';
        $form .= '<legend>'.$this->createTitle($title).'</legend>';
        $form .= '<div>';
        $form .= $this->createTextField("product Name",'pdata[product_name]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("SKU",'pdata[sku]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= '<span>Product Type: </span>';
        $form .=$this->createRadioButton('simple','pdata[product_type]','','simple',true);
        $form .=$this->createRadioButton('bundle','pdata[product_type]','','bundle',false);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSelect('category','pdata[category]',$option1,'','Bedroom');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Manufacturer Cost",'pdata[manufacturer_cost]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Shipping Cost",'pdata[shipping_cost]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Total Cost",'pdata[total_cost]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField("Price",'pdata[price]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSelect('Status','pdata[status]',$option2,'','disabled');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createCalenderDate('Created At','pdata[created_at]');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createCalenderDate('Updated At','pdata[updated_at]');
        $form .= '</div>';
        $form .= $this->createSubmitButtton('submit');
        $form .= '</fieldset>';
        $form .= '</form>';
        return $form;
    }

    public function createTitle($title){
        $Title = "<h1>{$title}</h1>";
        return $Title;
    }

    public function createTextField($title,$name,$id='',$value=''){
            $inputField = '<label for="'. $title .'">'. $title. ':</label>';
            $inputField .= '<input type="text" name="'.$name.'" id="'.$id.'" value="'.$value.'">';
            return $inputField;
    }
    public function createRadioButton($title,$name,$class='',$value='',$checked){
        $button = '<label for="'.$title.'">' .$title.' :</label>';
        $button .= '<input type="radio" name="'.$name.'" class="'.$class.'" value="'.$value.'"';
        if($checked){
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

    public function toHtml($title){
        return $this->createForm($title);
    }
}
?>