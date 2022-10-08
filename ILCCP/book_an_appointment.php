<?php
include('../admin_iccpl/include/config.php');


if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $company_email=$_POST['company_email'];
  $contact_no=$_POST['contact_no'];
  $job_title=$_POST['job_title'];
  $company=$_POST['company'];
  $country=$_POST['country'];
  $industry=$_POST['industry'];
  $date=$_POST['date'];
  $meeting_agenda=$_POST['meeting_agenda'];
  
  
  $sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`company_email`,`contact_no`,`job_title`,`company`,`country`,`industry`,`date`,`meeting_agenda`) 
  VALUES ('$name','$company_email','$contact_no','$job_title','$company','$country','$industry','$date','$meeting_agenda')");

if($sql==1){
    header("location:book_an_appointment.php");
}
else{
    echo 'failed'; 
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book An Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo (2).png" rel="icon">
  <link href="assets/img/logo (2).png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<style>
  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <?php include("include/header.php");?>
  <!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Book An Appointment</h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-12">
            <form method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-12">
                  <!-- <h3 class="text-center mb-5">Contact Us</h3> -->
                </div>
                <div class="row">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="company_email" placeholder="Email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <input type="number" class="form-control" name="contact_no" placeholder="Phone" required>
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="company" placeholder="company Name" required>
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="country" placeholder="Country" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="industry" placeholder="Industry" required>
                </div>
                <div class="col-md-6">
                <input type="date" class="form-control" name="date" required>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <textarea class="form-control" name="meeting_agenda" rows="6" placeholder="Agenda Of Meeting" required></textarea>
                </div>
              </div>
            
                <div class="col-md-12 text-center">
                  <button type="submit" name="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>