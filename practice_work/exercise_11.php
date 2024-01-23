<?php
function sort1(&$arr){
    for($i=0;$i<count($arr)-1;$i++){
        for($j=0;$j<count($arr)-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

function prinArr(&$arr){
    foreach($arr as $a){
        echo $a;
        echo " ";
    }
}

$array1 = [64, 34, 25, 12, 22, 11, 90];
sort1($array1);
prinArr($array1);

?>