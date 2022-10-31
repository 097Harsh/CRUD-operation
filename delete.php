<?php

$obj = new mysqli("localhost","root","","crud");
if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}

$id = $_GET["delid"];

$exe = $obj->query("delete from button where id='$id'");

if($exe)
{
	header('location:index.php');
}
else
{
	echo "Error...";
}

?>