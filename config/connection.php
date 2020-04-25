<?php

include './credentials.php';

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection unsuccessful".$conn->error);
?>