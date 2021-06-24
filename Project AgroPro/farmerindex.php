<?php
   session_start();
   require("config.php");
   ob_start();
   if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
    echo $user;
  }
?>
<!------------------------------------------------------------------->

<!------------------------------------------------------------------->

<script>
    function call(x)
    {
        if(x==0)
        {
            document.getElementById("black").style.display = 'none';

        }
        else 
        {
            document.getElementById("black").style.display = 'block';

            
        }
               
    }


</script>

<!--------------------------------------------------------------------------------->

<html lang="en">
<head>
<meta charset="utf-8">
<title>Get Visitor's Location Using HTML5 Geolocation</title>
<script>
    function showPosition() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
                var lat=position.coords.latitude;
                var long=position.coords.longitude;
                document.getElementById("lati").value=lat;
                document.getElementById("longi").value=long; 
               
            });
          
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    }
</script>
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
    body{
      background-image: url('bgindex.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>
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
              <a class="nav-link" href="Homepage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <?php if (isset($user)) {echo "Welcome "; echo $user;}?></a>
            </li>
            <li class="nav-item">
            <?php if (isset($_SESSION['username'])) echo'<a class="nav-link" href="logout.php"> Log Out </a>'?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container my-5 px-0 z-depth-1">

  <!--Section: Content-->
  <section class="p-5 my-md-5 text-center" 
    style="background-image: url(); background-size: cover; background-position: center center;">



      <div class="row">
        <div class="col-md-6 mx-auto">
          <!-- Material form login -->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- Form -->
              <form class="text-center" method="post" enctype="multipart/form-data" style="color: #757575;" >

                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Farmer Index</h3>

                <!-- Name -->
                <input type="text" id="defaultSubscriptionFormPassword" name="cropname" class="form-control mb-4" placeholder="Cropname">
                <div class="form-outline mb-4">
                  <textarea class="form-control" placeholder="Enter the Farm address"  name="location" id="form4Example3" rows="4"></textarea>
                  <br>
                  <div id="result">
                  <!--Position information will be inserted here-->
               </div>
                <button type="button" onclick="showPosition();">Show Position</button><br><br>
                  <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                  id="ownv" name="ownv" value="ov" onclick="call(1);"
                />
                <label class="form-check-label" for="flexRadioDefault1"> Own vehicle</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                    id="ownv" name="ownv" value="nv" onclick="call(0);"
                  />
                <label class="form-check-label" for="flexRadioDefault1"> No vechicle </label>
                </div>
                </div>
                <div id="black" style="display:none">
                <input type="number" id="defaultSubscriptionFormPassword" min="0" class="form-control mb-4" name="carrate" placeholder="Enter cost of car for one km" step=0.5>
                <input type="number" id="defaultSubscriptionFormPassword" min="0" class="form-control mb-4" name="temporate" placeholder="Enter cost of tempo for one km" step=0.5>
                <input type="number" id="defaultSubscriptionFormPassword" min="0" class="form-control mb-4" name="lorryrate" placeholder="Enter cost of lorry for one km" step=0.5>
                </div>
                <input type="number" name="quantity" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Enter min quantity a shopkeeper should buy in kgs" step=0.5>
                </div>
                <input type="hidden" id="lati" name="latisend">
                <input type="hidden" id="longi" name="longisend">
                Upload image:
                <input id="defaultSubscriptionFormPassword" class="form-control mb-4" type="file" name="uploadfile" value=""/> 
                
                <button type="submit" class="btn btn-outline-orange btn-rounded my-4 waves-effect text-center"  name="sub" >Submit</button>
                
              </form>
              <?php
              if (isset($_POST['sub']))
              {

                  $lati=$_POST['latisend'];
                  $longi=$_POST['longisend'];
                  $carate=$_POST['carrate'];
                  $temprate=$_POST['temporate'];
                  $lorrrate=$_POST['lorryrate'];
                  $qant=$_POST['quantity'];

              $query = "insert into  farmer values('$user','$lati','$longi','$carate','$temprate','$lorrrate','$qant')";
              $query_run = mysqli_query($con, $query);

              }           
              ?>
              <?php
              error_reporting(0); 
              ?> 
              <?php
                $msg = ""; 
                
                // If upload button is clicked ... 
                if (isset($_POST['sub'])) { 

                  $filename = $_FILES["uploadfile"]["name"]; 
                  $tempname = $_FILES["uploadfile"]["tmp_name"];     
                      $folder = "C:/xampp/htdocs/Project AgroPro/image/".$filename; 
                      
                  $db = mysqli_connect("localhost", "root", "", "agropro"); 
                
                      // Get all the submitted data from the form 
                      $sql = "INSERT INTO image  VALUES ('$folder', '$user')"; 
                
                      // Execute query 
                      mysqli_query($db, $sql); 
                        
                      // Now let's move the uploaded image into the folder: image 
                      if (move_uploaded_file($tempname, $folder))  { 
                          $msg = "Image uploaded successfully"; 
                      }else{ 
                          $msg = "Failed to upload image"; 
                    } 
                } 
                $result = mysqli_query($db, "SELECT * FROM image"); 
                

                  if(mysqli_num_rows($result)>0)
                  {
                  //valid
                  $row=mysqli_fetch_assoc($result);
                  $file = $row['filename'];
                  
                  }
                  
              ?> 

            </div>

          </div>
          <!-- Material form login -->
        </div>
      </div>


  </section>
  <!--Section: Content-->


</div>




<form action="" method="post">


<!---------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------->
<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCngQdGoRbJfEhhoDe1ALvCiC9zqNRt3ew&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>
<script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.
let map, infoWindow;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 6,
  });
  infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");
  locationButton.textContent = "Pan to Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}
</script>
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map {
  height: 100%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.custom-map-control-button {
  appearance: button;
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  margin: 10px;
  padding: 0 0.5em;
  height: 40px;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
}
.custom-map-control-button:hover {
  background: #ebebeb;
}
</style>
<!------------------------------------------------->
<a href="https://www.latlong.net/c/?lat=13.001177&long=80.256493" target="_blank">(13.001177, 80.256493)</a>
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
