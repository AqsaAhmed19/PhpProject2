<?php include('config.php');?>
<?php include('header.php');?>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header ">
                <h1 class="card-title "><strong>User Data </strong></h1>
				<button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">Add Data</a></button>
              </div>
				 
              <!-- /.card-header -->
              <div class="card-body card-danger">
                <table class="table table-bordered table-hover" border="1">
                  <thead>
                    <tr class="card-dark">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Files</th>
                      <th>Phone</th>
					             <th>City</th>
					             <th>Gender</th>
					             <th>Actions</th>
                    </tr>
                  </thead>
					
					<?php
		$host="localhost";
		$hostuser="root";
		$hostpassword="";
		$dbname="php_shopping_cart";
		$conn=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
		$result=mysqli_query($conn,"select *from students");
		if($result->num_rows>0){
			while($row=mysqli_fetch_assoc($result))
			{
				?>
		     <tr>
		        <td><?php echo $row["Id"]?></td>
				<td><?php echo $row["Name"]?></td>
				<td width="100px"><img src="<?=$row['Files']?>"  alt="" width="50%"></td>
                <td><?php echo $row["Phone"]?></td>
                <td><?php echo $row["City"]?></td>
				<td><?php echo $row["Gender"]?></td>
				 <td><a href="sqlcon.php?delid=<?=$row['Id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				 
				 <a href="edit.php?editid=<?=$row['Id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
<?php
$host ="localhost";
$hostuser="root";
$hostpassword="";
$dbname="php_shopping_cart";
$conn=mysqli_connect($host,$hostuser,$hostpassword,$dbname);
$cities=mysqli_query($conn,"select * from cities");
?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Add Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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

                 <center> <button type="submit" class="btn btn-info " name="register">Register</button></center>
               
              </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>