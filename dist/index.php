<?php

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Personal Website</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="Styles/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h1>
            Kim Litjens
          </h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutme.html">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myprojects.html">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- main -->
    <div class="container-fluid main ">
      <div class="row ">
        <div class="col-md-6 text-center">
          <h1 id="personName">
            Kim Litjens
          </h1>
          <p></p>
          <p>
            I am looking for a challenging job as a front-end developer at a
            company where I can show my programming talents and develop myself
            even more.
          </p>
        </div>
        <div class="col-md-6">
          <img src="img/myAvatar.png" class="img-fluid" />
        </div>
      </div>
    </div>
    <!--- Footer -->
    <footer class="navbar fixed-bottom">
      <div class="container-fluid "></div>
      <div class="container-fluid ">
        <div class="row text-center col-12 social ">
          <p>Kim Litjens</p>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>

?>