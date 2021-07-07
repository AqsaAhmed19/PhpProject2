<?php
$host="localhost";
$hostuser="root";
$hostpassword="";
$dbname="php_shopping_cart";
$con=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
if(isset($_POST["register"])){
	$Name=$_POST["name"];
	$ext=explode(".",$_FILES["userimage"]["name"]);
	$filename="img/".md5(date('Y_m_d').rand().time()).".".$ext[1];
	move_uploaded_file($_FILES["userimage"]["tmp_name"],$filename);

	$Phone=$_POST["phone"];
	$City=$_POST["city"];
	$Gender=$_POST["gender"];
	//file handling
	
	$query="INSERT INTO `students`( `Name`,`Files`, `Phone`, `City`, `Gender`) VALUES ('$Name','$filename', '$Phone','$City','$Gender')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		//echo 'Thank You';
		echo '<script>window.location.href="fetch.php"</script>';
	}
	else{
		echo"<center>GET SOME ERROR =></center>".mysqli_error($con);
	}

}
elseif(isset($_GET["delid"])){
	$Id=$_GET["delid"];
	mysqli_query($con,"delete from students where Id=$Id");
	header("location:fetch.php");
}

elseif(isset($_POST["edituser"])){
	$Id=$_POST["Id"];
	$Name=$_POST["name"];
	$Phone=$_POST["phone"];
	$City=$_POST["city"];
	$Gender=$_POST["gender"];
	mysqli_query($con,"update students set Name='$Name',Phone='$Phone',City='$City',Gender='$Gender' where Id=$Id");
	header("location:fetch.php");
}

else{
	header("location:fetch.php");
}

?>