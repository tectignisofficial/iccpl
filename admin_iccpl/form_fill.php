<?php
include("include/config.php");

?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Bootstrap Tables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- END: Page CSS-->

    <style>
        .btn-outline-warning {
            background-color: #f1cc8361;
            color: #f39015;
            font-weight: 500;
            border: 2px solid #f39015;
            padding: 8px 25px;
            border-radius: 50px;
        }

        .btn-outline-warning:hover {
            background-color: #ff9d24;
            color: #fff;
        }
        .card-head{
            padding:30px;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include"include/header.php";?>
    <!-- END: Header-->
    <?php include"include/sidebar.php";?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- <div class="content-overlay"></div> -->
        <!-- <div class="header-navbar-shadow"></div> -->
        <!-- <div class="content-wrapper container-xxl p-0"> -->
 <main id="main">
        <div class="main mb-3">
            <div class="">
                <div class="card">
                    <div class="card-head">
                        <div>
                            <div class="divmainheader">
                                <h2 class="divhead divhead1">Request a quote</h2>
                            </div>

                        </div>
                        <!-- <div class="divTitle1"><span class="divhead divTitle">And get the best rates from the leading
                                logistics providers.</span>

                        </div> -->
                        <form action="../formaction.php" class="divform" method="post" enctype="multipart/form-data">
                            <div class="divformhead divformwidth">
                                <h3 class="divhead divformheading">Enquiry Form</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-2">
                                                <label class="label" for="to"> NAME <span
                                                        style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                    style="background-color:white !important" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-2">
                                                <label class="label" for="to">Designation <span
                                                        style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="designation"
                                                    placeholder="Designation" style="background-color:white !important" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-2">
                                                <label class="label" for="to">Company Name<span
                                                        style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="cname"
                                                    placeholder="Company name"
                                                    style="background-color:white !important" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-2">
                                                <label class="label" for="to">E-MAIL <span
                                                        style="color:red">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="example@gmail.com"
                                                    style="background-color:white !important" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-2">
                                                <label class="label" for="to">Contact No<span
                                                        style="color:red">*</span></label>
                                                <input type="tel" minlength="10" maxlength="10" class="form-control" name="phone" placeholder="phone"
                                                    style="background-color:white !important" required>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="divformmain mt-4">
                                <h3 class="divhead divformheading mb-4">Shipment Details</h3>
                                <div class="divformcargomain">
                                    <div class="d-block">
                                        <div class="divformcargohead"><label class="label">Cargo name<span
                                                    style="color:red">
                                                    *</span></label>
                                        </div>
                                        <div class="divformcargoinput"><span class="divformcargospan divformcargospan1">
                                                <span class="divformcargospan2"></span>
                                                <input class="divforminputControl divforminputControl1 form-control"
                                                    name="cargoname" autocomplete="off" value=""
                                                    placeholder="Enter commodity type " required>

                                            </span>
                                        </div>
                                        <small class="text-muted">eg. Sodium Carbonate, Banana, Meat etc.</small>

                                        <div class="divformcargohead mt-5"><label class="label">HS Code<span
                                                    style="color:red">
                                                    *</span></label>
                                        </div>
                                        <div class="divformcargoinput"><span class="divformcargospan divformcargospan1">
                                                <input type="tel"
                                                    class="divforminputControl divforminputControl1 form-control"
                                                    name="hscode" minlength="10" maxlength="10"
                                                    placeholder="Enter HS code" required></span></span>

                                        </div>
                                        <div class="divformcargohead mt-5"><label class="label">Net Weight<span
                                                    style="color:red">
                                                    *</span></label>
                                        </div>
                                        <!--------- New dropdown --------->

                                        <!-- <div class=""> -->
                                        <!-- <div class="input-group mb-3 ">

                                                <input class="divformcontrolInput form-control" type="text"
                                                    name="hsnetweight" placeholder="Net Weight">
                                                <a type="button"
                                                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </a>
                                                <ul class="dropdown-menu dropmt">
                                                    <li><a class="dropdown-item" href="#" value="mt">mt</a></li>
                                                    <li><a class="dropdown-item" href="#" value="kg">kg</a></li>
                                                </ul>
                                            </div> -->
                                        <!-- </div> -->
                                        <!--------- Old dropdown --------->

                                        <div class="weightdiv parent">
                                            <div class="weightdiv1"><input class="divformcontrolInput" id="netWeight"
                                                    type="number" name="hscodenetweight" placeholder="Net Weight"  required>
                                            </div><span class="mt">
                                                <select name="hscodenetweightmt" id="" class="dropmt" required>
                                                    <option  selected>mt/kg</option>
                                                    <option value="mt">mt</option>
                                                    <option value="kg">kg</option>
                                                </select>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="divformhead divformwidth">
                                <h3 class="divhead divformheading">Nature of Cargo</h3>
                                <div class="">
                                    <div class="associatemaindiv">
                                        <div class="assodiv">

                                            <button type="button" class="checklabel buttoncargo Generalcargo">
                                                General Cargo
                                            </button>

                                        </div>
                                        <div class="assodiv">
                                            <button type="button" class="checklabel buttoncargo Perishablecargo">
                                                Perishable Cargo
                                            </button>
                                        </div>
                                        <div class="assodiv">
                                            <button type="button" class="checklabel buttoncargo  Harardouscargo">
                                                Harardous Cargo
                                            </button>
                                        </div>
                                        <div class="assodiv">
                                            <button type="button" class="checklabel buttoncargo ODCcargo">
                                                Over Dimention Cargo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row divformhead divformwidth perishableout">
                                <div class="col-md-6">
                                    <div class="form-group mt-2">
                                        <label class="label">Temperature Maintained <span
                                                style="color:red">*</span></label>
                                        <div class="weightdiv">
                                            <div class="weightdiv1"><input class="divformcontrolInput" type="number"
                                                    name="temperatureRegime" placeholder="0">
                                            </div>
                                            <span class="mt">°C </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="divformhead divformwidth haraout">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="label">IMO Class <span style="color:red">*</span></label>
                                            <select class="form-control" name="imoClass">
                                                <option  selected>Select IMO class</option>
                                                <optgroup label="Class 1: Explosives">
                                                    <option>Subclass 1.1</option>
                                                    <option>Subclass 1.2</option>
                                                    <option>Subclass 1.3</option>
                                                    <option>Subclass 1.4</option>
                                                    <option>Subclass 1.5</option>
                                                    <option>Subclass 1.6</option>
                                                </optgroup>
                                                <optgroup label="Class 2: Gases">
                                                    <option>Subclass 2.1</option>
                                                    <option>Subclass 2.2</option>
                                                    <option>Subclass 2.3</option>
                                                </optgroup>
                                                <optgroup label="Class 3: Flammable liquids.">
                                                    <option>Flammable liquids</option>
                                                </optgroup>
                                                <optgroup label="Class 4: Flammable solids.">
                                                    <option>Subclass 4.1</option>
                                                    <option>Subclass 4.2</option>
                                                    <option>Subclass 4.3</option>
                                                </optgroup>
                                                <optgroup label="Class 5: Oxidizing substances and organic peroxides.">
                                                    <option>Subclass 5.1</option>
                                                    <option>Subclass 5.2</option>
                                                </optgroup>
                                                <optgroup label="Class 6: Toxic substances.">
                                                    <option>Subclass 6.1</option>
                                                    <option>Subclass 6.2</option>
                                                </optgroup>
                                                <optgroup label="Class 7: Radioactive material.">
                                                    <option>Category I</option>
                                                    <option>Category II</option>
                                                    <option>Category III</option>
                                                    <option>Category IV</option>
                                                </optgroup>
                                                <optgroup label="Class 8: Corrosive substances.">
                                                    <option>Corrosive substances.</option>
                                                </optgroup>
                                                <optgroup
                                                    label="Class 9: Miscellaneous dangerous substances and articles.">
                                                    <option>Miscellaneous dangerous substances and articles.</option>
                                                </optgroup>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="label">UN NUMBER <span style="color:red">*</span></label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput" type="text"
                                                        placeholder="0" name="unNumber">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="label">Upload MSDS <span style="color:red">*</span></label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput" type="file"
                                                        name="imagemsds">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="label">Upload IIP</label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput" type="file"
                                                        name="imageiip">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="divformhead divformwidth odcout ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mt-2">
                                            <label class="label">Length </label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput odcLength"
                                                        type="number" name="odcLength" placeholder="0">
                                                </div>
                                                <span class="mt">
                                                    m
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-2">
                                            <label class="label">Breadth </label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput odcwidth"
                                                        type="number" name="odcwidth" placeholder="0">
                                                </div>
                                                <span class="mt">
                                                    m
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-2">
                                            <label class="label">Height</label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput odcheight"
                                                        type="number" name="odcheight" placeholder="0">
                                                </div>
                                                <span class="mt">
                                                    m
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-2">
                                            <label class="label">Gross Weight</label>
                                            <div class="weightdiv">
                                                <div class="weightdiv1"><input class="divformcontrolInput grossweight"
                                                        type="text" name="grossWeight" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="odctotalmtThree" name="odctotalmtThree">
                                    <input type="hidden" class="odctotalm" name="odctotalm">
                                    <div class="col-md-7">
                                        <span class="shiptotal" style="float: right;margin-top: 8%;">Shipment
                                            total:<span class="totalLBH"></span>
                                            m<sup>3</sup>
                                            <span class="totalgross"> 0 </span><span class="kgclass"> mt </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="divformhead Jiye_i"></div>
                            <div class="divformhead divformwidth">
                                <h3 class="divhead divformheading">Mode of Transportation</h3>
                                <div class="NWncKG">
                                    <div class="row">
                                        <div class="col-md-12 fancy-forms">
                                            <!-- <div class="cardbox"> -->
                                            <div class="row">
                                                <div class="">
                                                    <ul class="nav nav-tabs tab1  mt-3 col-md-12" id="myTab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="sea" data-toggle="tab"
                                                                href="#sea_form" role="tab" aria-controls="login"
                                                                aria-selected="true">Sea</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="land" data-toggle="tab"
                                                                href="#land_form" role="tab" aria-controls="land"
                                                                aria-selected="false">Land</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="air" data-toggle="tab"
                                                                href="#air_form" role="tab" aria-controls="air"
                                                                aria-selected="false"></i>Air</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content col-md-12" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="sea_form" role="tabpanel"
                                                        aria-labelledby="sea">
                                                        <div class="fancyformcontainer">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="label" for="email_id">LOAD TYPE
                                                                            <span style="color:red">*</span></label>
                                                                        <select class="form-control trans"
                                                                            name="seaTransport">
                                                                            <option selected >Select Load Type
                                                                            </option>
                                                                            <option value="Full container load  FCL">
                                                                                Full
                                                                                container load FCL</option>
                                                                            <option value="Less container load  LCL">
                                                                                Less
                                                                                container load LCL</option>
                                                                            <option value="Bulk">Bulk Carrier </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="land_form" role="tabpanel"
                                                        aria-labelledby="land">
                                                        <div class="fancyformcontainer">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="label" for="email_id">MEANS OF
                                                                            TRANSportation <span
                                                                                style="color:red">*</span></label>
                                                                        <select class="form-control roadraltrans"
                                                                            name="landtrans">
                                                                            <option selected >Select
                                                                                Transportation</option>
                                                                            <optgroup label="Road">
                                                                                <option>Full truck load FTL</option>
                                                                            </optgroup>
                                                                            <optgroup label="Rail">
                                                                                <option>Full wagon load FWL</option>
                                                                            </optgroup>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="air_form" role="tabpanel"
                                                        aria-labelledby="air">
                                                        <div class="fancyformcontainer">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="label"
                                                                            for="email_id">TRANSPORTATION
                                                                            BY <span style="color:red">*</span></label>
                                                                        <select class="form-control airtrans"
                                                                            name="airtrans">
                                                                            <option selected >Select
                                                                                Transportation</option>
                                                                            <optgroup label="Air">
                                                                                <option>Standard cargo</option>
                                                                                <option>ULD container</option>
                                                                            </optgroup>

                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <!--alltype-->
                                                    <div class="row fullContain">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="email_id">CONTAINER TYPE
                                                                    <span style="color:red">*</span></label>
                                                                <select class="form-control" name="containerType">
                                                                    <option  selected>Select</option>
                                                                    <option value="20'ft Standard">20'ft Standard
                                                                    </option>
                                                                    <option value="40'ft Standard">40'ft Standard
                                                                    </option>
                                                                    <option value="40'ft High-Cube">45'ft High-Cube
                                                                    </option>
                                                                    <option value="20'ft Refrigerated">20'ft
                                                                        Refrigerated</option>
                                                                    <option value="40'ft Refrigerated">40'ft
                                                                        Refrigerated</option>
                                                                    <option value="20'ft Open Top">20'ft Open Top
                                                                    </option>
                                                                    <option value="40'ft Open Top">40'ft Open Top
                                                                    </option>
                                                                    <option value="20'ft Flatrack">20'ft Flatrack
                                                                    </option>
                                                                    <option value="40'ft Flatrack">40'ft Flatrack
                                                                    </option>
                                                                    <option value="20'ft Tank">20'ft ISO Tank</option>
                                                                    <option value="20'ft Flatrack Collapsible">20'ft
                                                                        Flatrack Collapsible</option>
                                                                    <option value="40'ft Flatrack Collapsible">40'ft
                                                                        Flatrack Collapsible</option>
                                                                    <option value="20'ft Platform">20'ft Platform
                                                                    </option>
                                                                    <option value="40'ft Platform">40'ft Platform
                                                                    </option>
                                                                    <option value="45'ft High-Cube">40'ft High-Cube
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="email_id">QUANTITY OF
                                                                    CONTAINERS <span style="color:red">*</span></label>
                                                                <input type="number" class="form-control"
                                                                    name="contaiquantity"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lessContainer">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group mt-4">
                                                                    <label class="checklabel"><span
                                                                            class="checkspan"><input
                                                                                class="checkinput checkseainput"
                                                                                type="checkbox" id="checkseainput"
                                                                                name="by_units"><span
                                                                                class="checktext">By
                                                                                units</span></span></span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group mt-4">
                                                                    or
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group mt-4">
                                                                    <input type="file" class="form-control"
                                                                        name="invoicetype"><small
                                                                        class="text-muted">(Invoice /
                                                                        Package
                                                                        List)</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="checkboxconta" id="checkboxconta">
                                                            <div id="newRow">
                                                                <div class="row calculate">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mt-4">
                                                                            <label class="dimlabel"><span
                                                                                    class="dimspan">Dimensions of
                                                                                    Box</span>
                                                                                <div class="dimdiv">
                                                                                    <div class="weightdiv1"><span
                                                                                            class="weightdiv1"
                                                                                            style="max-width: initial;">
                                                                                            <input
                                                                                                class="diminput length"
                                                                                                type="number"
                                                                                                name="dimensions.length"
                                                                                                placeholder="length"
                                                                                                value="">
                                                                                            <span
                                                                                                class="divcross">x</span></span><span
                                                                                            class="weightdiv1">
                                                                                            <input
                                                                                                class="diminput width"
                                                                                                type="number"
                                                                                                name="dimensions.width"
                                                                                                placeholder="width"
                                                                                                value=""><span
                                                                                                class="divcross">X</span></span><span
                                                                                            class="weightdiv1">
                                                                                            <input
                                                                                                class="diminput height"
                                                                                                type="number"
                                                                                                name="dimensions.height"
                                                                                                placeholder="height"
                                                                                                value=""></span></div>
                                                                                    <span class="mt">
                                                                                        m
                                                                                    </span>
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group mt-4">
                                                                            <label class="label" for="email_id">Number
                                                                                of
                                                                                Box<span
                                                                                    style="color:red">*</span></label></label>
                                                                            <div class="weightdiv">
                                                                                <div class="weightdiv1"><input
                                                                                        class="divformcontrolInput qty"
                                                                                        type="text" name="cargoWeight"
                                                                                        placeholder="no of boxes">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group mt-4">
                                                                            <label class="label" for="email_id">Weight
                                                                                of
                                                                                Box<span
                                                                                    style="color:red">*</span></label></label>
                                                                            <div class="weightdiv">
                                                                                <div class="weightdiv1"><input
                                                                                        class="divformcontrolInput boxweight"
                                                                                        type="text" name="cargoWeight"
                                                                                        placeholder="Weight">
                                                                                </div>
                                                                                <span class="mt">
                                                                                    mt
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" class="bal">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="lbhnomtTotal"
                                                                class="lbhnomtTotal">
                                                            <input type="hidden" name="lbhnomtotal" class="lbhnomtotal">
                                                            <div class="totalship mt-2 mb-3">
                                                                <button type="button" class="add addnewrow"><span style="">+
                                                                        &nbsp;</span>Add</button>
                                                                <span class="shiptotal">Shipment total:<span
                                                                        class="totalwh"> 0</span><span
                                                                        class="Symbol">m</span>
                                                                    <sup>3</sup> <span class="totalweig"> 0 </span><span
                                                                        class="kgclass"> mt </span></span>
                                                            </div>
                                                        </div>
                                                        <div class="row weightch">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-4">
                                                                    <label class="label weightChangeName"
                                                                        for="email_id">Weight of
                                                                        Box<span
                                                                            style="color:red">*</span></label></label>
                                                                    <div class="weightdiv parent1">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput"
                                                                                id="weightOfBox" type="text"
                                                                                name="lclWeightOfBox">
                                                                        </div><span class="mt">
                                                                            <select name="lclWeightOfBoxmt" id=""
                                                                                class="dropmt">
                                                                                <option  selected>mt/kg</option>
                                                                                <option value="mt">mt</option>
                                                                                <option value="kg">kg</option>
                                                                            </select>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-4">
                                                                    <label class="label volumeChangeName"
                                                                        for="email_id">Volume<span
                                                                            style="color:red">*</span></label></label>
                                                                    <div class="weightdiv parent2">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput" type="text"
                                                                                name="lclHeight" id="volume">
                                                                        </div><span class="mt">
                                                                            m <sub>3</sub>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bulkcontainer">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Vessel Type</label>
                                                                    <select class="form-control" name="vesseltype">
                                                                        <option  selected>Select Vessel Type</option>
                                                                        <option value="Asphalt carriers">
                                                                            Asphalt carriers
                                                                        </option>
                                                                        <option value="Chemical tankers">
                                                                            Chemical tankers
                                                                        </option>
                                                                        <option value="Crude carriers">
                                                                            Crude carriers
                                                                        </option>
                                                                        <option value="Gas carriers">
                                                                            Gas carriers
                                                                        </option>
                                                                        <option value="RoRo ">
                                                                            RoRo </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Gross Weight<span
                                                                            style="color:red">*</span></label>
                                                                    <div class="weightdiv">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput" type="text"
                                                                                name="grossWeightShip"
                                                                                placeholder="Gross weight">
                                                                        </div>
                                                                        <span class="mt">
                                                                            <select name="grossWeightShipmt" id=""
                                                                                class="dropmt">
                                                                                <option selected >kg/mt</option>
                                                                                <option value="kg">kg</option>
                                                                                <option value="mt">mt</option>
                                                                            </select>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Loading Rate </label>
                                                                    <div class="weightdiv">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput" type="text"
                                                                                name="loadingRate">
                                                                        </div>
                                                                        <span class="mt">
                                                                            mt
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Discharge Rate</label>
                                                                    <div class="weightdiv">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput" type="text"
                                                                                name="dischargeRate">
                                                                        </div>
                                                                        <span class="mt">
                                                                            mt
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fulltruck">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Vehicle/Trailer Type</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Vehicleshiptype" placeholder="2т - 14м³">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Number of Trucks<span
                                                                            style="color:red">*</span></label>
                                                                    <div class="weightdiv">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput"
                                                                                type="number" name="truckquantity"
                                                                                placeholder="no of Trucks">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fullwagon">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Wagon Type <span
                                                                            style="color:red">*</span></label>

                                                                    <input type="text" class="form-control"
                                                                        name="wagontype">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <label class="label">Number of Wagons<span
                                                                            style="color:red">*</span></label>
                                                                    <div class="weightdiv">
                                                                        <div class="weightdiv1"><input
                                                                                class="divformcontrolInput"
                                                                                type="number" name="no_of_wagon"
                                                                                placeholder="no of wagons">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row uldContainer">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="email_id">CONTAINER TYPE
                                                                    <span style="color:red">*</span></label>

                                                                <input type="text" class="form-control"
                                                                    name="airContType" placeholder="Demi">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="email_id">QUANTITY OF
                                                                    CONTAINERS <span style="color:red">*</span></label>
                                                                <input type="number" class="form-control"
                                                                    name="airquantityOfCont"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--alltype-->

                                                    <!--alltype-->
                                                    <div class="row seafrom">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label">Port Of Loading <span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="fromPortOfLoad" placeholder="Port,Country"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="to">Port Of Dispatch <span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="toPortOfLoad" placeholder="Port,Country"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row roadfrom">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label">Pick up Location <span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="frompick_up" placeholder="Pincode,City"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="to">Dispatch Location <span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="todispatch" placeholder="Pincode,City"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="to">Upload Invoice/Packing
                                                                    List <span style="color:red">*</span></label>
                                                                <input type="file" class="form-control"
                                                                    name="uploadInvoicefile"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row railfrom">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label">Loading Station<span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="fromLoadStation" placeholder="Station/ICD"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label" for="to">Discharge Station <span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="todischargeStat" placeholder="Station/ICD"
                                                                    style="background-color:white !important">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-2">
                                                                <label class="label">Pick Up Date<span
                                                                        style="color:red">*</span></label>
                                                                <div id="datepicker" class="input-group date"
                                                                    data-date-format="mm-dd-yyyy">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="Select Date" name="pickUpDate" required/>
                                                                    <span class="input-group-addon"><i
                                                                            class="glyphicon glyphicon-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group mt-2">
                                                                <label class="label">Additional Information</label>
                                                                <textarea name="additional" id=""
                                                                    class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row checkfactory">
                                                        <div class="col-md-12">
                                                            <div class="associatemaindiv">
                                                                <div class="assodiv">
                                                                    <label class="checklabel py-1"><span
                                                                            class="checkspan"><input class="checkinput "
                                                                                type="checkbox" value="Factory
                                                                                Stuffing" name="Stuffing[]"><span
                                                                                class="checktext">Factory
                                                                                Stuffing</span></span></label>

                                                                </div>
                                                                <div class="assodiv">
                                                                    <label class="checklabel py-1"><span
                                                                            class="checkspan"><input class="checkinput"
                                                                                type="checkbox" value="Dock
                                                                                Stuffing" name="Stuffing[]"><span
                                                                                class="checktext">Dock
                                                                                Stuffing</span></span></label>
                                                                </div>
                                                                <div class="assodiv">
                                                                    <label class="checklabel py-1"><span
                                                                            class="checkspan"><input class="checkinput"
                                                                                type="checkbox" value="On the
                                                                                Wheel" name="Stuffing[]"><span
                                                                                class="checktext">On the
                                                                                Wheel</span></span></label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--alltype-->
                                                </div>
                                            </div>
                                            <!-- 	</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divformhead divformwidth associatedNone">
                                <h3 class="divhead divformheading">Integrated Services</h3>
                                <div class="">
                                    <div class="associatemaindiv">
                                        <div class="assodiv mt-3">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput checkservices" type="checkbox"
                                                        name="services[]" value="Insurance"><span class="checktext">Insurance</span></span></label>

                                        </div>
                                        <div class="assodiv mt-3 warHous">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput" value="Warehouse" type="checkbox" name="services[]"><span
                                                        class="checktext" >Warehouse</span></span></label>
                                        </div>
                                        <div class="assodiv mt-3 insSer">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput" value="Inspection Services" type="checkbox" name="services[]"><span
                                                        class="checktext">Inspection Services</span></span></label>
                                        </div>
                                        <div class="assodiv mt-3 certificate">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput" type="checkbox" value="Certification" name="services[]"><span
                                                        class="checktext">Certification</span></span></label>
                                        </div>
                                        <div class="assodiv mt-3 roadTransportation">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput" type="checkbox" value="Road Transport" name="services[]"><span
                                                        class="checktext">Road Transport</span></span></label>
                                        </div>
                                        <div class="assodiv mt-3">
                                            <label class="checklabel py-1"><span class="checkspan"><input
                                                        class="checkinput" type="checkbox"  value="Customs clearance" name="services[]"><span
                                                        class="checktext">Customs clearance</span></span></label>
                                        </div>
                                    </div>
                                    <div class="row invoiceAmt">
                                        <div class="col-md-6">
                                            <div class="form-group mt-4">
                                                <label class="label" for="email_id">Invoice Amount <span
                                                        style="color:red">*</span></label>
                                                <div class="weightdiv">
                                                    <div class="weightdiv1"><input class="divformcontrolInput"
                                                            type="text" name="invoiceAmtW" placeholder="0" value="">
                                                    </div><span class="mt"><select name="invoiced" id="" class="dropmt">
                                                        <option  selected>USD/INR</option>
                                                            <option value="USD">USD</option>
                                                            <option value="INR">INR</option>
                                                        </select></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divformhead divformwidth">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-warning" name="adminsend" value="Submit">
                                </div>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
       
    </main>
        <!-- </div> -->
    </div>
    <!-- edit customer -->
   
    <!--/ edit customer -->
    </div>
    <!-- view customer end -->
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include"include/footer.php";?>
    <!-- END: Footer-->
    
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <!-- END: Page JS-->
    <!-- END: Page JS-->


    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="assets/form_jquery.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
 <script>
            $(document).on("click", "#view", function () {
            let formmodal = $(this).data('id');
            $.ajax({
            url: 'enquiry_modal.php',
            type: 'post',
            data: {formmodal: formmodal},
            success: function(data){ 
              $('#body').html(data);
              $('#addNewCard').modal('show'); 
            }
          });
          });
          </script>

<script>
        $('#netWeight')
            .focus(function () {
                $('.parent').addClass('focused');
            })
            .blur(function () {
                $('.parent').removeClass('focused');
            });

        $('#weightOfBox')
            .focus(function () {
                $('.parent1').addClass('focused');
            })
            .blur(function () {
                $('.parent1').removeClass('focused');
            });

        $('#volume')
            .focus(function () {
                $('.parent2').addClass('focused');
            })
            .blur(function () {
                $('.parent2').removeClass('focused');
            });
    </script>
</body>
<!-- END: Body-->

</html>