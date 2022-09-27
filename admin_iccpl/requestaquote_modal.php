<?php
include("include/config.php");
?>

<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from team where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle"> Enter Information</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b>  Name </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

  
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Photo </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="file" name="image1" value=="images/team/'.$row['image'].'">
        <img src="images/team/'.$row['image'].'" style="height:150px; width:150px;">
      

       
          
        </div>
      </div>
    </div>

</br>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Designation</b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="designation" type="text" value="'.$row['designation'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
       
      </div>
      </br>
      
  </div>
</br>
    </div>
  </div>
  <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit1">Save changes</button>
                            </div>

  ';
  }
  
  if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
   
    $file=$_FILES['image1']['name'];  
    $file_tmp=$_FILES['image1']['tmp_name'];
   
   
    $sql="UPDATE `team` SET `name`='$name',`designation`='$designation',`image`='$file' WHERE id='$id'";

    if (mysqli_query($conn, $sql)){
      header("location:requestaquote.php");
   } else {
      echo "connection failed !";
   }
  }

  ?>