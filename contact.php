<?php
include('admin_iccpl/include/config.php');


if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $company_email=$_POST['company_email'];
  $contact_no=$_POST['contact_no'];
  $job_title=$_POST['job_title'];
  $company=$_POST['company'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $industry=$_POST['industry'];
  $date=$_POST['date'];
  $meeting_agenda=$_POST['meeting_agenda'];
  
  
  $sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`company_email`,`contact_no`,`job_title`,`company`,`country`,`state`,`industry`,`date`,`meeting_agenda`) 
  VALUES ('$name','$company_email','$contact_no','$job_title','$company','$country','$state','$industry','$date','$meeting_agenda')");

if($sql==1){
    header("location:contact.php");
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
    <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.8.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include"include/header.php";?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

       

      </div>
    </section><!-- End Breadcrumbs Section -->

   <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15083.038361272487!2d72.99193222167834!3d19.074304893420337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c14a584c05b3%3A0x9732c95501b46eb1!2sAdv.%20Harish%20S.%20Gore!5e0!3m2!1sen!2sin!4v1663233282523!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            </div>
          </div>

         

          <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form  method="post" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="company_email" id="company_email" placeholder="Your Company Email" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" minlength="10" maxlength="10" name="contact_no" id="contact_no" placeholder="Your Conatact Number" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Your Job Title" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="company" id="company" placeholder="Your Company Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="country" id="country" placeholder="Your Country" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="state" id="state" placeholder="Your State" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="industry" id="industry" placeholder="Your Industry" required>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="date" id="date" placeholder="Your Meeting Date" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="meeting_agenda" rows="5" placeholder="Agenda Of Meeting" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include"include/f.php";?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>