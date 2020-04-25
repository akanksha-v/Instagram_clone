<?php

if(isset($_POST["register"])){
    include '/config/connection.php';

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $check = "SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'"; 
    $query1 = mysqli_query($conn,$check);

    if($query1)
    { $row = mysqli_num_rows($query1);
     if($row >= 1)
     {echo "<script type= 'text/javascript'>alert('Username or Email is already taken ..please try again..');</script>";}
    
    else
    {
     $sql = "INSERT INTO `users`(`username`,`email`,`password`)
    VALUES ('$username','$email','$password')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully..Now Kindly login..');</script>";
    echo('<script>location.href="index.php"</script>');
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
  }
    $conn->close();
    }}
    ?>   