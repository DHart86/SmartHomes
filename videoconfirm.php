<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Smart Homes Inc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="locate.html">Store Locator</a></li>
          <li ><a href="social.html">Social Media</a></li>
          <li class="menu-active"><a href="video.html">Video Search</a></li>
          <li><a href="currency.html">Currency Conversion</a></li>
               </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <hr>
        <hr>
        <div class="row">
          <div class="col-lg-6">
            <h2>Smart Homes Social Media</h2>
            <p>Connect with Smart Homes on the web and get all the lastest accouncements.</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Social Section

      Keys
      DWSo0z5hDjkaWZ0PD8VATF55U (API key)

      FLN2Gee6hbmmIVmsMCjY2NGCpWN42oc3kMhTh5VEhrjpgLTLab (API secret key)



      Access token & access token secret
      1121123177013370882-30lJ5nMmbPqAk5dZ4IL4lRDIrH2WT1 (Access token)

      PH7ghHSf4PgxqY4EQOtdmy3rmPRO7lGwXVfQH0hnfPGqL (Access token secret)
    ============================-->
<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="row">
     <br>

<div class="col-md-12">
       
 
<img src="img/youtube.png" id="bird" style="max-width:200px">
     <h1>Check out these relevant videos!</h1>
     <p>You searched:</p>
     <p id="getVid"> <?php echo $_POST["vidSearch"]; ?></p>
</div>
  </div>
      </div>
    </section>
<section class="results container">

<div class="row" id="search-container">
  <div class="col-sm-12" id="buttons">
    <div id="container" class="container">
      <h1 class="hidden">Search Results</h1>
    </div>
    <div id="results" class="row">
    </div>
    <div class="col-sm-12" id="page" style="padding:20px">
      <button id="prev" class="nexprev hidden">Prev</button>
      <button id="next" class="nexprev hidden">Next</button>
    </div>
  </div>
  
</div>


</section>
    

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Stay up to date on all the latest Smart Homes news.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Questions or Concerns? We'd love to hear from you.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.html">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="locate.html">Store Locator</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="social.html">Social Media</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="video.html">Video Search</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="currency.html">Currency Conversion</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Smart Homes, Inc</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->

<script>
  window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));

</script> 
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
  <!-- <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/jquery/jquery-migrate.min.js"></script> -->
      <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
   <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>


  <script src="lib/bootstrap/js/bootstrap.bundle.min.js" defer></script>
  <script src="lib/easing/easing.min.js" defer></script>
  <script src="lib/superfish/hoverIntent.js" defer></script>
  <script src="lib/superfish/superfish.min.js" defer></script>
  <script src="lib/wow/wow.min.js" defer></script>
  <script src="lib/venobox/venobox.min.js" defer></script>
  <script src="lib/owlcarousel/owl.carousel.min.js" defer></script>


  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js" defer></script>
   <script src="js/bundle_compressed.js" defer></script>
   <script src="js/newVid.js" defer></script>

</body>

</html>