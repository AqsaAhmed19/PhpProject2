<?php
session_start();
$hostname="localhost";
$hostusername="root";
$hostpassword="";
$dbname="php_shopping_cart";
$conn=mysqli_connect($hostname,$hostusername,$hostpassword,$dbname);
if(!$conn)
{
	echo mysqli_error($conn);
	exit();
}