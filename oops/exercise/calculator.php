<?php
class Calculator{
    public function add($a,$b){
        return $a + $b;
    }
    public function sub($a,$b){
        return $a + $b;
    }
    public function multi($a,$b){
        return $a*$b;
    }
    public function div($a,$b){
        if ($b==0) {
            echo "can't divide by zero";
        }else{
            return $a/$b;
        }
        return;
    }
}

$obj = new Calculator();
echo $obj->add(13,12)."<br>";
echo $obj->sub(13,12)."<br>";
echo $obj->multi(13,12)."<br>";
echo $obj->div(13,12)."<br>";
?>