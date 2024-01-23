<?php
//the array can be created with two methods
//by array() or []

$arr1 = ["red","yellow","orange"];
$arr2 = ["monday",["tuesday","wednesday"],"thur"];
// $arr2 = ["red"=>7,"violet"=>6,"ora"=>5];
// $merge = array_merge($arr1,$arr2);
// print_r($merge);
// $merge = array_combine($arr2,$arr1);
// print_r($merge);

// $number = range("L","z",10);
// print_r ($number);

//array modification.
// $a=array("a"=>"red","b"=>"green");
// array_push($a,"blue","yellow");
// print_r($a);

// array_push($arr1,$arr2,"hi");
// print_r($arr1);

//array_pop this deletes the last element of the array
//If array is empty, or is not an array, NULL will be returned.
// array_pop($arr2);
// array_pop($arr2);
// print_r($arr2);

//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.
//in this you can add one or as many as you like.


$a=array("a"=>"red","b"=>"green");


// print_r(array_unshift($a,"blue"));//this returns the int value

// print_r($a);//this prints the array

//the array_shift() removes the first element from the array
// echo array_shift($a)."<br>";//this returns the element which is removed and prints it
// echo array_shift($a)."<br>";
// echo array_shift($a)."<br>";
// echo var_dump(array_shift($a))."<br>";
// print_r ($a);//this prints the final array


//array_splice() Remove elements from an array and replace it with new elements:
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,2,1,$a2);
// print_r($a1)."<br>";
// array_splice($a1,2,-1,$a2);
// print_r($a1)."<br>";
// array_splice($a1,-2,-1,$a2);
// print_r($a1)."<br>";

//array access()
//count($array) it returns the number of elements in the array.
// echo count($arr2,1);//it gves the output of five but array has four elements
//this has two modes 0 and 1 ,0 is default and 1 also counts the recursive multidimension arrays.


//sizeof() is alias of count means it has same function but different name.
//it also returns the number of elements in the array
// echo sizeof($arr2,1);

//array_key_exists() checks that the given key or the index exists in the array
// echo array_key_exists("3",$arr2);//it doesnt give for the multidimensional array for using in multidimensional array we require to use the nested loop or the foreach(): loop


//The array_keys() function returns an array containing the keys.
//array_keys(array, value, strict):
//value	(Optional) You can specify a value, then only the keys with this value are returned
//strict(Optional) Used with the value parameter. Possible values:
            // true - Returns the keys with the specified value, depending on type: the number 5 is not the same as the string "5".
            // false - Default value. Not depending on type, the number 5 is the same as the string "5".
        // $a=array(10,20,30,"10");
        // print_r(array_keys($a,"10",true));

        // $a=array(10,20,30,"10");
        // print_r(array_keys($a,"1",true));//it will return the empty array

//array_values($array):Return all the values of an array (not the keys)
// print_r(array_values($arr2));

//in_array(): it returns the value true or false if the value is present in the array
// echo (var_dump(in_array("red",$a)));
// echo (var_dump(in_array("a",$a)));
// echo (var_dump(in_array("0",$arr2)));

//array_search():this searches the value in the array and returns the index value of the value.
//syntax : array_search(value, array, strict) where strict is same as in the previous examples
// $a=array("a"=>"red","b"=>"green","c"=>"red");
// echo array_search("monday",$arr2);//it returns the first value in the search


//array_reverse returns the array in the reverse order
//array_reverse(array, preserve)
//preserve : Specifies if the function should preserve the keys of the array or not. Possible values: true,false.
// $a=array("Volvo","XC90",array("BMW","Toyota"));
// $reverse=array_reverse($a);
// $preserve=array_reverse($a,true);

// print_r($a);
// print_r($reverse);
// print_r($preserve);//in multidimensional which is array in the array the nested array is not reversed


//array sorting
//sort(): returns the sorted array in the ascending order.
//it sorts the value based on the unicode/ASCII value assigned to them.
$cars = array("Volvo", "bMW", "Toyota");
// sort($arr2);
// print_r($arr2);

// sort($a);
// print_r($a);

// sort($cars);
// print_r($cars);


//rsort : it sorts the elements in the descending order.
// rsort($arr2);
// print_r($arr2);

// rsort($a);
// print_r($a);

// rsort($cars);
// print_r($cars);

//these also has the sorting types whose values are from 0-5
//which are slightly confusing.

//The asort() function sorts an associative array in ascending order, according to the value.
// asort($a);
// print_r($a);
// asort($arr2);
// print_r($arr2);


//The ksort() function sorts an associative array in ascending order, according to the key.
// ksort($arr2);
// print_r($arr2);

// ksort($a);
// print_r($a);

// ksort($cars);
// print_r($cars);

//arsort(): sort the array by values but in the descending order
// krsort(): in this sort the sorting is done by the keys but in descending order.
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// krsort($age);
// print_r($age);

// krsort($arr2);
// print_r($arr2);

// arsort($age);
// print_r($age);

// arsort($arr2);
// print_r($arr2);


//ARRAY FILTERING
//array_filter():Filter the values of an array using a callback function.
//This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.

// function test_odd($var)
// {
// return($var & 1);
// }

// $a1=array(1,3,2,3,4);
// print_r(array_filter($a1,"test_odd"));

//array_map():The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
//You can assign one array to the function, or as many as you like.

// $a1=array("Dog","Cat");
// $a2=array("Puppy","Kitten");
// print_r(array_map(null,$a1,$a2));

// function myfunction($v) 
// {
// $v=strtoupper($v);
//   return $v;
// }
// $a=array("Animal" => "horse", "Type" => "mammal");
// print_r(array_map("myfunction",$a));


//The array_reduce() function sends the values in an array to a user-defined function, and returns a string.
//If the array is empty and initial is not passed, this function returns NULL.
//array_reduce(array, myfunction, initial) initial specifies the initial value passed to this function.
// function myfunction($v1,$v2)
// {
// return $v1 . "-" . $v2;
// }
// $a=array("Dog","Cat","Horse");
// print_r(array_reduce($a,"myfunction",5));


//The array_slice() function returns selected parts of an array.
//If the array have string keys, the returned array will always preserve the keys 
// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,-2,1));
// print_r(array_slice($a,1,2,true));
// print_r(array_slice($a,1,2,false));

//The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.
//If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter 
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
// print_r(array_splice($a1,0,2,$a2));
// print_r($a1);

// array_splice($a1,1,0,$a2);
// print_r($a1);
?>