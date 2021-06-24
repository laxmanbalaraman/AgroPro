<?php

   ob_start();
?>
<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  </head>
<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">MDB</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#" target="_blank">AgroPro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="Homepage.php" target="_blank">Home</a>
          </li>
          <li class="nav-item">

          </li>
        </ul>

        <!-- Right -->
       

      </div>

    </div>
  </nav> <br><br>
  <!-- Navbar -->

  <!--Carousel Wrapper-->

  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container text-center">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand"> Farmers products display</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn ">
          
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-6   ">
            <?php
   session_start();
   require("config.php");
   ob_start();
   if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
    
  
        $query_new = mysqli_query($con, "SELECT user, cropname,croptotalquantity,cropprice FROM image WHERE user='$user'");
        $row_new = mysqli_fetch_assoc($query_new) ;
          $user= $row_new['user'];
          $cropname = $row_new['cropname'];
          $croptotalquantity = $row_new['croptotalquantity'];
          $cropprice = $row_new['cropprice'];
    
  $query_new= mysqli_query($con, "SELECT carrate,lorryrate,temporate,quantity FROM farmer WHERE username='$user'");
  $row_new1 = mysqli_fetch_assoc($query_new);
    $carrate= $row_new1['carrate'];
    $temporate = $row_new1['temporate'];
    $lorryrate = $row_new1['lorryrate'];
    $minquantity = $row_new1['quantity'];
    $query_new = mysqli_query($con, "SELECT * from image WHERE user='$user'");
    $row_new2 = mysqli_fetch_assoc($query_new);
    $img = $row_new2['filename'];

    

}
?>
            <!--Card-->
            <div class="card ">

              <!--Card image-->
              <div class="view overlay">
                <img src="   wheat.jpg                " width="300" height="400">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5> <?php echo $user?></h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text"> <?php echo $cropname ?>
                    </a>
                  </strong>
                  <p> <?php           echo "<span style='color:blue;'>cropname:</span>";
          echo $cropname; echo "<br>";echo "total quantity of crop:";
          echo $croptotalquantity;echo "<br>";
          echo "crop price for each kg:";
          echo $cropprice; ?> </p>
                  <p> <?php ?> </p>
                  <p> <?php ?> </p>
                  <p> <?php echo "<span style='color:green'>transportation charge for 1 km if car is choosen:</span>";
    echo $carrate;?> </p>
                  <p> <?php echo "<span style='color:green'>transportation charge for 1 km if tempo is choosen:</span>";
    echo $temporate; ?> </p>
                  <p> <?php echo "<span style='color:green'>transportation charge for 1 km if lorry is choosen:</span>";
    echo $lorryrate; ?> </p>
                  <p> <?php echo "<span style='color:green'>Min quantity</span>";
    echo $minquantity;?> </p>
                  
                </h5>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          

        </div>


      </section>
      <!--Section: Products v.3-->

      

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    
    <!--/.Call to action-->

    <hr class="my-4">

    
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Agropro </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
</body>

</html>