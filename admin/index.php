<?php include('config.php');?>
<?php include('header.php');?>
<?php
$host ="localhost";
$hostuser="root";
$hostpassword="";
$dbname="test";
$con=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
$cities=mysqli_query($con,"select * from cities");
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <section class="content">
      <div class="container-fluid">
		  
        <div class="row">
			
          <!-- left column -->
          <div class="col-md-6 mx-auto">
            <!-- general form elements -->
            <div class="card card-info ">
              <div class="card-header">
              <h3 class="card-title"><i class="fas fa-clipboard-list"></i>       Register Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name">
                  </div>
					<div class="form-group">
                    <label for="userimage">File input :</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userimage" multiple >
                        <label class="custom-file-label" for="userimage">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Number" name="phone">
                  </div>
					 <div class="form-group">
                    <label for="city">City :</label>
                    <select name="city" id="" class="form-control">
			<?php
				while($cityrow=mysqli_fetch_assoc($cities))
				{
					?>
				<option  selected='selected' value="<?=$cityrow['Name']?>"><?=$cityrow["Name"]?></option>
				<?php
				}
			?>
		</select>
                  </div>
                  
                  <div class="form-group">
                    <label for="gender">Gender :</label><br>
		<input type="radio" name="gender" value="male">male<br>
		<input type="radio" name="gender" value="female" >female
                  </div>
                </div>
                <!-- /.card-body -->

                 <center> <button type="submit" class="btn btn-info " name="register">Add Data</button></center>
               
              </form>
            </div>

          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  
<?php include('footer.php');?>