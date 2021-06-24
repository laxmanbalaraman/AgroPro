

<?php
session_start();
require("config.php");
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
   <title>registration as Shopkeeper</title>
   <link rel="stylesheet" type="text/css" href="">
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
      <form class="text-center" action="registershopk.php" method="post" action="#!">

        <p class="h4 mb-4">Sign up</p>

        <div class="form-row mb-4">
          <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" required name="fname" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" required name="Lname" class="form-control" placeholder="Last name">
          </div>
        </div>
        <input type="text" id="defaultRegisterFormLastName" required name="username" class="form-control" placeholder="User Name"> <br>
        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" required name="mail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" required name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
          aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
          At least 8 characters and 1 digit
        </small>

        <input type="password" required name="cpassword" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
          aria-describedby="defaultRegisterFormPasswordHelpBlock"> <br>


        <!-- Phone number -->
        <input type="number" id="defaultRegisterPhonePassword" required class="form-control" placeholder="Phone number" name="phoneno"
          aria-describedby="defaultRegisterFormPhoneHelpBlock"> <br>

        <div class="form-outline">
         <input type="number" id="typeNumber" required pattern="[0-9]{5}"  placeholder="Pincode" name="pincode"  class="form-control" /><br>
         </div>
        <div class="form-outline">
         <textarea class="form-control" required name="location" placeholder="Enter Address" id="textAreaExample" rows="4"></textarea>
         <label class="form-label" for="textAreaExample">Message</label>
         </div>


        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" name="submit_btn" type="submit">Sign in</button>

        <!-- Social register -->
        <br>Already have an account?
        <a href="loginshopk.php" >Sign Up</a>

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


</div>




<?php
   if (isset($_POST['submit_btn'])) {
      $uflag = 0;
      $eflag = 0;

      $firstname = $_POST['fname'];
      $lastname = $_POST['Lname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $email = $_POST['mail'];
      $pno = $_POST['phoneno'];
      $loc = $_POST['location'];


      if ($password == $cpassword) {
         $query = "select * from shopuser where username='$username'";
         $query_run = mysqli_query($con, $query); //it will help in accessing the quries sql statement
         if (mysqli_num_rows($query_run) > 0) //this command is used to find how many rows are fetched
         {
            //there is already a user with that user name
            echo '<script type="text/javascript"> alert("user already exist. try another user name") </script>';
            $uflag = 1;
         }
         $query = "select * from shopuser where email='$email'";
         $query_run = mysqli_query($con, $query); //it will fetch the record from the sql statement
         if (mysqli_num_rows($query_run) > 0) //this command is used to find how many rows are fetched
         {
            //there is already a user with that email
            echo '<script type="text/javascript"> alert("email already exist. try another email id") </script>';
            $eflag = 1;
         }

         if ($uflag == 0 and $eflag == 0) {
            #no issues so insert into database
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "insert into  shopuser values('$firstname','$lastname','$username','$hash','$email','$pno','$loc')";
            $query_run = mysqli_query($con, $query);
            

            echo '<script type="text/javascript"> alert("User Details Registered Successfully.Go to Login Page to Login") </script>';
            header('Location:loginshopk.php');
         }
      } else {
         echo '<script type="text/javascript"> alert("password and confirm password does not match") </script>';
      }
   }



   ?>
   </div>
</body>

</html>

