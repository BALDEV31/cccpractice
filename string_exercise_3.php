<?php
$sentence = "The quick brown fox jumps over the lazy dog";
echo strpos($sentence,"fox")."<br>";
$x=strpos($sentence,"cat");
echo var_dump($x)."<br>";
if($x != false){
    echo "the cat is present\n";
}
else echo " the cat is not present\n";

echo substr($sentence,0,20);
?>