<?php
include("include/config.php");
?>

<?php
if(isset($_POST['formmodal'])){
  $id=$_POST['formmodal'];
  $sql=mysqli_query($conn,"select * from request_form where id='$id'");
  $fetch=mysqli_fetch_array($sql);
  echo '<div data-v-aa799a9e="" class="row">
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__942"><label for="cardNumber" class="d-block" id="__BVID__942__BV_label_">Name</label>
          <div><input type="text" id="cardNumber" value="'.$fetch['name'].'" placeholder="0000 0000 0000 0000" class="form-control" readonly>
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__944"><label for="phone" class="d-block"
              id="__BVID__944__BV_label_">Designation</label>
          <div>
              <div role="group" class="input-group">
                  <div class="input-group-prepend">
                  </div><input type="text" id="phone" value="'.$fetch['designation'].'" placeholder="1234 567 8900" class="form-control" readonly>
              </div>
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__946"><label for="date" class="d-block"
              id="__BVID__946__BV_label_">Company Name</label>
          <div><input type="text" id="date" placeholder="YYYY-MM-DD" class="form-control" readonly value="'.$fetch['cname'].'">
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__948"><label for="time" class="d-block"
              id="__BVID__948__BV_label_">Email</label>
          <div><input type="text" id="time" placeholder="hh:mm:ss" class="form-control" readonly value="'.$fetch['email'].'">
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__950"><label for="number" class="d-block"
              id="__BVID__950__BV_label_">Phone</label>
          <div><input type="text" id="number" placeholder="10,000" class="form-control" readonly value="'.$fetch['phone'].'">
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__952"><label for="block" class="d-block"
              id="__BVID__952__BV_label_">Cargo Name</label>
          <div><input type="text" id="block" placeholder="Block [4,3,3]" class="form-control" readonly value="'.$fetch['cargoname'].'">
          </div>
      </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__954"><label for="delimiter" class="d-block"
              id="__BVID__954__BV_label_">HS Code</label>
          <div><input type="text" id="delimiter" placeholder="Delimiter: '.'" class="form-control" readonly value="'.$fetch['hscode'].'">
          </div>
      </div>
  </div>
 
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
      <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
              id="__BVID__958__BV_label_">Net Weight</label>
          <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['hscodenetweight'].$fetch['hscodenetweightmt'].'">
          </div>
      </div>
  </div>';
  if($fetch['temperatureRegime']!=""){
echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
<div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
        id="__BVID__958__BV_label_">Temperature Maintained</label>
    <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['temperatureRegime'].'°C">
    </div>
</div>
</div>';
  }
  if($fetch['imoClass']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
            id="__BVID__958__BV_label_">IMO Class</label>
        <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['imoClass'].'">
        </div>
    </div>
    </div>';
  }
  if($fetch['unNumber']!=""){
        echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
        <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
                id="__BVID__958__BV_label_">UN Number</label>
            <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['unNumber'].'">
            </div>
        </div>
        </div>';
  }
  if($fetch['odctotalmtThree']!=""){
            echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
            <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
                    id="__BVID__958__BV_label_">ODC lxbxh</label>
                <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['odctotalmtThree'].'m3 '.$fetch['odctotalm'].'mt">
                </div>
            </div>
            </div>';
  }
  if($fetch['containerType']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Container Type</label>
        <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['containerType'].'">
        </div>
    </div>
    </div>';
}
if($fetch['contaiquantity']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Quantity Of Containers</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['contaiquantity'].'">
      </div>
  </div>
  </div>';
}
if($fetch['lbhnomtTotal']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block"
          id="__BVID__958__BV_label_">Dimension Of Weight</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['lbhnomtTotal'].'m 3'.$fetch['lbhnomtotal'].'mt">
      </div>
  </div>
  </div>';
}
if($fetch['lclWeightOfBox']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">LCL Weight Of BOx</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['lclWeightOfBox'].'m 3'.$fetch['lclWeightOfBoxmt'].'mt">
      </div>
  </div>
  </div>';
}
if($fetch['lclHeight']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Volume</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['lclHeight'].'m3">
      </div>
  </div>
  </div>';
}
if($fetch['vesseltype']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Vessel Type</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['vesseltype'].'m3">
      </div>
  </div>
  </div>';
}
if($fetch['grossWeightShip']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Gross Weight</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['grossWeightShip'].$fetch['grossWeightShipmt'].'">
      </div>
  </div>
  </div>';
}
if($fetch['loadingRate']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Loading Rate</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['loadingRate'].'mt">
      </div>
  </div>
  </div>';
}
if($fetch['dischargeRate']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Discharge Rate</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['dischargeRate'].'mt">
      </div>
  </div>
  </div>';
}
if($fetch['Vehicleshiptype']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Vehicle/Trailer Type</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['Vehicleshiptype'].'">
      </div>
  </div>
  </div>';
}
if($fetch['truckquantity']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">No Of Trucks</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['truckquantity'].'">
      </div>
  </div>
  </div>';
}
if($fetch['wagontype']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Wagon Type</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['wagontype'].'">
      </div>
  </div>
  </div>';
}
if($fetch['no_of_wagon']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">No Of Wagons</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['no_of_wagon'].'">
      </div>
  </div>
  </div>';
}
if($fetch['airContType']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Air Container Type</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['airContType'].'">
      </div>
  </div>
  </div>';
}
if($fetch['airquantityOfCont']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Quantity Of Container</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['airquantityOfCont'].'">
      </div>
  </div>
  </div>';
}
if($fetch['fromPortOfLoad']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Port Of Load</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['fromPortOfLoad'].'">
      </div>
  </div>
  </div>';
}
if($fetch['toPortOfLoad']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Port Of Dispatch</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['toPortOfLoad'].'">
      </div>
  </div>
  </div>';
}
if($fetch['frompick_up']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Pick up Location</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['frompick_up'].'">
      </div>
  </div>
  </div>';
}
if($fetch['todispatch']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Dispatch Location</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['todispatch'].'">
      </div>
  </div>
  </div>';
}
if($fetch['fromLoadStation']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Loading Station</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['fromLoadStation'].'">
      </div>
  </div>
  </div>';
}
if($fetch['todischargeStat']!=""){
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Discharge Station</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['todischargeStat'].'">
      </div>
  </div>
  </div>';
}
  echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Pick Up Date</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['pickUpDate'].'">
      </div>
  </div>
  </div>
  <div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
  <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Additional Information</label>
      <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['additional'].'">
      </div>
  </div>
  </div>
  ';
  if($fetch['Stuffing']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Check Box</label>
        <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['Stuffing'].'">
        </div>
    </div>
    </div>';
  }
  if($fetch['services']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Integrated Services</label>
        <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['services'].'">
        </div>
    </div>
    </div>';
  }
  if($fetch['invoiceAmtW']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Invoice Amount</label>
        <div><input type="text" id="prefix" class="form-control" readonly value="'.$fetch['invoiceAmtW'].$fetch['invoiced'].'">
        </div>
    </div>
    </div>';
  }
  if($fetch['imagemsds']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Upload MSDS </label>
        <div><a href="../assets/img/form_img/'.$fetch['imagemsds'].'"><img src="../assets/img/form_img/'.$fetch['imagemsds'].'" width="100px" height="100px"></a>
        </div>
    </div>
    </div>';
  }
  if($fetch['imageiip']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Upload IIP </label>
        <div><a href="../assets/img/form_img/'.$fetch['imageiip'].'"><img src="../assets/img/form_img/'.$fetch['imageiip'].'" width="100px" height="100px"></a>
        </div>
    </div>
    </div>';
  }
  if($fetch['invoicetype']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Invoice Type </label>
        <div><a href="../assets/img/form_img/'.$fetch['invoicetype'].'"><img src="../assets/img/form_img/'.$fetch['invoicetype'].'" width="100px" height="100px"></a>
        </div>
    </div>
    </div>';
  }
  if($fetch['uploadInvoicefile']!=""){
    echo '<div data-v-aa799a9e="" class="col-md-6 col-xl-4 mt-2">
    <div role="group" class="form-group" data-v-aa799a9e="" id="__BVID__958"><label for="prefix" class="d-block" id="__BVID__958__BV_label_">Upload Invoice/Package List </label>
        <div><a href="../assets/img/form_img/'.$fetch['uploadInvoicefile'].'"><img src="../assets/img/form_img/'.$fetch['uploadInvoicefile'].'" width="100px" height="100px"></a>
        </div>
    </div>
    </div>';
  }
echo '</div>';
}


if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from request_form where id='$id'");
    if($sql=1){
        header("location:form_data.php");
    }
}

if(isset($_POST['enquiryModal'])){
  $query=mysqli_query($conn,"select * from enquiry where id='".$_POST['enquiryModal']."'");
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