<?php include('config.php');?>
<?php include('header.php');?>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 auto">
            <div class="card card-secondary">
              <div class="card-header ">
                <h1 class="card-title "><strong>Categories</strong></h1>
				<button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">Add Category</a></button>
              </div>
				 
              <!-- /.card-header -->
              <div class="card-body card-danger">
                <table class="table table-bordered table-hover" border="1">
                  <thead>
                    <tr class="card-dark">
                      <th>Id</th>
                      <th>Category Name</th>
					 <th>Actions</th>
                    </tr>
                  </thead>
					
		<?php

		$result=mysqli_query($conn,"select * from tbl_category");
		if($result->num_rows>0){
			while($row=mysqli_fetch_assoc($result))
			{
				?>
		     <tr>
		        <td><?php echo $row["cat_id"]?></td>
				<td><?php echo $row["cat_name"]?></td>
				 <td><a href="sqlcon.php?catdelid=<?=$row['cat_id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				 
				 <a href="catedit.php?cateditid=<?=$row['cat_id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Add Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="sqlcon.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catname"> Category Name :</label>
                    <input type="text" name="catname" class="form-control" required  placeholder="Enter Category Name">
                  </div>
					
                 <center> <button type="Add Category" class="btn btn-info " name="addcategory">Add Category</button></center>
               
              </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>