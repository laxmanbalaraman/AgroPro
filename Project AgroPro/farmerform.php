<?php
error_reporting(0); 
?> 
<?php
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
    echo "Yes";
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "C:/xampp/htdocs/Project AgroPro/image/".$filename; 
        
    $db = mysqli_connect("localhost", "root", "", "agropro"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO image (filename) VALUES ('$folder')"; 
  
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


  
<!DOCTYPE html> 
<html> 
<head> 
<title>Image Upload</title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<body>
<div id="content"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
      <input type="file" name="uploadfile" value=""/> 
        
      <div> 
          <button type="submit" name="upload">UPLOAD</button> 
        </div> 
  </form> 
</div> 
<img src=" <?php if (isset($file)) echo $file ?> " alt="">
</body> 
</html> 