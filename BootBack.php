<?php

$admins = array("admin");
$passwords =array("admin");
if(isset($_GET["UserName"]))
{
	$UserName = $_GET["UserName"];
}
if(isset($_GET["Userpassword"]))
{
	$UserPass = $_GET["Userpassword"];
}

if((in_array($UserName , $admins)) && (in_array($UserPass , $passwords)))
{
	header("Location:BootApp.html");
}
else
{
	header("Location:fileRecv.html");
	
}