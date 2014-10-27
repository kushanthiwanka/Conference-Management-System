<html> 
<head>
<title>View User Information</title>


</div>
<br/><br/><br/>
<body>

<center>
<h2>Assign Reviewers</h2>
<div >
<?php
$con=mysqli_connect("localhost","root","","UCSC_conf");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM member");

echo "<table style='border:1px solid black' >

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
</div>
<div><br/></div>
<div><input type="submit" value="Select" name="assign"></div>
</center>
</body>
</html>