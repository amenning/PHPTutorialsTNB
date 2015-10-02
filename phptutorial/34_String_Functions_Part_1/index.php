<?php

$string = 'This is an example string.';
$string2 = 'This is an example string .';

//0 returns an integer value with amount of words
//1 returns an array with each word
//2 returns an associative array
//1 with additional argument includes elements such as '.' into words 

$string_word_count0 = str_word_count($string, 0); 
$string_word_count1 = str_word_count($string, 1); 
$string_word_count2 = str_word_count($string, 2); 
$string_word_count1a = str_word_count($string, 1, '.');

$string2_word_count0a = str_word_count($string2, 1, '.');

print_r($string_word_count0);
echo '<br>';
print_r($string_word_count1);
echo '<br>';
print_r($string_word_count2);
echo '<br>';
print_r($string_word_count1a);
echo '<br>';
print_r($string2_word_count0a);


?>
