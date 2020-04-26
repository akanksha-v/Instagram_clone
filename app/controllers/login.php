<?php
 session_start();  

 $username = $_POST["username"];
$password = $_POST["password"];
$hash = password_hash($password, PASSWORD_DEFAULT);
if(isset($_POST["login"])){
    
  include './../../config/connection.php';
    
   $result1 = "SELECT * FROM `users` WHERE `username`='$username'";
 
  $query1 = mysqli_query($conn,$result1);
   
    if($query1)
    {  $row = mysqli_num_rows($query1);
       if($row >= 1)

      {  if(password_verify($password, $hash))
        {$_SESSION['username'] = $username;  
          header("location:./../views/profile.html");  }
        else {echo "<script type= 'text/javascript'>alert(' Password is incorrect..');</script>";}
      
      }
    
    else
    {  echo "<script type= 'text/javascript'>alert('Username or Password is incorrect..');</ script>";
      echo ("<script>location.href='/index.php'</script>");
    }
 }

}

?>