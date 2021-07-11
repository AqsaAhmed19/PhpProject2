<?php include('config.php');?>
<?php include('header.php');?>
<?php
$host ="localhost";
$hostuser="root";
$hostpassword="";
$dbname="php_shopping_cart";
$conn=mysqli_connect($host,$hostuser,$hostpassword,$dbname);

?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
          <div class="col-md-4 mx-auto">
            <!-- general form elements -->
            <div class="card card-info ">
              <div class="card-header">
              <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catname"> Category Name :</label>
                    <input type="text" name="catname" class="form-control"  placeholder="Enter Category Name">
                  </div>
					
                 <center> <button type="Add Category" class="btn btn-info " name="addcategory">Add Category</button></center>
               
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