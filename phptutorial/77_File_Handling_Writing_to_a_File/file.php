<?php

$handle = fopen('names.txt','w');

fwrite($handle, 'Alex'."\n");
fwrite($handle, 'Billy');

fclose($handle);

echo 'Written.';

?>