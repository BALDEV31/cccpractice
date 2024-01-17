<?php
// will convert the integers to strings which means auto type checking
// cant mix numbers with strings unless they are in quotes
// $x = "12345abc";
// echo strlen($x);

// str_replace is used to replace the string given with the target string
    // $x = "hello worhellold hellohello";
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


    //implode is used to create a string out of array elements with defined seperator
    //join() is similar to implode
    // $array = ["h","e","l","l","o"];
    // echo implode("+",$array);

    //it is just the opposite of the implode it creates a array from the given string with the given delimiter
    //in this echo is not used but print_r will be used
    // $str ="array1,array2,array3";
    // print_r(explode('+',$str)) ;

    //Converts special characters to HTML entities.
    //htmlspecialchars and htmlentities both are same.
    // $input = '<script>alert("Hello, world!");</script>';
    // $output = htmlspecialchars($input);
    // echo $output;
    

    // $input = '<script>alert("Hello, world!");</script>';
    // $output = htmlentities($input);
    // echo $output;
    
    //str_repeat is used to repeat a string a particular number of times.
    // $str = "hello, ";
    // echo str_repeat($str,5);

    //strrev($string):
    //Reverses a string.
    // $rev = 11234;
    // echo strrev($rev);

    //it randomly shuffles the string
    // $inputString = "Hello, World!";
    // $shuffledString = str_shuffle($inputString);
    // echo $shuffledString;

    // str_split($string, $length): Converts a string to an array, breaking it into smaller chunks.
    // $inputString = "Hello, World!";
    // $arrayOfCharacters = str_split($inputString,5);
    // print_r($arrayOfCharacters);

    
    

?>