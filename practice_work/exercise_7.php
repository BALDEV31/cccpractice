<?php
function fizBuzz($n){
    for($i=1;$i<=$n;$i++){
        $str = "";
        if($i%3==0){
            $str .= "fizz";
        }
            if($i%5==0){
                $str .= "Buzz";
            }
            if(strlen($str)==0){
                echo $i;
            }
            else echo $str;
        echo " ";
    }
}

fizBuzz(100);
?>