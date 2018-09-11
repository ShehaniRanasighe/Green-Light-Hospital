<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Light Hospital
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-inverse navbar-static-top">
         
            <ul class="nav nav-pills">
              <li class="nav-item">
                <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
              </li>
              <li class="nav-item">
                <a class="" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="" href="contactus.php">Contact Us</a>
              </li>
              <li>
                <a class="" href="login.php">Login</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
