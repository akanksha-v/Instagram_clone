<?php
   session_start();
//    if(isset($_SESSION['username'])){

   $username=$_SESSION['username'];
   require "./../../config/connection.php";

   if(isset($_POST['submit'])){

   $file = $_FILES['file'];
   $fileName=$_FILES['file']['name'];
   $fileTmpName=$_FILES['file']['tmp_name'];
   $fileSize=$_FILES['file']['size'];
   $fileError=$_FILES['file']['error'];
   $fileType=$_FILES['file']['type'];
 

   $fileExt = explode('.',$fileName);
   $fileActualExt = strtolower(end($fileExt));
   $allowed =array('jpg','jpeg','png');
   if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
          if($fileSize < 1000000){
            //    $fileNameNew =uniqid('',true)."." .$fileActualExt;
            $fileNameNew= uniqid('',true)."." .$fileActualExt;
         $fileDestination = './../../users_images/'.$username.'/'.$fileNameNew;
         move_uploaded_file($fileTmpName, $fileDestination);
         echo "<script type= 'text/javascript'>alert('Photo Uploaded!');</script>";
  
            }else{
                echo "<script type= 'text/javascript'>alert('Your file is too big!');</script>";
          }
      }  else{
        echo "<script type= 'text/javascript'>alert('There was error in uploading!');</script>";
      } 
   } else{
    echo "<script type= 'text/javascript'>alert('You can't upload image like this!');</script>";
   }

   
   $bio=$_POST['bio'];
$sql ="INSERT INTO $username (`bio`,`pic`) VALUES ('$bio','$fileNameNew')";


if ($conn->query($sql) === TRUE) {
   
    header('location:./../views/feed.html'); 
    echo "<script type= 'text/javascript'>alert('Uploaded successfully!');</script>";
} else {
    echo "<script type= 'text/javascript'>alert('Error');</script>";
    header('location:./../views/profile.html'); 
}

   
   }

   


?>