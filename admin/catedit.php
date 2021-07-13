<?php include('config.php');?>
<?php include('header.php');?>

<?php

	  $cat_id=$_GET["cateditid"];
	  $result=mysqli_query($conn,"select * from tbl_category where cat_id=$cat_id");
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
            <h1>Update Category</h1>
          </div>
          <div class="col-sm-6 ">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Category</li>
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
                <h3 class="card-title text-center"><i class="fas fa-user-edit"></i>  Update Cateegory</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				
              <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
					  <input type="hidden" name="cat_id" value="<?=$row['cat_id']?>">
                    <label for="catname">Category Name</label>
                    <input type="text" name="catname" class="form-control"  placeholder="Enter Category" value="<?=$row['cat_name']?>">
                  </div>
					 <center>  <button type="submit" class="btn btn-info" name="editcat">Edit</button></center>
               
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