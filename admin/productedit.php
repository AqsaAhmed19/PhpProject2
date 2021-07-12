<?php include('header.php');?>

<?php
		$host="localhost";
		$hostuser="root";
		$hostpassword="";
		$dbname="test";
		$con=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
	    $Id=$_GET["editid"];
	$result=mysqli_query($con,"select * from students where Id=$Id");
	if($result->num_rows>0)
	{
		$row=mysqli_fetch_assoc($result);
	}
	else{
		header("location:index.php");
		
	}
	?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data</h1>
          </div>
          <div class="col-sm-6 ">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update UserData</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">

      <!-- Default box -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
			
          <!-- left column -->
          <div class="col-md-6 mx-auto">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center"><i class="fas fa-user-edit"></i>  Update User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				
              <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
					  <input type="hidden" name="Id" value="<?=$row['Id']?>">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name" value="<?=$row['Name']?>">
                  </div>
					<div class="form-group">
                    <label for="userimage">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userimage" multiple value="<?=$row['Files']?>">
                        <label class="custom-file-label" for="userimage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Number" name="phone" value="<?=$row['Phone']?>">
                  </div>
					 <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" id="" class="form-control">
			<option disabled>-- Select City --</option>
    <?php
        //include "fetch.php";  // Using database connection file here
        $cities=mysqli_query($con,"select * from cities");  // Use select query here 
          while($City = mysqli_fetch_array($cities))
        {
			 echo "<option value='". $City['Name'] ."'>" .$City['Name'] ."</option>";  // displaying data in option menu	
     }   	
    ?>  
		</select>
			<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
		$('select[name="city"] option[value="<?=$row['City']?>"]').attr("selected",true);
		</script>
                  </div>
                  
                  <div class="form-group">
                    <label for="gender">Gender :</label><br>
		<input type="radio" <?php if($row["Gender"]=="male"){ echo "checked";}?> name="gender" value="male">male<br>
		<input type="radio" <?php if($row["Gender"]=="female"){ echo "checked";}?> name="gender" value="female" >female
                  </div>
                </div>
                <!-- /.card-body -->

             <center>     <button type="submit" class="btn btn-info" name="edituser">Edit</button></center>
               
              </form>
            </div>

          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
      <!-- /.card -->

    </section>
<?php include('footer.php');?>