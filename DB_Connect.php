<?php
$Registration_DB_Connect = mysqli_connect("localhost","root","","ucscconf") ;
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>