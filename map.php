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


<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
 </style>



  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body onload="initMap()">

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
          <li class="menu-active"><a href="locate.html">Store Locator</a></li>
          <li><a href="social.html">Social Media</a></li>
          <li><a href="video.html">Video Search</a></li>
          <li><a href="currency.html">Currency Conversion</a></li>
       
         <!-- <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li> -->
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
            <h2>Smart Homes Locator</h2>
            <p>Want to get your hands on the latest Smart Homes, Inc tech? Use our convenient locator to find a store near you.</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Services Section
    ============================-->
    <section id="mapSection" style="height:auto" class="wow fadeInUp">


        <p>Displaying results <?php echo $_POST["radiusInput"]; ?> miles of  <?php echo $_POST["addressInput"]; ?></p>

        <br>

   <!-- ==============================
      Add Map 
   =================================-->
      <div id="map" style="width: 100%; height: 500px"></div>

<br>
 <div>
        <form action="map.php" method="post">
         <label for="addressInput">Search location:</label>
         <input type="text" id="addressInput" name="addressInput" size="15"/>
        <label for="radiusSelect">Radius:</label>
        <select id="radiusSelect" label="Radius" name="radiusInput">
          <option value="50" selected>50mi</option>
          <option value="30">25mi</option>
          <option value="10">10mi</option>
        </select>

        <input type="submit" id="searchButton" value="Search"/>
      </form>
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

  <script src="lib/jquery/jquery.min.js"></script>


<!-- Calculate Distance LatLong -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
<!-- End Distance -->


  <script>
      var map;
      var locationPHP = '<?php echo $_POST["addressInput"]; ?>';
      var radiusPHP = '<?php echo $_POST["radiusInput"]; ?>'; 
      var originPoint;
      var delayInMilliseconds = 1000;

      //alert("trying " + locationPHP);

      
///////////////Start Style//////////////////// 

const mapStyle = [
  {
    "featureType": "administrative",
    "elementType": "all",
    "stylers": [
      {
        "visibility": "on"
      },
      {
        "lightness": 33
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "all",
    "stylers": [
      {
        "color": "#d9e5ec"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b0cdbd"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "on"
      },
      {
        "lightness": 20
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "all",
    "stylers": [
      {
        "lightness": 20
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c5c6c6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e4d7c6"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fbfaf7"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "all",
    "stylers": [
      {
        "visibility": "on"
      },
      {
        "color": "#6b6773"
      }
    ]
  }
];
///////End Style//////////////////////

   function geocodeAddress(geocoder, resultsMap) {
        var address = locationPHP;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var theMarker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });

       originPoint = results[0].geometry.location;
        var circle = new google.maps.Circle({
          map: resultsMap,
          radius: radiusPHP * 1609, 
          strokeWeight: 0,
          fillColor: '#AA0000'
          });
          circle.bindTo('center', theMarker, 'position');
          }

          else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }



 function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          styles: mapStyle,
          center: {lat: 43.618183, lng: -84.234238}
        });


        $.ajax({
                url:'fromJSON.json',
                dataType: "json", 
                success: function(data){


          var geocoder = new google.maps.Geocoder();
          window.onload = geocodeAddress(geocoder, map);

             setTimeout(function() {
                    $.each(data, function(key, data) {
                      var mylatlng = new google.maps.LatLng(data.lat, data.lon);
                       var distance = google.maps.geometry.spherical.computeDistanceBetween (mylatlng, originPoint)/1609.344
                    if (distance < radiusPHP) {
                          var marker = new google.maps.Marker({
                          position: mylatlng,
                          });
                        marker.setMap(map);
                    }
                    });
              }, delayInMilliseconds);
            }
        });
      }


  </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmJ0_YAaSOyxFKql5LFhoaAa9K2EXhX8I&callback=initMap">
    </script>
















  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
