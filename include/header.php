<!-- ======= Header ======= -->
<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>  
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">ICCPL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto <?= $page == 'about.php' ? 'active':'' ?>" href="about.php">About</a></li>
          <li><a class="nav-link scrollto <?= $page == 'services.php' ? 'active':'' ?>" href="services.php">Services</a></li>
       
          <li><a class="nav-link scrollto <?= $page == 'blog.php' ? 'active':'' ?>" href="blog.php">Blog</a></li>
         
         
          <li><a class="getstarted scrollto <?= $page == 'check.php' ? 'active':'' ?>" href="Request/check.php">REQUEST A QUOTE
</a></li>
<li><a class="getstarted scrollto <?= $page == 'contact.php' ? 'active':'' ?>" href="contact.php">Book An Appointment</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->