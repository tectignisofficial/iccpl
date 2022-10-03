<?php
include('config.php');
if(isset($_POST['send'])){
$name=mysqli_real_escape_string($conn,$_POST['name']);
$designation=mysqli_real_escape_string($conn,$_POST['designation']);
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$cargoname=mysqli_real_escape_string($conn,$_POST['cargoname']);
$hscode=mysqli_real_escape_string($conn,$_POST['hscode']);
$hscodenetweight=mysqli_real_escape_string($conn,$_POST['hscodenetweight']);
$hscodenetweightmt=mysqli_real_escape_string($conn,$_POST['hscodenetweightmt']);
$temperatureRegime=mysqli_real_escape_string($conn,$_POST['temperatureRegime']);
$imoClass=mysqli_real_escape_string($conn,$_POST['imoClass']);
$unNumber=mysqli_real_escape_string($conn,$_POST['unNumber']);
$imagemsds=$_FILES['imagemsds']['name'];
$imageiip=$_FILES['imageiip']['name'];
$odctotalmtThree=mysqli_real_escape_string($conn,$_POST['odctotalmtThree']);
$odctotalm=mysqli_real_escape_string($conn,$_POST['odctotalm']);
$seaTransport=mysqli_real_escape_string($conn,$_POST['seaTransport']);
// $landtrans=$_POST['landtrans'];
// $airtrans=$_POST['airtrans'];
$containerType=mysqli_real_escape_string($conn,$_POST['containerType']);
$contaiquantity=mysqli_real_escape_string($conn,$_POST['contaiquantity']);
// $by_units=$_POST['by_units'];
$invoicetype=$_FILES['invoicetype']['name'];
$lbhnomtTotal=mysqli_real_escape_string($conn,$_POST['lbhnomtTotal']);
$lbhnomtotal=mysqli_real_escape_string($conn,$_POST['lbhnomtotal']);
$lclWeightOfBox=mysqli_real_escape_string($conn,$_POST['lclWeightOfBox']);
$lclWeightOfBoxmt=mysqli_real_escape_string($conn,$_POST['lclWeightOfBoxmt']);
$lclHeight=mysqli_real_escape_string($conn,$_POST['lclHeight']);
$vesseltype=mysqli_real_escape_string($conn,$_POST['vesseltype']);
$grossWeightShip=mysqli_real_escape_string($conn,$_POST['grossWeightShip']);
$grossWeightShipmt=mysqli_real_escape_string($conn,$_POST['grossWeightShipmt']);
$loadingRate=mysqli_real_escape_string($conn,$_POST['loadingRate']);
$dischargeRate=mysqli_real_escape_string($conn,$_POST['dischargeRate']);
$Vehicleshiptype=mysqli_real_escape_string($conn,$_POST['Vehicleshiptype']);
$truckquantity=mysqli_real_escape_string($conn,$_POST['truckquantity']);
$wagontype=mysqli_real_escape_string($conn,$_POST['wagontype']);
$no_of_wagon=mysqli_real_escape_string($conn,$_POST['no_of_wagon']);
$airContType=mysqli_real_escape_string($conn,$_POST['airContType']);
$airquantityOfCont=mysqli_real_escape_string($conn,$_POST['airquantityOfCont']);
$fromPortOfLoad=mysqli_real_escape_string($conn,$_POST['fromPortOfLoad']);
$toPortOfLoad=mysqli_real_escape_string($conn,$_POST['toPortOfLoad']);
$frompick_up=mysqli_real_escape_string($conn,$_POST['frompick_up']);
$todispatch=mysqli_real_escape_string($conn,$_POST['todispatch']);
$uploadInvoicefile=$_FILES['uploadInvoicefile']['name'];
$fromLoadStation=mysqli_real_escape_string($conn,$_POST['fromLoadStation']);
$todischargeStat=mysqli_real_escape_string($conn,$_POST['todischargeStat']);
$pickUpDate=mysqli_real_escape_string($conn,$_POST['pickUpDate']);
$additional=mysqli_real_escape_string($conn,$_POST['additional']);
$sercheck='';
$stuffcheck='';
$Stuffing=$_POST['Stuffing']; //checkbox
foreach($Stuffing as $stuff){
    $stuffcheck .= $stuff.",";  
}
$services=$_POST['services']; //checkbox
foreach($services as $sev){
    $sercheck .= $sev.",";
}
$invoiceAmtW=mysqli_real_escape_string($conn,$_POST['invoiceAmtW']);
$invoiced=mysqli_real_escape_string($conn,$_POST['invoiced']);
move_uploaded_file($_FILES['imagemsds']['tmp_name'],"assets/img/form_img/".$imagemsds);
move_uploaded_file($_FILES['imageiip']['tmp_name'],"assets/img/form_img/".$imageiip);
move_uploaded_file($_FILES['invoicetype']['tmp_name'],"assets/img/form_img/".$invoicetype);
move_uploaded_file($_FILES['uploadInvoicefile']['tmp_name'],"assets/img/form_img/".$uploadInvoicefile);

$sql=mysqli_query($conn,"INSERT INTO `request_form`(`name`, `designation`, `cname`, `email`, `phone`, `cargoname`, `hscode`, `hscodenetweight`, `hscodenetweightmt`, `temperatureRegime`, `imoClass`, `unNumber`, `imagemsds`, `imageiip`, `odctotalmtThree`, `odctotalm`, `seaTransport`, `landtrans`, `airtrans`, `containerType`, `contaiquantity`, `invoicetype`, `lbhnomtTotal`, `lbhnomtotal`, `lclWeightOfBox`, `lclWeightOfBoxmt`, `lclHeight`, `vesseltype`, `grossWeightShip`, `grossWeightShipmt`, `loadingRate`, `dischargeRate`, `Vehicleshiptype`, `truckquantity`, `wagontype`, `no_of_wagon`, `airContType`, `airquantityOfCont`, `fromPortOfLoad`, `toPortOfLoad`, `frompick_up`, `todispatch`, `uploadInvoicefile`, `fromLoadStation`, `todischargeStat`, `pickUpDate`, `additional`, `Stuffing`, `services`, `invoiceAmtW`, `invoiced`) VALUES ('$name','$designation','$cname','$email','$phone','$cargoname','$hscode','$hscodenetweight','$hscodenetweightmt','$temperatureRegime','$imoClass','$unNumber','$imagemsds','$imageiip','$odctotalmtThree','$odctotalm','$seaTransport','land','air','$containerType','$contaiquantity','$invoicetype','$lbhnomtTotal','$lbhnomtotal','$lclWeightOfBox','$lclWeightOfBoxmt','$lclHeight','$vesseltype','$grossWeightShip','$grossWeightShipmt','$loadingRate','$dischargeRate','$Vehicleshiptype','$truckquantity','$wagontype','$no_of_wagon','$airContType','$airquantityOfCont','$fromPortOfLoad','$toPortOfLoad','$frompick_up','$todispatch','$uploadInvoicefile','$fromLoadStation','$todischargeStat','$pickUpDate','$additional','$stuffcheck ','$sercheck','$invoiceAmtW','$invoiced')");

if($sql==1){
    header('location:check.php');
}
}

