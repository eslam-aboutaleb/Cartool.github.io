/* ************************************************ */
/*	Author	:	Eslam Ehab Aboutaleb				*/
/*	Date	:	25/11/2020							*/
/*	Version	:	V01									*/
/* ************************************************ */

<?php
session_start();

$FlashStatus = 0;
$FileDest = 0;

function SendFileLines(){
	/* Maximum file size in kps to recieve */
	$maxFileSize = 50000;

	/* Allowd file extensions */
	$allowedExt = array('hex','txt');

	/* status */
	define("E_NOK",0);
	define("E_OK",1);

	/* Check if submit button is clicked */
	if(isset($_POST['submit']))
	{
		/* Save file informations */
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		
		/* Save the extension of the file */
		$fileExt = explode('.',$fileName);
		/* Convert the extension to lower case */
		$fileActualExt = strtolower(end($fileExt));
		
		/* Check if the extension is allowed */
		if(in_array($fileActualExt,$allowedExt)){
			/* Check if there is no any errors */
			if($fileError === 0){
				/* Check if the file size is acceptable */
				if($fileSize < $maxFileSize){
					/* Assign an unique ID for the file */
					$fileNameNew = uniqid('',true).".".$fileActualExt;
					/* The directory where the files are uploaded */
					$fileDestination = 'Uploads/'.$fileNameNew;
					/* Upload the file from the temp place to the server */
					move_uploaded_file($fileTmpName,$fileDestination);
					$_SESSION['FileDest'] = $fileDestination;
					header("Location:fileProcess.php");
				}
				else{
					#File is too big
					header("Location:fileRecvFileIsBigError.html");
				}
			}
			else{
				#error message
				header("Location:fileRecvNothingUploaded");
			}
		}
		else{
			#uploaded wrong extension
			
			header("Location:fileRecvWrongExtError.html");
					
		}
	}
}
SendFileLines();
?>