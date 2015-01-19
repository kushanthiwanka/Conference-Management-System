<html> 
<head>
<title>View User Information</title>
<link rel="stylesheet" type="text/css" href="linking.css">
</head> 
<div id="head" class="headtx">
<ul id="bar1">
<li><a href="AboutUs.html">About Us</a></li>
<li><a href="ContactUs.html">Contact Us</a></li>
<li><a href="Sitemap.php">Site map</a></li>
<li><a href="login.html">Log in</a></li>
</ul>
</div>

<div id="head2" class="headertx">UCSC Conference Management System </div>

<div id="line">
<ul id="bar">
    <li><a href="home.html"> Home</a></li>
    <li><a href="Author.html"> Author</a></li>
    <li><a href="Reviewer.html">Reviewer</a><li>
	<li><a href="Paper.html">Paper</a><li>
</ul>
</div>
<br/><br/><br/>
<body>
<center>
<h2>Assign Reviewers</h2>
<?php
$con=mysqli_connect("localhost","root","","UCSC_conf");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM member");

echo "<table border='1'>
<tr>

<th>Title</th>
<th>Firstname</th>
<th>Middle Name</th>
<th>Lastname</th>
<th>Date of birth</th>
<th>Gender</th>
<th>Country</th>
<th>Postal Address</th>
<th>Postal Code</th>
<th>Email Address</th>
<th>Phone Number</th>
<th>Fax</th>
<th>Assign</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
   echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['middle_name'] . "</td>";
   echo "<td>" . $row['last_name'] . "</td>";
 echo "<td>" . $row['date_of_birth'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
   echo "<td>" . $row['country'] . "</td>";
    echo "<td>" . $row['postal_address'] . "</td>";
	 echo "<td>" . $row['postal_code'] . "</td>";
	  echo "<td><a href=email.html>" . $row['email_address'] . "</a></td>";
	   echo "<td>" . $row['phone_number'] . "</td>";
	    echo "<td>" . $row['fax'] . "</td>";
	echo "<td><input type=checkbox name=check>"."</td>";
		
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
<div><br/></div>
<div><input type="submit" value="Select" name="assign"></div>
</center>
</body>
</html>