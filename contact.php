<?php 
  // Check if the form has been submitted:
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $name = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Create an array for error messages
    $errors = array();

    // Check name
    if (empty($name)) {
      $errors[] = "PLEASE ENTER YOUR NAME!";
    }

    // Check email address
    if (empty($email) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "PLEASE ENTER A VALID EMAIL ADDRESS!";
    }

    // Check subject
    if (empty($subject)) {
      $errors[] = "PLEASE ENTER A SUBJECT!";
    }

    // Check message
    if (empty($message)) {
      $errors[] = "PLEASE ENTER A MESSAGE!";
    }

    if (empty($errors)) {
      // Send the email:
      $body = $_POST['message'];
        mail('jeff@pureautomotiverepair.com', $subject, "From: " . "$email" . "\n" . "You have recieved a new message from $name" . ":" . "\n" . "$body" . "\n", "From: $email");
      
      // Clear the posted values:
      $_POST = array();
    }
  }
  // Refresh page after 3 seconds
  header ('Refresh: 3; url=http://students.washington.edu/jeffma/test/final-project/#/contact/');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/wrench.png">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <!-- Add angular route library here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular-route.js"></script>
    <script src="main.js"></script>
    <link href = "main.css" rel="stylesheet" type = "text/css"/>
    <title>PURE AUTOMOTIVE REPAIR</title>
  </head>
  <body onload='location.href="#anchor"'>
    <header>
      <!-- Nav Bar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a id="tag" href="#/">PURE</a>
            <br/><a id="tag2" href="#/">AUTOMOTIVE REPAIR</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li role="separator" class="divider"><a href="#/"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
              <li><a href="#/about"><span class="glyphicon glyphicon-info-sign"></span> ABOUT</a></li>
              <li><a href="#/services"><span class="glyphicon glyphicon-wrench"></span> SERVICES</a></li>
              <li><a href="#/contact"><span class="glyphicon glyphicon-phone"></span> CONTACT</a></li>
            </ul>
          </div>
        </div>
      </nav> 
    </header>
    <div ng-app="myApp">
      <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 split-display">
      <div class="contact-box">
        <!-- Map -->
        <div id="map">
          <iframe width='80%' height='450px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/jtopasna.4a70938e/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoianRvcGFzbmEiLCJhIjoiNzI1YTRlZTFjNzRjODQ2NzJhYmRiOTkwZTBiZGE4MzYifQ.u0BRAAbAEbGgPF5_nf4Y8g'></iframe>
            <div>
              <h3>1716 SOUTH HANFORD STREET<br/>
                SEATTLE, WASHINGTON 98144<br/>
                <a class="green-text" href="tel:206-510-7007">206.510.7007</a>
              </h3> 
            </div>
            <div><a href="https://www.google.com/maps/place/1716+S+Hanford+St,+Seattle,+WA+98144/@47.575307,-122.309909,17z/data=!3m1!4b1!4m2!3m1!1s0x54906a7ddb0eb14d:0x7b0e2198053d2206" target="_blank"><img src="icons/googlemap.png"/></a></div>
        </div>
      </div>
    </div>
    <div class="col-md-6 split-display">
      <div id="anchor" class="contact-box">
        <?php
          if (!empty($errors)) {
            echo "<br/><br/><br/><br/>";
            foreach ($errors as $msg) {
              echo "<h3> - $msg</h3><br/><br/> \n";
            }
          } else {
            echo "<br/><br/><h3>MESSAGE SENT</h3>";
          }
        ?>
      </div>
    </div>
  </div>
    </div>
  </body>
</html>