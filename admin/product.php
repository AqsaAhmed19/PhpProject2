<?php include('config.php');?>
<?php include('header.php');?>
<?php
$categories=mysqli_query($conn,"select * from tbl_category");
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
              <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Product Name :</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Product Name">
                  </div>
					<div class="form-group">
                    <label for="userimage">Product Image:</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userimage" multiple >
                        <label class="custom-file-label" for="userimage">Choose Image</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="qty">Product Quantity</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Quantity" name="qty">
                  </div>
					 <div class="form-group">
                    <label for="category">Product Category :</label>
                    <select name="category" id="" class="form-control">
			<?php
				while($categoryrow=mysqli_fetch_assoc($categories))
				{
					?>
				<option  selected='selected' value="<?=$categoryrow['cat_name']?>"><?=$categoryrow["cat_name"]?></option>
				<?php
				}
			?>
		</select>
                  </div>
          
                <!-- /.card-body -->

                 <center> <button type="submit" class="btn btn-info " name="Addproduct">Add product</button></center>
               
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