<?php

//Comparing two strings for similarity by percentage
$string_one = 'This is my essay. I\'m going to be talking about php.';
$string_two = 'This is my essay. I will be talking about the subject php.';
$string_three = 'My essay is about cats.  I\'ll be talking about cats and their colors.';

similar_text($string_one,$string_two,$result);

echo 'The similarity between is, '.$result;

similar_text($string_one,$string_three,$result2);

echo '<br>The similarity between is, '.$result2;

$string1 = 'This is an example string.';
$string_length = strlen($string1);

echo '<br>'.$string_length;

?>
