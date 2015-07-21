<?php 
  //header ('Refresh: 10; url=http://students.washington.edu/jeffma/test/final-project/#/contact/');
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
      $errors[] = "Please enter your name!";
    }

    // Check email address
    if (empty($email) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Please enter a valid email address!";
    }

    // Check subject
    if (empty($subject)) {
      $errors[] = "Please enter a subject!";
    }

    // Check message
    if (empty($message)) {
      $errors[] = "Please enter a message!";
    }

    if (empty($errors)) {
      // Send the email:
      $body = $_POST['message'];
        mail('jeff@pureautomotiverepair.com', $subject, "From: " . "$email" . "\n" . "You have recieved a new message from $name" . ":" . "\n" . "$body" . "\n", "From: $email");
      
      // Clear the posted values:
      $_POST = array();
    }
  }
  header ('Refresh: 3; url=http://students.washington.edu/jeffma/test/final-project/#/contact/');
?><!DOCTYPE html>
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
    <!-- animsition CSS -->
    <link rel="stylesheet" href="animsition/dist/css/animsition.min.css">
    <!-- vendor js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- animsition js-->
    <script src="animsition/dist/js/jquery.animsition.min.js"></script>
    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <!-- Add angular route library here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular-route.js"></script>
    <script src="main.js"></script>
    <link href = "main.css" rel="stylesheet" type = "text/css"/>
    <title>PURE AUTOMOTIVE REPAIR</title>
  </head>
  <body>
    <header>
      <!-- Nav Bar -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header animsition">
            <a class="navbar-brand animsition-link " id="tag" href="#/">PURE AUTOMOTIVE REPAIR</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right animsition">
              <li role="separator" class="divider"><a href="#/" class="animsition-link"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="#/about" class="animsition-link"><span class="glyphicon glyphicon-info-sign animsition-link"></span> About</a></li>
              <li><a href="#/services" class="animsition-link"><span class="glyphicon glyphicon-wrench animsition-link"></span> Services</a></li>
              <li><a href="#/contact" class="animsition-link"><span class="glyphicon glyphicon-phone animsition-link"></span> Contact</a></li>
            </ul>
          </div>
        </div>
      </nav> 
    </header>
    <div ng-app="myApp" class="animsition">
      <?php
        if (!empty($errors)) {
          foreach ($errors as $msg) {
            echo " - $msg<br/> \n";
          }
        }
      ?>
      <?php include 'templates/contact.html';?>
    </div>
  </body>
</html>