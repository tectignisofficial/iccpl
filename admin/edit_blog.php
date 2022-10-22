<?php
include("include/config.php");

if(isset($_POST['submitt'])){
  $id=$_GET['id'];
  $title=$_POST['title'];
  $blog_content=$_POST['blog_content'];
  $category=$_POST['category'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $status=$_POST['status'];

  $file=$_FILES['image']['name'];  
  $file_size=$_FILES['image']['size'];  
  $file_tmp=$_FILES['image']['tmp_name']; 
  $file_type=$_FILES['image']['type'];

  if(move_uploaded_file($file_tmp,"dist/img/blog/".$file)){

    $sql=mysqli_query($conn,"UPDATE `blog` SET `title`='$title',`blog_content`='$blog_content',`category`='$category',`meta_title`='$meta_title',`meta_description`='$meta_description',`status`='$status',`image`='$file' WHERE id='$id'");
    echo $sql;
   if($sql==1){
    header("location:blog_table.php");
}
else{
    echo 'failed'; 
}

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- summernote -->
   <!-- add summernote -->
<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> -->
  <!-- add summernote -->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <?php
include("include/header.php");
include("include/sidebar.php");
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Blog</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Edit Blog</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <form method="post" enctype="multipart/form-data" >
      
      <section class="content">
        <div class="container-fluid">
        <?php 
                      $id=$_GET['id'];
                      $sql=mysqli_query($conn,"select * from `blog` where id='$id'");
                   $count=1;
                       while($arr=mysqli_fetch_array($sql)){
                      ?>
          <div class="row" style="display:flex;">
            <div class="col-8">
              <!-- /.card -->
              <div class="card card-primary">


                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <h5>Title</h5>
                      <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $arr['title'];?>">
                    </div>

                  </div>

                  <div class="form-group ">
                  <h5>Description</h5>
                    <textarea id="summernote" name="blog_content">
                    <?php echo $arr['blog_content'];?>
                     </textarea>
                  </div>



                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Title</label>
                      <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Meta Title" value="<?php echo $arr['meta_title'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Description</label>
                      <input type="text" name="meta_description" class="form-control" id="meta_description "
                        placeholder="Meta Description" value="<?php echo $arr['meta_description'];?>">
                    </div>
                  </div>
                </div>
              </div>
        
            </div>
            <div class="col-4">
              <!-- /.card -->
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <label>Status : </label>
                      <p> <select required class="form-control" name="status" id="Selectstatusblog" value="<?php echo $arr['status'];?>">
                          <option value="" disabled selected hidden>select</option>
                          <option value="1">Publish</option>
                          <option value="0">Draft</option>

                        </select> </p>
                        <button type="submit" class="btn btn-primary" name="submitt" >Submit</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                <div class="form-group row">
                    <div class="col-12">
                      <label>Category : </label>
                      <p> <select required class="form-control" name="category" id="Selectstatusblog" value="<?php echo $arr['category'];?>">
                          <option value="" disabled selected hidden>select</option>
                          <option value="sea">Sea</option>
                          <option value="air">Air</option>
                          <option value="land">Land</option>
                        </select> </p>
                        
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="exampledate">Image</label>
                      <input type="file" name="image" value="<?php echo $arr['image'];?>">

                      <img src="dist/img/blog/<?php echo $arr['image'];?>" style="height:250px; width:250px">

                  </div>
                </div>
              </div>
            </div>


            <!-- /.col -->

            <!-- /.row -->
          </div>
          <?php $count++;   } ?>
        </div>
          <!-- /.container-fluid -->
      </section>
   
</form>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
include("include/footer.php");

?>
    <div class="modal fade" id="dnkModal">
      <div class="modal-dialog">
        <div class="modal-content body1">

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="dnkModal1">
      <div class="modal-dialog">
        <div class="modal-content body1">

        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> -->

      <script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
      
      <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()

          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })
        })
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
      </script>
</body>

</html>