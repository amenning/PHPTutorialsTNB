<?php

$filename_delete = 'filetodelete.txt';
$filename_rename = 'filetorename.txt';
$rand = rand(10000,99999);

if(rename($filename_rename, $rand.'txt')){
	echo 'File '.$filename_rename.' has been renamed to <strong>'.$rand.'.txt</strong>';
}else{
	echo 'Error renaming.';
}

if (@unlink($filename_delete)){
	echo 'File <strong>'.$filename_delete.'</strong> has been deleted.';
}else{
	echo 'File cannot be deleted.';
}

?>