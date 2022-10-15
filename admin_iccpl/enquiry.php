<?php
include("include/config.php");

session_start();
if(!isset($_SESSION['id']))
{                                                                                       
  header("location:login.php");
}
// if(isset($_POST['submit'])){

 
//     $name=$_POST['name'];
//     $company_email=$_POST['company_email'];
//     $contact_no=$_POST['contact_no'];
//     $job_title=$_POST['job_title'];
//     $company=$_POST['company'];
//     $country=$_POST['country'];
//     $state=$_POST['state'];
//     $industry=$_POST['industry'];
//     $meeting_agenda=$_POST['meeting_agenda'];
//     $date=$_POST['date'];
   
    
  
//     $sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`company_email`,`contact_no`,`job_title`,`company`,`country`,`state`,`industry`,`meeting_agenda`) 
//     VALUES ('$name','$company_email','$contact_no','$job_title','$company','$country','$state','$industry','$meeting_agenda')");
//   }

if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from enquiry where id='$id'");
    if($sql=1){
        header("location:enquiry.php");
    }
    }


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
    <title>Admin - Enquiry</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/logo (2).webp">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- END: Page CSS-->


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
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Enquiry</h4>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Name</th>
                                            <th>Company Email</th>
                                            <th>Contact No</th>
                                            <th>Job Title</th>
                                            <th>Company</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>Industry</th>
                                            <th>Meeting Agenda</th>
                                            <th>Meeting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql=mysqli_query($conn,"select * from enquiry");
                                        $count=1;
                                        while($arr=mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $count;?> </td>
                                            <td><?php echo $arr['name'];?> </td>
                                            <td><?php echo $arr['company_email'];?> </td>
                                            <td><?php echo $arr['contact_no'];?> </td>
                                            <td><?php echo $arr['job_title'];?> </td>
                                            <td><?php echo $arr['company'];?> </td>
                                            <td><?php echo $arr['country'];?> </td>
                                            <td><?php echo $arr['state'];?> </td>
                                            <td><?php echo $arr['industry'];?> </td>
                                            <td><?php echo $arr['meeting_agenda'];?> </td>
                                            <th><?php echo $arr['date'];?></th>
                                            <td>
                                                <button type="button" data-id="<?php echo $arr['id'] ?>" class="btn btn-outline-primary edit" data-bs-toggle="modal"> <i class="fas fa-eye"></i>
                                                </button>

                                                <a href="enquiry.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button></a>
                                            </td>
                                        </tr>
                                        <?php $count++;  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

            </div>
        </div>
    </div>





    <!-- edit customer -->
    <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" method="post">

                    <div class="modal-body px-sm-5 mx-50 pb-5" id="body1">

                    </div>

                </form>

            </div>
        </div>
    </div>
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

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

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
        $(document).on('click', '.edit', function () {
            let enquiryModal = $(this).data('id');
            $.ajax({
                url: 'enquiry_modal.php',
                type: 'post',
                data: {
                    enquiryModal: enquiryModal
                },
                success: function (response1) {
                    $('#body1').html(response1);
                    $('#addNewCard').modal('show');
                }
            });
        });
    </script>


</body>
<!-- END: Body-->

</html>