<?php

$string = '  This is a " string. ';
$string_trimmed = trim($string); //It will trim the white space from the beginning and end of the string.

$string_slashes = addslashes($string);
echo $string_slashes;

$string2 = '  This is a <img src="image.jpg"> string. ';
$string_slashes2 = htmlentities(addslashes($string2));
echo '<br>'.$string_slashes2;

echo '<br>'.stripslashes($string_slashes2);

?>
