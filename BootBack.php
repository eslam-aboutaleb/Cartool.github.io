<?php

$admins = array("admin");
$passwords =array("admin");
$UserName = $_GET["UserName"];
$UserPass = $_GET["Userpassword"];


if((in_array($UserName , $admins)) && (in_array($UserPass , $passwords)))
{
	header("Location:fileRecv.html");
}
else
{
	header("Location:BootApp.html");
}