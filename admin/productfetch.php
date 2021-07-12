<?php include('config.php');?>
<?php include('header.php');?>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header ">
                <h1 class="card-title "><strong>Product Data </strong></h1>
				<button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">Add Data</a></button>
              </div>
				 
              <!-- /.card-header -->
              <div class="card-body card-danger">
                <div class="table-responsive ">
                <table class="table table-bordered table-hover " border="1">
                  <thead> 
                    <tr class="card-dark">
                      <th>Id</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Price</th>
					             <th>Product Quantity</th>
					             <th>Product Category</th>
					             <th>Actions</th>
                    </tr>
                  </thead>
					
					<?php
          $host="localhost";
          $hostuser="root";
          $hostpassword="";
          $dbname="php_shopping_cart";
          $conn=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
		$result=mysqli_query($conn,"select *from tbl_product");
		if($result->num_rows>0){
			while($row=mysqli_fetch_assoc($result))
			{
				?>
		     <tr>
		        <td><?php echo $row["product_id"]?></td>
				<td><?php echo $row["product_name"]?></td>
				<td width="150px"><img src="<?=$row['product_image']?>"  alt="" width="70%"></td>
                <td><?php echo $row["product_price"]?></td>
                <td><?php echo $row["product_qty"]?></td>
				<td><?php echo $row["product_category"]?></td>
				 <td><a href="sqlcon.php?delid=<?=$row['product_id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				 
				 <a href="edit.php?editid=<?=$row['product_id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
				 </td>
				 
				  </tr>
		                 <?php
			
			}
		}
		else{
			echo 'No Data Found Yet :';
		}
	
		?>	
                  
                </table>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<?php include('footer.php');?>



<?php
$host ="localhost";
$hostuser="root";
$hostpassword="";
$dbname="php_shopping_cart";
$conn=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
$categories=mysqli_query($conn,"select * from tbl_category");
?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                    <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Product Name :</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Product Name">
                  </div>
					<div class="form-group">
                    <label for="userimage"> Product Image:</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userimage" multiple >
                        <label class="custom-file-label" for="userimage">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Product Price:</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="qty">Product Quantity:</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Quantity" name="qty">
                  </div>
					 <div class="form-group">
                    <label for="category">Product Category:</label>
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
  <center> <button type="submit" class="btn btn-info " name="Addproduct"> Add Product</button></center>
               
              </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>