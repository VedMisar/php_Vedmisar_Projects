<?php


$connect = mysqli_connect("localhost","root", "", "Project");

if(!$connect)
{
	echo "Database not connected, contact to system administrators";
}
?>