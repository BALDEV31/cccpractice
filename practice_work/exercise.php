<?php
//if $a is 10% higher than $b then $b is how much lower than $a
$b=100;
$higherpercent = 10/100;
$a= ($higherpercent*$b) + $b;
$result = round(($b-$a)/$a,4)*100;
echo abs($result);
?>