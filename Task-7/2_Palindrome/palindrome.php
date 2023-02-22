<?php
function palindrome($str) {

    $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    $reverseStr = strrev($str);
    if ($str === $reverseStr) {
        echo 'true';
    } else {
        echo 'false';
    }
}

echo palindrome("eye") . "</br>";
echo palindrome("_eye") . "</br>";
echo palindrome("race car") . "</br>";
echo palindrome("not a palindrome") . "</br>"; //false
echo palindrome("A man, a plan, a canal, Panama") . "</br>"; 
echo palindrome("never odd or even") . "</br>"; 
echo palindrome("nope") . "</br>"; //false
echo palindrome("almostsomla") . "</br>"; 
echo palindrome("My age is 0, 0 si ega ym.") . "</br>";
echo palindrome("1 eye for of 1 eye.") . "</br>"; //false
echo palindrome("five|vs|four") . "</br>";  //false
?>