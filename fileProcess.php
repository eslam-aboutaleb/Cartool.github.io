<?php

	session_start();
	
	$HexFileHandle = fopen($_SESSION['FileDest'],'r');
	$HexFileContent = fread($HexFileHandle,filesize($_SESSION['FileDest']));
	fclose($HexFileHandle);
	
	$Index = 0;
	
	$IndexFileHandle = fopen('IndexData.txt','w');
	fwrite($IndexFileHandle,(string)$Index);
	fclose($IndexFileHandle);
	
	$HexArrHandle = fopen('HexArr.txt','w');
	fwrite($HexArrHandle,$HexFileContent);
	fclose($HexArrHandle);
	header("Location:Progress.html");
	
?>