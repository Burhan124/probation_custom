<?php

// $num = "burhan";
// if ($num) {
// 	echo "in if";
// }
// else{
// 	echo "in else";
// }

/* function str_v2($num){
           
        for($i=0; $num[$i] != "" ;$i++);
        return  $i; 
}
        //end of function
        

        echo str_v2("1234");*/


/************************ FUNCTION TO LOWER to upper and upper to lower WORDS ************************/

/*function upperCase($str)
{
    $chars  = str_split($str);

    $result = '';
    
    //loop from 0th character to the last character
    for ($i = 0; $i < count($chars); $i++) {
        //extracting the character and getting its ASCII value
        $ch = ord($chars[$i]);
        
        //if character is a lowercase alphabet then converting 
        //it into an uppercase alphabet
        if ($chars[$i] >= 'A' && $chars[$i] <= 'Z')

            $result .= chr($ch + 32);

        elseif ($chars[$i] >= 'a' && $chars[$i] <= 'z')

            $result .= chr($ch - 32);        
        
        else
            $result .= $chars[$i];
        
    }
    //finally, returning the string
    return $result;
}

//function calling
$text = "helow world";
echo upperCase($text);*/


/************************ FUNCTION TO LOWER to upper and upper to lower WORDS ************************/

/************************ FUNCTION TO LOWER WORDS ************************/

/*function upperCase($str)
{
    $chars  = str_split($str);

    $result = '';
    
    //loop from 0th character to the last character
    for ($i = 0; $i < count($chars); $i++) {
        //extracting the character and getting its ASCII value
        $ch = ord($chars[$i]);
        
        //if character is a lowercase alphabet then converting 
        //it into an uppercase alphabet
        if ($chars[$i] >= 'A' && $chars[$i] <= 'Z')

            $result .= chr($ch + 32);
        
        else
            $result .= $chars[$i];
        
    }
    //finally, returning the string
    return $result;
}

//function calling
$text = "HELLO WORLD";
echo upperCase($text);*/


/************************ FUNCTION TO LOWER WORDS ************************/

/************************ FUNCTION TO UPPERCASE WORDS ************************/

/*function upperCase($str)
{
    $chars  = str_split($str);

    $result = '';
    
    //loop from 0th character to the last character
    for ($i = 0; $i < count($chars); $i++) {
        //extracting the character and getting its ASCII value
        $ch = ord($chars[$i]);
        
        //if character is a lowercase alphabet then converting 
        //it into an uppercase alphabet
        if ($chars[$i] >= 'a' && $chars[$i] <= 'z')

            $result .= chr($ch -32);
        
        else
            $result .= $chars[$i];
        
    }
    //finally, returning the string
    return $result;
}

//function calling
$text = "hello world";
echo upperCase($text);
*/

/************************ FUNCTION TO UPPERCASE WORDS ************************/


/************************ PHP Function 2 Arguments ************************/

/*function nameandbirth($name, $birth) {
echo "Full Name $name and Birth $birth.<br>";
}

nameandbirth("Hege","1975");
nameandbirth("Hege","1975");
nameandbirth("Hege","1975");
nameandbirth("Hege","1975");*/


/************************ PHP Function 2 Arguments ************************/


/************************ PHP Function Arguments ************************/

/*function fullname($name) {
	echo "$name Test.<br>";
}

fullname("ABC");
fullname("ABC");
fullname("ABC");
fullname("ABC");
*/
/************************ PHP Function Arguments ************************/


/************************ PHP Function Arguments ************************/



/************************STATCI Variable ************************/

/*function test () {
	static $x = 2;
	static $y = 1;

	echo $x." * ".$y;

	$y++;


}

test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";*/



/************************STATCI Variable ************************/

/************************Global Variable Array ************************/

/*$x=5;
$y=10;

function test () {
	$GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
}

test ();
echo $y;*/



/************************Global Variable Array ************************/

/************************Global Variable ************************/
/*$x = 5;
$y = 15;

function test() {
	global $x, $y;
	$y= $x+$y;
}

test();

echo $y;*/

/************************Global Variable ************************/


/************************ Local Variable ************************/

/*function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";*/


/************************ Local Variable ************************/


/************************Global Variable ************************/
/*$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
} 

myTest();

echo "<p>Variable x outside function is: $x</p>";

myTest(); 

echo "string"."</br>";

myTest(); 

echo "stringasfasf";*/

/************************Global Variable ************************/

?>