<?php

$time=time();

setcookie('username','alex',$time+1000);

setcookie('username','alex',$time-1000);

?>