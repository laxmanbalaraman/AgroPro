<?php   
session_start();  
include 'config.php';
//$user = $_SESSION["fuser"];
$user = "Agro12";
$query = "Select quantity from farmer where username='$user'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0)  
    while($row = mysqli_fetch_array($result) )
    {
        $minqty = $row["quantity"];
        break;
    }
    
?>
<html>
    <head>
        <title>Farmer Info</title>
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
<script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=FKsABYVCBipRAILQGnI1sdTiKJGBaWprCApSHYv6IuvnlwS2kOiMp2oob7GYatcIQ_hEZ3yL3whRvfAGifGSHfp53Bmd9ukEarYKU9odm8wiqrOTPiFMkk2Rv6VIii0GjhP2Ya2d4l40105uDQONKw" charset="UTF-8"></script><script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet"/>

  <script>
  function map()
  {
    
    if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
                var lat=position.coords.latitude;
                var long=position.coords.longitude;
                var element = document.getElementById('osm-map');

// Height has to be set. You can do this in CSS too.
element.style = 'height:300px;';

// Create Leaflet map on map element.
var map = L.map(element);

// Add OSM tile leayer to the Leaflet map.
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
// Target's GPS coordinates.
var target = L.latLng(lat,long);

// Set map's center to target with zoom 14.
map.setView(target, 14);

// Place a marker on the same location.
var marker = new L.marker(target, {
    draggable: true,
    autoPan: true
}).addTo(map);

        marker.on("drag", function(e) {
            var marker = e.target;
            var position = marker.getLatLng();
            map.panTo(new L.LatLng(position.lat, position.lng));
            document.getElementById("lati").value=position.lat;
            document.getElementById("longi").value=position.lng; 
        });
        lat2 = 17.29819876772392;
        lng2 = 78.46435546875;
        var target2 = L.latLng(17.29819876772392,78.46435546875);
        new L.marker(target2, {
}).addTo(map);

               
            });
        
        }
 
  } 
    
   
</script>
        <style>

        </style>
        <script>
            function docheck()
            {
                var quan = document.getElementById("q").value;
 
                document.cookie="q="+toString(quan);
           
                    var ch = window.confirm("Are You Sure?");
                    if(ch)
                        window.location.href="update.php";
                    else
                        window.alert("Try Again");
                
            }
        </script>
    </head>
    <body>
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
  background: #469100 !important;
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
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
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
          <a class="nav-link" href="#"> <?php if (isset($_SESSION['username'])) {echo "Welcome "; echo $_SESSION['username'];}?></a>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['username'])) echo'<a class="nav-link" href="logout.php"> Log Out </a>'?>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <br><br>
        <?php 
        $sql = "Select * from image where user='$user'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0)  
        { 
        while($row = mysqli_fetch_array($result) )
            {
            ?>
            <form style="margin:100px;" method="post">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                <img src="wheat.jpg" height="300" width="400" class="img-responsive" /><br />  
                <h4 class="text-info"><?php echo $row["cropname"]; ?></h4>  
                <h4 class="text-danger">Rs<?php echo $row["cropprice"]; ?></h4>  
                <h4 class="text-info">quantity <?php echo $row["croptotalquantity"]; ?>kg</h4>  
                <h4 class="text-info">Minimum qty <?php echo $minqty; ?>kg</h4>   
                <input type="number" min="0" name="quantity" class="form-control" value="1" id="q" />  
                <button type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="" onclick="docheck()">Add to Cart</button> 
            </div>  
            </form>  
            <?php  
            }  
        }   
        ?>

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
    </body>
</html>