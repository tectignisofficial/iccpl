<?php
include("include/config.php");
?>

<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from enquiry where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle">  Information</h1>
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

          <input class="form-control"   value="'.$row['name'].'" data-dtp="dtp_dl6pL" readonly>
          
        </div>
      </div>
    </div>
  </div>
 </br>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Company Email</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['company_email'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>
      
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Contact No</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['contact_no'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>    

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Job Title</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['job_title'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>

 
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Company </b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['company'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Country</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['country'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b>State</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['state'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b>Industry</b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control"  value="'.$row['industry'].'"  data-dtp="dtp_qHHzf" readonly>

</div>
</div>
</div>

</div>
</br>

</div>
</br>
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Meeting Agenda</b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control"  value="'.$row['meeting_agenda'].'"  data-dtp="dtp_qHHzf" readonly>
              
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
                            <button type="submit" class="btn btn-primary" name="submit1">Done</button>
                            </div>

  ';
  }
  
  

  ?>