<?php
$servername = "localhost";
$username = "root";
$password = "shashi2000";
$conn = mysqli_connect($servername, $username, $password,"minipro"); 

// or die ('Error connecting to the server database');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
