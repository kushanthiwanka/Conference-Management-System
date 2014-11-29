<?php
$con= mysqli_connect("localhost","root","","UCSC_conf");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql="CREATE TABLE IF NOT EXISTS`news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(75) NOT NULL,
  `news` varchar(250) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY(news_id)
  )";
  
  

// Execute query
if (mysqli_query($con,$sql)) {
  echo "news table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
?>