if(isset($_POST['adminsend'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $designation=mysqli_real_escape_string($conn,$_POST['designation']);
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $cargoname=mysqli_real_escape_string($conn,$_POST['cargoname']);
    $hscode=mysqli_real_escape_string($conn,$_POST['hscode']);
    $hscodenetweight=mysqli_real_escape_string($conn,$_POST['hscodenetweight']);
    $hscodenetweightmt=mysqli_real_escape_string($conn,$_POST['hscodenetweightmt']);
    $temperatureRegime=mysqli_real_escape_string($conn,$_POST['temperatureRegime']);
    $imoClass=mysqli_real_escape_string($conn,$_POST['imoClass']);
    $unNumber=mysqli_real_escape_string($conn,$_POST['unNumber']);
    $imagemsds=$_FILES['imagemsds']['name'];
    $imageiip=$_FILES['imageiip']['name'];
    $odctotalmtThree=mysqli_real_escape_string($conn,$_POST['odctotalmtThree']);
    $odctotalm=mysqli_real_escape_string($conn,$_POST['odctotalm']);
    $seaTransport=mysqli_real_escape_string($conn,$_POST['seaTransport']);
    // $landtrans=$_POST['landtrans'];
    // $airtrans=$_POST['airtrans'];
    $containerType=mysqli_real_escape_string($conn,$_POST['containerType']);
    $contaiquantity=mysqli_real_escape_string($conn,$_POST['contaiquantity']);
    // $by_units=$_POST['by_units'];
    $invoicetype=$_FILES['invoicetype']['name'];
    $lbhnomtTotal=mysqli_real_escape_string($conn,$_POST['lbhnomtTotal']);
    $lbhnomtotal=mysqli_real_escape_string($conn,$_POST['lbhnomtotal']);
    $lclWeightOfBox=mysqli_real_escape_string($conn,$_POST['lclWeightOfBox']);
    $lclWeightOfBoxmt=mysqli_real_escape_string($conn,$_POST['lclWeightOfBoxmt']);
    $lclHeight=mysqli_real_escape_string($conn,$_POST['lclHeight']);
    $vesseltype=mysqli_real_escape_string($conn,$_POST['vesseltype']);
    $grossWeightShip=mysqli_real_escape_string($conn,$_POST['grossWeightShip']);
    $grossWeightShipmt=mysqli_real_escape_string($conn,$_POST['grossWeightShipmt']);
    $loadingRate=mysqli_real_escape_string($conn,$_POST['loadingRate']);
    $dischargeRate=mysqli_real_escape_string($conn,$_POST['dischargeRate']);
    $Vehicleshiptype=mysqli_real_escape_string($conn,$_POST['Vehicleshiptype']);
    $truckquantity=mysqli_real_escape_string($conn,$_POST['truckquantity']);
    $wagontype=mysqli_real_escape_string($conn,$_POST['wagontype']);
    $no_of_wagon=mysqli_real_escape_string($conn,$_POST['no_of_wagon']);
    $airContType=mysqli_real_escape_string($conn,$_POST['airContType']);
    $airquantityOfCont=mysqli_real_escape_string($conn,$_POST['airquantityOfCont']);
    $fromPortOfLoad=mysqli_real_escape_string($conn,$_POST['fromPortOfLoad']);
    $toPortOfLoad=mysqli_real_escape_string($conn,$_POST['toPortOfLoad']);
    $frompick_up=mysqli_real_escape_string($conn,$_POST['frompick_up']);
    $todispatch=mysqli_real_escape_string($conn,$_POST['todispatch']);
    $uploadInvoicefile=$_FILES['uploadInvoicefile']['name'];
    $fromLoadStation=mysqli_real_escape_string($conn,$_POST['fromLoadStation']);
    $todischargeStat=mysqli_real_escape_string($conn,$_POST['todischargeStat']);
    $pickUpDate=mysqli_real_escape_string($conn,$_POST['pickUpDate']);
    $additional=mysqli_real_escape_string($conn,$_POST['additional']);
    $sercheck='';
    $stuffcheck='';
    $Stuffing=$_POST['Stuffing']; //checkbox
    foreach($Stuffing as $stuff){
        $stuffcheck .= $stuff.",";  
    }
    $services=$_POST['services']; //checkbox
    foreach($services as $sev){
        $sercheck .= $sev.",";
    }
    $invoiceAmtW=mysqli_real_escape_string($conn,$_POST['invoiceAmtW']);
    $invoiced=mysqli_real_escape_string($conn,$_POST['invoiced']);
    move_uploaded_file($_FILES['imagemsds']['tmp_name'],"assets/img/form_img/".$imagemsds);
    move_uploaded_file($_FILES['imageiip']['tmp_name'],"assets/img/form_img/".$imageiip);
    move_uploaded_file($_FILES['invoicetype']['tmp_name'],"assets/img/form_img/".$invoicetype);
    move_uploaded_file($_FILES['uploadInvoicefile']['tmp_name'],"assets/img/form_img/".$uploadInvoicefile);
    
    $sql=mysqli_query($conn,"INSERT INTO `request_form`(`name`, `designation`, `cname`, `email`, `phone`, `cargoname`, `hscode`, `hscodenetweight`, `hscodenetweightmt`, `temperatureRegime`, `imoClass`, `unNumber`, `imagemsds`, `imageiip`, `odctotalmtThree`, `odctotalm`, `seaTransport`, `landtrans`, `airtrans`, `containerType`, `contaiquantity`, `invoicetype`, `lbhnomtTotal`, `lbhnomtotal`, `lclWeightOfBox`, `lclWeightOfBoxmt`, `lclHeight`, `vesseltype`, `grossWeightShip`, `grossWeightShipmt`, `loadingRate`, `dischargeRate`, `Vehicleshiptype`, `truckquantity`, `wagontype`, `no_of_wagon`, `airContType`, `airquantityOfCont`, `fromPortOfLoad`, `toPortOfLoad`, `frompick_up`, `todispatch`, `uploadInvoicefile`, `fromLoadStation`, `todischargeStat`, `pickUpDate`, `additional`, `Stuffing`, `services`, `invoiceAmtW`, `invoiced`) VALUES ('$name','$designation','$cname','$email','$phone','$cargoname','$hscode','$hscodenetweight','$hscodenetweightmt','$temperatureRegime','$imoClass','$unNumber','$imagemsds','$imageiip','$odctotalmtThree','$odctotalm','$seaTransport','land','air','$containerType','$contaiquantity','$invoicetype','$lbhnomtTotal','$lbhnomtotal','$lclWeightOfBox','$lclWeightOfBoxmt','$lclHeight','$vesseltype','$grossWeightShip','$grossWeightShipmt','$loadingRate','$dischargeRate','$Vehicleshiptype','$truckquantity','$wagontype','$no_of_wagon','$airContType','$airquantityOfCont','$fromPortOfLoad','$toPortOfLoad','$frompick_up','$todispatch','$uploadInvoicefile','$fromLoadStation','$todischargeStat','$pickUpDate','$additional','$stuffcheck','$sercheck','$invoiceAmtW','$invoiced')");
    
    if($sql==1){
        header('location:admin_iccpl/form_data.php');
    }
    }


?>