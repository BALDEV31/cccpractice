<?php
// will convert the integers to strings which means auto type checking
// cant mix numbers with strings unless they are in quotes
// $x = "12345abc";
// echo strlen($x);

// str_replace is used to replace the string given with the target string
    // $x = "hello world";
    // echo str_replace("hello","hi",$x);
    // str_replace($search, $replace, $subject) in this the order should be maintained for the subject

    //strpos(subject,string to be found)
    //by setting offset we can decide from where the searching of index should be there
    // $x = "good, morning ning";
    // echo strpos($x,"ning",10);

    // $x = "hello,everyone how are you";
    // echo substr($x,5,5);
    //in this part the start is inclusive and the end or length is exclusive (it doesnt include it)

    // $x="abcd";
    // $y=strtoupper($x);
    // echo $y;
    // $y=strtolower($x);
    // echo "<br>";
    // echo $y;
    //this code converts the string to upper letters and then back to lower letters


    // $str = "@@@@@Hello, World######";
    // $trimmedStr = trim($str,"#@");
    
    // echo "Original String: '$str'\n";//why in this \n is not printing a new line
    // echo "Trimmed String: '$trimmedStr'";
    //by using this we can trim the string from start and end by providing the seperators to trim by default it is space


    
    

?>