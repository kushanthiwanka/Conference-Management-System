<html>
<head>
<title>search</title>
<link rel="stylesheet" type="text/css" href="linking.css">
</head>
<body>
<form action="search.php" method="post">
     <input type="text" name="search" placeholder="member name">
	 <input type="submit" value="search" />
	 </form>
<?php
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("UCSC_conf") or die("cannot connect to the database");
$ot='';
if(isset($_POST['search'])){
$sear=$_POST['search'];

$query=mysql_query("select * from member where first_name LIKE '%$sear%' or last_name Like '%$sear%'") OR DIE ("could not search"); 
$count=mysql_num_rows($query);
if($count==0){
$ot="no result";
}
else{
echo "<table>
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
</tr>";
while($row=mysql_fetch_array($query)){
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
	    echo "<td>" . $row['fax'] . "</td>"; echo "</tr>";


}
}
}
echo "</table>"; 
?>


<?php print("$ot");?>
</body>
</html>
