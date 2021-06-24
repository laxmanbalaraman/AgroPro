<?php
   session_start();
   require("config.php");
   ob_start();
?>
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
<style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }
  
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 100vh;
      }
    }
  
    .top-nav-collapse {
      background-color: #3a7701 !important;
    }
  
    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }
  
    @media (max-width: 991px) {
     .navbar:not(.top-nav-collapse) {
      background: #3a7900  !important;
     }
    }
    
    h1 {
      letter-spacing: 8px;
    }
  
    h5 {
      letter-spacing: 3px;
    }
  
    .hr-light {
      border-top: 3px solid #fff;
      width: 80px;
    }
    .page-footer {
    background-color: #469100 !important;
    }
    .teambox{
      background-color: #e9ffd1 !important;
    }
  </style>
  
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>AgroPro</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shopbuy.php">Buy crop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <?php if (isset($_SESSION['username'])) {echo "Welcome "; echo $_SESSION['username'];}?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <?php if (isset($_SESSION['uname'])) {echo "Welcome "; echo $_SESSION['uname'];}?></a>
            </li>
            <li class="nav-item">
            <?php if (isset($_SESSION['username'])) echo'<a class="nav-link" href="logout.php"> Log Out </a>'?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}'  >
      <video autoplay muted loop id="myVideo">
        <source src="intro.mp4" type="video/mp4">
      </video>
      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center">
              <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                data-wow-delay="0.3s"><strong>The AgroPro</strong></h1>
              <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
              <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Say No To Middlemen</strong></h5>
              <?php if (isset($_SESSION['username']) || isset($_SESSION['uname'])){
                
              }
              else{
                echo '
              <a class="btn btn-outline-white wow fadeInDown" href="loginfarmer.php" data-wow-delay="0.4s">Login as farmer</a>
              <a class="btn btn-outline-white wow fadeInDown" href="loginshopk.php"  data-wow-delay="0.4s">Login as shopkeeper</a>';
              }
              ?>

            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  <!-- Main navigation -->
  <div class="container py-5 my-5 z-depth-1">
  <section class="p-md-3 mx-md-5 text-lg-left">
    <h2 class="font-weight-bold text-center mb-5 pb-3">Features</h2>
    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="fas fa-map-marker-alt fa-3x indigo-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">Locate farmers Easily</h4>
        <p class="text-muted px-2 mb-lg-0">
          Locate any farmer nearby using our system which uses Google api
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="far fa-map pink-text fa-3x mb-4"></i>
        <h4 class="font-weight-bold mb-4">Negotiate Price</h4>
        <p class="text-muted px-2 mb-lg-0">
          our system provides chatbot with which the farmer and shopkeeper can negotiate price.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
        <i class="fas fa-globe-africa fa-3x amber-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">Secure payment</h4>
        <p class="text-muted px-2 mb-md-0">
          Our payment gateway is totally secure and encrypted from any unautorized parties.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
        <i class="fas fa-street-view fa-3x green-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">User Friendly</h4>
        <p class="text-muted px-2 mb-md-0">
          Our website is totally responsive, easy to use and compatible with all types of devices
        </p>
      </div>
    </div>
  </section>
</div>
  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="https://mdbootstrap.com/img/Others/food.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold">Call to action</h3>

          <p class="font-weight-bold">That's a very nice subheading</p>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="font-weight-bold" href="#" >Learn more<i class="fas fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
  <div class="outer-container">
  <div class="container teambox  pt-5 my-5 z-depth-1">
  <section class="p-md-3 mx-md-5 text-center text-lg-left">
    <h2 class="text-center mx-auto font-weight-bold mb-4 pb-2">Our Team</h2>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="dp1.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Vinod B</h6>
            <p class="text-muted">
              <small
                ><i
                  >Back-End developer</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="dp2.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Laxman B</h6>
            <p class="text-muted">
              <small
                ><i
                  >Front-End Developer</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="dp3.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Suraj P</h6>
            <p class="text-muted">
              <small
                ><i
                  >Back-End developer</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small  pt-4">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">
 
    <!-- Grid row -->
    <div class="row p-3" >

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">AgroPro</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
          repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
          harum esse fugiat. Itaque, culpa?</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3 ">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">About Us</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
          commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
          excepturi hic.</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="index.html"> Team AgroPro</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->