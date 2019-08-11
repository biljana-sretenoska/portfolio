<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "biljanasretenoska@yahoo.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="img" style="background-image: url(images/author-2.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo"></a></h1>
              <ul>
                <li><a href="index.html"><span><small>01</small>Home</span></a></li>
          
                <li><a href="portfolio.html"><span><small>02</small>Portfolio</span></a></li>
             
                <li class="active"><a href="contact.html"><span><small>03</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/logo.png);"></span>Biljana Sretenoska</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address: <br></span> Skopje, 
                 North Macedonia</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <br>+389 71 829 164</p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:biljanasretenoska@yahoo.com">biljanasretenoska@yahoo.com</a></p>
            </div>
            
          </div>

          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form class ="netlify" action="mail.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
            <img src="images/contact.png" height="400px"  class="col-md-6" id="map"></div>
          </div>
        </div>
      </section>
      <!-- Start Content -->
<main class="page-main page-fullpage main-anim" id="mainpage">
    <!-- Start Home -->
    <div class="section section-home fullscreen-md fp-auto-height-responsive main-home" data-section="home">
    <div class="section-wrapper center-vh dir-col anim">
            <div class="section-content reduced text-center">
                <div class="row">
                    <div class="col-12 col-md-12 text-center">
                           
                            <img src="resources/img/plant-04.png" height="700px" style="position: absolute; bottom: -167px; left: -185px; opacity: 0.3;">
                        <div class="title-desc">
                            <h2 class="display-4 display-title home-title anim-1">Thank You</h2>
                            <h4 class="anim-2 opacity-75">Your Message has been sent
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="btns">
                        <button class="btn btn-outline-white email_b"  id="get-back">
                            <a href="index.html">
                           <span class="txt">Get Back</span>
                           </a>
                        </button>
                    </div>
            </div>
            </div>
    </div>







      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="https://www.facebook.com/sretenoska"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.instagram.com/me_biteee/"><span class="icon-instagram"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.behance.net/biljanasreteno"><span class="icon-behance"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact Me</h2>
                <p class="h3 email"><a href="biljanasretenoska@yahoo.com">biljanasretenoska@yahoo.com</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <a href="https://colorlib.com" target="_blank"></a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>




  