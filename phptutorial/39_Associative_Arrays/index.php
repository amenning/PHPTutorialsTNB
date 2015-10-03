<?php

$food = array('Pasta','Pizza','Salad');
echo $food[0].'<br>';
print_r($food);

$food[3]='Fruit';
echo '<br>';
print_r($food);

$foodAssociativeArray = array('Pasta'=>300,'Pizza'=>1000,'Salad'=>150);
echo '<br>';
print_r($foodAssociativeArray);
echo '<br>'.$foodAssociativeArray['Pasta'];


?>
