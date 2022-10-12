<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $designation=$_POST['designation'];
  $file=$_FILES['image1']['name'];  
  $file_tmp=$_FILES['image1']['tmp_name'];
  
  if(move_uploaded_file($file_tmp,"images/team/".$file)){
    $sql=mysqli_query($conn,"INSERT INTO `team`(`name`,`designation`,`image`) 
    VALUES ('$name','$designation','$file')");
  
  if($sql==1){
      header("location:requestaquote.php");
  }
  else{
      echo 'failed'; 
  }
  
    echo "<script> alert ('New record has been added successfully !');</script>";
 } else {
    echo "<script> alert ('connection failed !');</script>";
 }

  

}

if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from team where id='$id'");
    if($sql=1){
        header("location:requestaquote.php");
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
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Request A Quote</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/logohf.webp">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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
    <!-- END: Page CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

  
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
                                <h4 class="card-title"> Request A Quote</h4>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
        Add 
    </button>
                            </div>
                           
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Designation</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                                    <?php 
                        
                        $sql=mysqli_query($conn,"select * from team");
                        $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <tr>
                                        <td><?php echo $count;?> </td>
                                        <td><?php echo $arr['name'];?> </td>
                                        <td><img src="images/team/<?php echo $arr['image'];?>" style="height:150px; width:150px;"></td>
                                        <td><?php echo $arr['designation'];?> </td>
                                        
                                         <td>
                      

                
                                         <button type="button" data-id="<?php echo $arr['id'] ?>"  class="btn btn-outline-primary edit" data-bs-toggle="modal" data-bs-target="#addNewCard" >
                                         <i data-feather="edit"></i>
                                    </button>

                                    <a href="requestaquote.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-outline-primary"><i data-feather="trash"></i></button></a>


                                 
                                   
                                    

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

               <!-- form User Modal -->
               <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Enter Information</h1>
                                    
                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" method="post" enctype="multipart/form-data">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserFirstName"> Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" data-msg="Please enter your  name" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLastName">Upload Photo</label>
                                        <input type="file" class="form-control" name="image1">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalEditUserName">Designation</label>
                                        <input type="text" id="designation" name="designation" class="form-control"  placeholder="designation" />
                                    </div>
                                    
                                  
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" name="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->
               
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
                            <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" action="requestaquote_modal.php" method="post" >

                            <div class="modal-body px-sm-5 mx-50 pb-5 body1">

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
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>


         <script>
          $(document).ready(function(){
          $('.edit').click(function(){
            let dnkk = $(this).data('id');
           
            $.ajax({
            url: 'requestaquote_modal.php',
            type: 'post',
            data: {dnkk: dnkk},
            success: function(response1){ 
              $('.body1').html(response1);
              $('#addNewCard').modal('show'); 
            }
          });
          });
          });
          </script>


</body>
<!-- END: Body-->

</html>