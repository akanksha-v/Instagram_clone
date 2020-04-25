<?php
 
 $username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST["login"])){
    
  include './config/connection.php';
    
   $result1 = "SELECT `username`,`password` FROM `users` WHERE `username`='$username' AND `password`='$password'";
 
  $query1 = mysqli_query($conn,$result1);
   
    if($query1)
    { $row = mysqli_num_rows($query1);
       if($row >= 1)
      {echo('<script>location.href="./views/user.php"</script>');}
    
    else
    {
        echo 'The username or password is incorrect!';
    }
 }

}

?>