<?php

$time = time();
$time_now = date('D M. d, Y @ H:i:s', $time);
$time_modified = date('D M. d, Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));

echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified;

?>