<?php
function prime($n){
    if($n<=2){
        echo "please enter number greater than 2";
        return;
    }
    for($i=2;$i<=sqrt($n);$i++){
        if($n%$i==0){
            return false;
        }
    }
    return true;
}

echo var_dump(prime(2));
?>