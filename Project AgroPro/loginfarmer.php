<?php
   session_start();
   require("config.php");
   ob_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="css/styles.css">
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
body{
   background-image: url(bg.jpg);
}
.container{
   background-color: #fff;
}
</style>
</head>
<body>
<div class="container my-5 py-5 z-depth-1">

 
<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-6">

      <!-- Default form register -->
      <form class="text-center" action="loginfarmer.php" method="post" >

        <p class="h4 mb-4">Log in</p>

        <div class="form-row mb-4">
          <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" required name="username" class="form-control" placeholder="User name">
          </div>
        </div>

        <!-- E-mail
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail"> -->

        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required class="form-control" placeholder="Password"
          aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
 
        </small>

        <!-- Phone number 
        <input type="number" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number"
          aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
          Optional - for two step authentication
        </small>-->


        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" name="Login" type="submit">Login</button>

        <!-- Social register -->
        <p>Dont have an account?<a href="registerfarmer.php"> Register</a></p>
      

        <hr>

        <!-- Terms of service -->
        <p>By clicking
          <em>Sign up</em> you agree to our
          <a href="" target="_blank">terms of service</a>

      </form>
      <!-- Default form register -->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->







 	 <div>
     <?php
      ob_start();
                if(isset($_POST['Login']))
                {
                 $username = $_POST['username'];
                 $password = $_POST['password'];
                 $query="select * from farmeruser where username='$username'";
                 $query_run = mysqli_query($con,$query);

                 if(mysqli_num_rows($query_run)>0)
                 {
                   //valid
                   $row=mysqli_fetch_assoc($query_run);
                   if(password_verify($password,$row['password']))
                   {
        
                   $_SESSION['username']=$username;
                   header("Location:http://localhost:8080/Project%20AgroPro/farmerindex.php");
              
                 }
                 else
                 {
                  echo '<script type="text/javascript"> alert("Password does not match") </script>';
                }
                  }
                  else{
                    echo '<script type="text/javascript"> alert("username does not match") </script>';
                  }
                
                }


           ?>
 	</div>

</body>
</html>
