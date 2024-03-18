<?php
//if $a is 10% higher than $b then $b is how much lower than $a
// $b=100;
// $higherpercent = 10/100;
// $a= ($higherpercent*$b) + $b;
// $result = round(($b-$a)/$a,4)*100;
// echo abs($result);
$arr = [3, 4, 2, 1];

$sort = sort1($arr);
printa(10);
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

function printa($a){
    // for($i=1;$i<=$a;$i++){
    //     for($j=1 ;$j<=$a;$j++){
    //         echo $i*$j." " ;
    //     }
    //     echo '<br>';
    // }
    for($i= 1,$j=$i+1;$i<=$a;$i++, $j++){
        echo $i*$j.' ';
    }
    echo '<br>';
}
