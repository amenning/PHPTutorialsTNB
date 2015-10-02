<?php

$string = 'This is an example string.';
$string2 = 'This is an example string .';
$string3 = 'This is an example string & this is a tutorial.';

//0 returns an integer value with amount of words
//1 returns an array with each word
//2 returns an associative array
//1 with additional argument includes elements such as '.' into words 

$string_word_count0 = str_word_count($string, 0); 
$string_word_count1 = str_word_count($string, 1); 
$string_word_count2 = str_word_count($string, 2); 
$string_word_count1a = str_word_count($string, 1, '.');

$string2_word_count1a = str_word_count($string2, 1, '.');

$string3_word_count1a = str_word_count($string3, 1, '&.');

print_r($string_word_count0);
echo '<br>';
print_r($string_word_count1);
echo '<br>';
print_r($string_word_count2);
echo '<br>';
print_r($string_word_count1a);
echo '<br>';
print_r($string2_word_count1a);
echo '<br>';
print_r($string3_word_count1a);

$string4 = 'This is an example string.';
$string_shuffled =  str_shuffle($string4);
echo '<br>';
echo $string_shuffled;

$string5 = 'abcdefghijklmnop123456789';
$string_shuffled2 =  str_shuffle($string5);
echo '<br>';
echo $string_shuffled2;

$half = substr($string_shuffled2, 0 ,5);
echo '<br>'.$half;

$reverse = strrev($string4);
echo '<br>';
echo $reverse;

?>
