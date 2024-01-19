<?php
$name = "John";
$x = str_pad($name,10,"_",STR_PAD_LEFT)."<br>";
$y = str_pad($name,8,"*");
echo $x;
echo $y;
?>