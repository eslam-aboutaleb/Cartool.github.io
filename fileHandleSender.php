<?php

	$HexFileHandle = fopen('HexArr.txt','r');
	$HexArr = fread($HexFileHandle,filesize('HexArr.txt'));
	$ArrToSend = explode("\n",$HexArr);
	$length = count($ArrToSend);
	fclose($HexFileHandle);
	
	$IndexFileHandle = fopen('IndexData.txt','r');
	$ArrIndex = fread($IndexFileHandle,filesize("IndexData.txt"));
	fclose($IndexFileHandle);
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$LinesFileHandle = fopen('HexLinesFile.txt','w');
		for($iterator = 0;$iterator < 20;$iterator++)
		{
			fwrite($LinesFileHandle,$ArrToSend[(int)$ArrIndex]."\n");
			(int)$ArrIndex++;
		}
		fclose($LinesFileHandle);
		
		
		$IndexFileHandle = fopen('IndexData.txt','w');
		fwrite($IndexFileHandle,(string)$ArrIndex);
		fclose($IndexFileHandle);
	}
	
	$FileStatusHandle = fopen('FileStatus.txt','w');
	
	fwrite($FileStatusHandle,(string)$length);
	fclose($FileStatusHandle);
	echo $ArrIndex;
?>