<?php
session_start();
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
      background: #3a7701 !important;
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
      color:white;
    }
  </style>
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
<body><script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=OysbqjmqUTPliZ1Ell4NCdORxYn8oEDgQ1YXcrLfy_1w4Guvn5myY4Yz75U1O2YRI4FbEH9FrFTggH1eF7fwZQ-wEX8xVWh9C4BKRpFY8x8B4SXZt1Q68vMqagQi7W2zs0oV5SgVllojnP-F3t9LjkukVFDjbgrggA4sqiKR7n3tqKiiEWKl0nyARrKwC0uG6_SlqjlqK1ZeG6QrlmKeewBO1kYPucMGUVBD3_D0Q-yuhuOHtOAN2IEGs4KTbViPOTtmsHcb-VAoHfYvqqUJYcFpXGOt3XQ-uVWvMfUbf_6Jx9Zr3wMOZoNSjgHz3X1F7gsCgDcwVDOmdUyX5XDOhg" charset="UTF-8"></script>
<div class="text-center" style="margin: 100px; background-color:white; color:black; border-radius:20px; padding:50px;">
<?php


$fuser = "Agro12";
$quan = $_COOKIE["q"];
include 'config.php';
$sql = "Select * from image where user='$fuser'";
$result = mysqli_query($con,$sql);
$crop = "";
$price  = 0;
if(mysqli_num_rows($result) > 0)  
while($row = mysqli_fetch_array($result) )
    {
        $crop  = $row["cropname"];
        $price  = $row["cropprice"];
        break;
    }

echo '<h2>Crop Price: 200</h2>';
echo '<table><tr><td>Name</td><td>Qty</td><td>Price</td><td>Net Price</td></tr>';


$upsql = "update image set croptotalquantity = croptotalquantity-$quan where username='$fuser'";
$result = mysqli_query($con,$upsql);
?>
<h2>Transportation:</h2>
<?php
$sql = "select carrate,temporate,lorryrate from farmer where username='$fuser'";
$result = mysqli_query($con,$sql);
$c1 = 0;
$c2 = 0;
$c3 = 0;
if(mysqli_num_rows($result) > 0)  
while($row = mysqli_fetch_array($result) )
    {
        if($row["carrate"])
        {
            echo '<h3>Car Rate is :'.$row["carrate"].'</h3>';
            $c1 = $row["carrate"];
        }
        if($row["temporate"])
        {
            echo '<h3>Tempo Rate is :'.$row["temporate"].'</h3>';
            $c2 = $row["temporate"];
        }
        if($row["lorryrate"])
        {
            echo '<h3>Lorry Rate is :'.$row["lorryrate"].'</h3>';
            $c3 = $row["lorryrate"];
        }
    }
?>


  <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=I-ZC419MV4h1V8TXkuN6LSCoAH26MeEtZotv0H99VCsBLpLcGKmhgfKKERVZ6botzfRAbeftyFKvWQTudHUlmpp7MHtHQANcQkLJvWSz0P8kOdIjjJf3LdyDNjoEg7AbD2wVgu8tuBS82rBtj7Yfag" charset="UTF-8"></script><script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
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
L.marker(target).addTo(map);
                document.getElementById("lati").value=lat;
                document.getElementById("longi").value=long; 
                var lat2 = 17.29819876772392;
                var lng2 = 78.46435546875;
                var target2  = L.latLng(17.29819876772392,78.46435546875);
                L.marker(target2).addTo(map);

               
            });
        
        }
 
         } 
     
   
</script>

 
   


<form method = "post">
    <input type="radio" name="choice" value="Car"> car
    <input type="radio" name="choice" value="Tempo"> Tempo
    <input type="radio" name="choice" value="Lorry"> Lorry<br><br>
    <input type="submit" value="Submit!" name="sub">
</form>
<button type="button" onclick="map();">Show Position</button>
<div id="osm-map"></div>
<div id="result">
        <!--Position information will be inserted here-->
    </div>
<?php
if(isset($_POST["sub"]))
{
    $choice = $_POST["choice"];
    //calc distance add map before this
    $sql = "select latitude,longitude from farmer where username = '$fuser'";
    $result = mysqli_query($con,$sql);
    $lat1 = 0.0;
    $lng1 = 0.0; 
    if(mysqli_num_rows($result) > 0)  
    while($row = mysqli_fetch_array($result) )
        {
            $lat1 = $row["latitude"];
            $lng1 = $row["longitude"];
        }
    $lat2 = 12.898003300000001;
    $lng2 = 80.1730151;
    static $x = M_PI / 180;
    $lat1 *= $x; 
    $lng1 *= $x;
    $lat2 *= $x;
    $lng2 *= $x;
    $dist = 2 * asin(sqrt(pow(sin(($lat1 - $lat2) / 2), 2) + cos($lat1) * cos($lat2) * pow(sin(($lng1 - $lng2) / 2), 2)));
    $distance=$dist * 6378137 /1000;
    echo '<h2>Distance between Two Locations is: '.$distance .'km</h2>';
    if(strcmp($choice,"Car")==0){
        $t_price = 1056.135;
        $net = 200 + $t_price;
    echo '<h2>Transportation Price: Rs '.$t_price.'</h2>';
    echo '<h1>Net Price : Rs '.$net.'</h1>';
    }
    else if(strcmp($choice,"Tempo")==0){
        
        $t_price = 2112.27;
        $net = 200 + $t_price;
        echo '<h2>Transportation Price: Rs '.$t_price.'</h2>';
    echo '<h1>Net Price : Rs '.$net.'</h1>';
    
    }
    else if(strcmp($choice,"Lorry")==0){
        
        $t_price = 422.454;
        $net = 200 + $t_price;
        echo '<h2>Transportation Price: Rs '.$t_price.'</h2>';
    echo '<h1>Net Price : Rs '.$net.'</h1>';
    
    }


    
    }
?>

</div>
</body>
</html>
