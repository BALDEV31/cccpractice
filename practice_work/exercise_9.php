<?php
function fibonacci($n){
    if($n==1 || $n==2){
        return 1;
    }
    $i = (fibonacci($n-1) + fibonacci($n-2));
    return $i;
}
 
function printfib($n){
    for($i=1;$i<=$n;$i++){
        echo fibonacci($i);
        echo " ";
    }

}
printfib(10);


// function printfib2($n){
//     $arr = [];
//     for($i=0;$i<$n;$i++){
//         if($n<2){
//             $arr[$i]=$i;
//         }
//         else{
//             $arr[$i]=$arr[$i-1]+$arr[$i-2];
//         }
//     }
//     foreach($arr as $a){
//         echo "$a";
//         echo " ";
//     }
// }

// printfib2(100);

?>