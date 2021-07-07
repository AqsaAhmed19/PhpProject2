<?php
$hostname="localhost";
$hostusername="root";
$hostpassword="";
$dbname="test";
$conn=mysqli_connect($hostname,$hostusername,$hostpassword,$dbname);
if(!$conn)
{
	echo mysqli_error($conn);
	exit();
}