<?php
echo "<pre>";
// will convert the integers to strings which means auto type checking
// cant mix numbers with strings unless they are in quotes
//the function will return the length of the string.
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


    // $str = "     @@@Hello, World######";
    // $trimmedStr = trim($str,"#@");
    // echo $str;
    // echo trim($str," @#");
    
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


    // it str_word_count($string):Returns the number of words in a string.
    // $count = "abcde fghi jklmno pqrst wxyz";
    // print_r(str_word_count($count,1));

    // substr_replace($string, $replacement, $start, $length):
    // Replaces a portion of a string with another string.
    
    // this method is used to replacethe string from specific start and end
    //it has the format of string substr_replace ( mixed $string , mixed $replacement , mixed $start , mixed $length) where length is       optional
    // $inputString = "Hello, world! good morning";
    // $replacement = "PHP";
    // $result = substr_replace($inputString, $replacement, 5,1);
    // echo $result;


    //str_pad format is string str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] )
    //where the parameters in the big brackets are optional by default the padding is space
    // $input: The original string that you want to pad.
    // $pad_length: The length to which the string should be padded. If the original string is already longer than this, it will not be truncated.
    // $pad_string: Optional. The string used for padding. The default is a space.
    // $pad_type: Optional. Specifies whether to pad on the left (STR_PAD_LEFT), right (STR_PAD_RIGHT), or both sides (STR_PAD_BOTH). The default is STR_PAD_RIGHT.
        // $inputString = "Hello";
        // $paddedString = str_pad($inputString, 12, "*",STR_PAD_BOTH);
    //when the length is odd the extra string is padded to the right and if even then it is distributed evenly
        // echo $paddedString;



    //strcoll is used to compare the strings it returns the number >0,<0,=0 for the result
    // $str1 = "c";
    // $str2 = "banana";
    // $result = strcoll($str1, $str2);
    // echo $result;

    // The strcspn function in PHP is used to find the length of the initial segment of a string that consists entirely of characters not in a given set.
    // it also contains optional parameters of start and the length.
    // $str1 = "Hel63lo123678";
    // $str2 = "12345";
    // $length = strcspn($str1, $str2);
    // echo "$length";


    //it  is used to perform a case-insensitive search for the first occurrence of a substring within another string. It returns the portion of the haystack string from the start of the needle to the end of the haystack.
    // $haystack = "Hello, world!";
    // $needle = "LO"; 
    // $result = stristr($haystack, $needle); //it also has a optional before needle=true/false by default it is false if true it gives the string before the needle
    // echo $result;

    //ucfirst() is used to capitalize the first character of a string
    //similarly ucwords() is used to capitalize the first character of everyword int he string it also has a delimeter option.
    // $string = "hel+lo, world!";
    // echo ucfirst($string);
    // echo ucwords($string,"+");

echo "<pre>";

?>