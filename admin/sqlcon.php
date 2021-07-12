<?php include('config.php');?>
<?php

//////category data/////
if(isset($_POST["addcategory"])){
	$cat_name=$_POST["catname"];
	$query="INSERT INTO `tbl_category`(`cat_name`) VALUES ('$cat_name')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		//echo 'Thank You';
		$_SESSION['status'] ="Registered Successfull";
		$_SESSION['status_code'] = "success";
		echo '<script>window.location.href="catfetch.php"</script>';
	}
	else{
		$_SESSION['status'] ="Data Not Registered";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}

}

if(isset($_GET["catdelid"])){
	$cat_id=$_GET["catdelid"];
	$result = mysqli_query($conn,"delete from tbl_category where cat_id=$cat_id");
	if($result){
		$_SESSION['status'] ="Deleted Successfull";
		$_SESSION['status_code'] = "success";
		header("location:catfetch.php");
	}
	else{
		$_SESSION['status'] ="Data Not Deleted ";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}
	
}

if(isset($_POST["editcat"])){
	$cat_id =$_POST["cat_id"];
	$cat_name=$_POST["catname"];
	$result = mysqli_query($conn,"update tbl_category set cat_name='$cat_name' where cat_id=$cat_id");
	if($result)
	{
		$_SESSION['status'] ="Updated Successfull";
		$_SESSION['status_code'] = "success";
		header("location:catfetch.php");
	}
	else{
		$_SESSION['status'] ="Not Updated";
		$_SESSION['status_code'] = "error";
		echo"<center>GET SOME ERROR =></center>".mysqli_error($conn);
	}
	

}


//-------Product data---------//
if(isset($_POST["Addproduct"])){
	$product_name=$_POST["name"];
	$ext=explode(".",$_FILES["userimage"]["name"]);
	$filename="img/".md5(date('Y_m_d').rand().time()).".".$ext[1];
	move_uploaded_file($_FILES["userimage"]["tmp_name"],$filename);

	$product_price=$_POST["price"];
	$product_qty=$_POST["qty"];
	$product_category=$_POST["category"];
	//file handling
	
	$query="INSERT INTO `tbl_product`( `product_name`, `product_image`, `product_price`, `product_qty`, `product_category`) VALUES ('$product_name','$filename', '$product_price','$product_qty','$product_category')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		//echo 'Thank You';
		$_SESSION['status'] ="Registered Successfull";
		$_SESSION['status_code'] = "success";
		echo '<script>window.location.href="productfetch.php"</script>';
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