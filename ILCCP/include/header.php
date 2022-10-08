<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?> 

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets\img\logohf.jpeg" alt="">
        
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">Home</a></li>
          <li><a class="nav-link <?= $page == 'about.php' ? 'active':'' ?>" href="about.php">About</a></li>
          <!-- <li><a href="services.php">Services</a></li> -->
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
          <li><a class="nav-link <?= $page == 'supplychain.php' ? 'active':'' ?>" href=supplychain.php">Supply Chain <br>
           Management Division</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a class="nav-link <?= $page == 'chemicaldivision.php' ? 'active':'' ?>" href="chemicaldivision.php">Chemical Division</a></li>
              <li><a class="nav-link <?= $page == 'agrodivision.php' ? 'active':'' ?>" href="agrodivision.php">Agro Division</a></li>
              <li><a class="nav-link <?= $page == 'project&construction.php' ? 'active':'' ?>" href="project&construction.php">Project And <br>
                 Construction Division</a></li>
            </ul>
          </li>
          <li><a class="nav-link <?= $page == 'blog.php' ? 'active':'' ?>" href="blog.php">Blog</a></li>
          <li><a class="get-a-quote nav-link" <?= $page == '../check.php' ? 'active':'' ?>" href="../check.php">Request A Quote</a></li>
          <li><a class="get-a-quote nav-link" class="nav-link <?= $page == 'book_an_appointment.php' ? 'active':'' ?>" href="book_an_appointment.php">Book An Appointment</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>