<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sannie's Gym</title>

    <!-- Loading core css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Loading custom css to overwrite any conflicting core styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootsrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">  

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Loading core JS -->

    <script src="js/jquery-1.6.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Custom parallax js -->
    <script src="js/init.js"></script>
    <script src="js/contact.js"></script>
  </head>
  
  <body>
    
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <a class="navbar-brand" href="#">
      <!-- Two images, one smaller for mobile, one bigger for bigger screens --> 
       <img class="hidden-xs" src="img/logo.png" alt="">
       <img class="visible-xs" src="img/logosm.png" alt=""> 
     </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      
      
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
       <li> <a href="index.html">Home</a></li>
       <li class="active"><a href="#">Contact us</a></li>
       <li><a href="about.html">About us</a></li>
       <li><a href="health.html">Health &amp; Fitness</a></li>
       <li><a href="services.html">Services </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>



  
<div class="container" style="padding-top:60px;">
<div class="page-header">
  <h1>Contact us</h1>

</div>

 <div id="map-container" class="col-md-8"></div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>    
 
      function init_map() {
        var var_location = new google.maps.LatLng(-33.940089,18.852450);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
        var_marker.setMap(var_map);    
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
</div>

<br>

<div class="container">
  <div class="col-md-4">
  <hr class="featurette-divider hidden-lg">
  <div class=".col-xs-6 .col-sm-4">
    <h1>Our Location</h1>
    <address>
    
    <p class="lead"><a href="#">Sannie's Gym<br>
    32 Dorp street<br> Stellenbosch<br> <em>Western Cape<br><small>South Africa</small></em></a>
    <br>
    <br>
      Email: info@sannies.com<br>
      Phone: 021-853-9182<br>
      Fax: 021-983-7827</p>
      <p>
    </address>
  </div>
</div>
<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

      ?>
  <div class="row">
   <form id="contact-form" class="contact-form" action="contact-form-submission.php" method="POST" role="form">
     <div class="form-group">
      <label for="contact_name">Name</label>
        <div class="input-group">
          <input id="contact_name" type="text" class="form-control" placeholder="Full Name" value="" name="contact_name" required>
          <span class="input-group-addon"></span>
        </div>
        <label for="contact_email">Your Email</label>
        <div class="input-group">
          
          <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Enter Email" required>
          <span class="input-group-addon"></span></div>
     
        </div>
        <div class="form-group">
          <label for="contact_message">Message</label>
          <div class="input-group">
           <textarea name="contact_message" id="contact_message" class="form-control" rows="5" required></textarea>
           <span class="input-group-addon"></span>

          </div>
          <input type="submit" name="submit" id="contact-submit" value="Submit" class="btn btn-info pull-right">&nbsp;
          <input type="reset" class="btn btn-danger btn-large pull-right" value="Reset"/>
        
    
      
         </div>
         </form>
         <div id="response" style="padding-bottom: 50px;">
          

         </div>
        </div>
    </div>
   

    

  <hr />

<br>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <div class="footer navbar-default-bottom">
   <div class="container">
    <p>Designed by Neal Morris</p>

    
  <div class="social-icons">
   <a href="http://www.facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a>
   <a href="http://www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
     &nbsp;<a href="#"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
  </div>
</div>
</div>
   

</body>
</html>
