<?php
function Func(){
	$q = $_REQUEST["q"];

	$FileStatusHandle = fopen('FileStatus.txt','r');
	$Length = (int)fread($FileStatusHandle,filesize('FileStatus.txt'));
	fclose($FileStatusHandle);
	
	$IndexFileHandle = fopen('IndexData.txt','r');
	$ArrIndex = (int)fread($IndexFileHandle,filesize('IndexData.txt'));
	fclose($IndexFileHandle);
	
	$val = round(($ArrIndex/$Length)*100,1);
    
    echo $val;
}

Func();
?>
