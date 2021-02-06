<?php
$dbname ="contonso";
$host = "localhost";
$user ="root";
$password ="";
$conn = mysqli_connect($host,$user,$password) or die(mysqli_error());
mysqli_select_db($conn,$dbname);
?>