<?php include('config.php');?>
<?php

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
	$result=mysqli_query($conn,$query);
	if($result)
	{
		//echo 'Thank You';
		$_SESSION['status'] ="Registered Successfull";
		$_SESSION['status_code'] = "success";
		echo '<script>window.location.href="fetch.php"</script>';
	}
	else{
		$_SESSION['status'] ="Data Not Registered";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}

}
if(isset($_GET["delid"])){
	$Id=$_GET["delid"];
	$result = mysqli_query($conn,"delete from students where Id=$Id");
	if($result){
		$_SESSION['status'] ="Deleted Successfull";
		$_SESSION['status_code'] = "success";
		header("location:fetch.php");
	}
	else{
		$_SESSION['status'] ="Data Not Deleted ";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}
	
}

if(isset($_POST["edituser"])){
	$Id=$_POST["Id"];
	$Name=$_POST["name"];
	$Phone=$_POST["phone"];
	$City=$_POST["city"];
	$Gender=$_POST["gender"];
	$result = mysqli_query($conn,"update students set Name='$Name',Phone='$Phone',City='$City',Gender='$Gender' where Id=$Id");
	if($result)
	{
		$_SESSION['status'] ="Updated Successfull";
		$_SESSION['status_code'] = "success";
		header("location:fetch.php");
	}
	else{
		$_SESSION['status'] ="Not Updated";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}
	

}

?>