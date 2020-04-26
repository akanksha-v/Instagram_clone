<?php

if(isset($_POST["register"])){
    include './../../config/connection.php';

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $check = "SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'"; 
    $query1 = mysqli_query($conn,$check);

    if($query1)
    { 
      $row = mysqli_num_rows($query1);
      if($row >= 1)
      {echo "<script type= 'text/javascript'>alert('Username or Email is already taken ..please try again..');</script>";
      echo("<script>location.href='/index.php'</script>");}
    
    else
    { $hashed_password = password_hash($password, PASSWORD_DEFAULT);
     $sql = "INSERT INTO `users`(`username`,`email`,`password`)
    VALUES ('$username','$email','$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully..Now Kindly login..');</script>";
    mkdir("./../../users_images/$username");
    $sql = "CREATE TABLE $username(
      bio VARCHAR(500) NOT NULL,
      pic VARCHAR(500) NOT NULL
      )";
      
      if ($conn->query($sql) === TRUE) {
          echo "Your table is created in our database successfully";
      } else {
          echo "Error creating table: " . $conn->error;
      }
    echo("<script>location.href='/index.php'</script>");
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
  }
    $conn->close();
    }}
    ?>   