<?php
$con= mysqli_connect("localhost","root","","UCSC_conf");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql="CREATE TABLE IF NOT EXISTS`member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `country` varchar(60) NOT NULL,
  `postal_address` varchar(150) NOT NULL,
  `postal_code` varchar(12) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` text(15) NOT NULL,
  `fax` text(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  PRIMARY KEY(user_id),
  unique (email_address))";
  
  

// Execute query
if (mysqli_query($con,$sql)) {
  echo "member table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
?>