<?php

//Start the Session
session_start();

if(!isset($_SESSION["username"])) 
	{
	header("Location:../Users/Error.html");
	exit;
	}
$mess = "";

if (isset($_GET["username_d"]))
	{
	//Connect To the Database
	require_once("../Database/DB_Connect.php");
	
	$user_name=$_GET["username_d"];
	$query2 = "DELETE FROM Student_Details WHERE username = '$user_name'";
	$result2 = mysql_query($query2);
	if(!$result2) 
		{
		$err=mysql_error();
		print $err;
		exit();
		}
	$mess = "<font color='blue'><b>Information has been deleted.</b></font>";

	}

?>

<html> 
<head>
<title>View User Information</title>
<script language="JavaScript">
function delete_test() 
	{
		return confirm("Do you want to delete these information");
	}
</script>
</head> 
<body>
<h2>View of User Information</h2>
<?php
echo "$mess<br>";
?>


<?php	
require_once("../Database/DB_Connect.php");
$Query = "SELECT * FROM Student_Details";
$Query_Result = mysql_query($Query) or die(mysql_error());

//adding data to the table 
echo "<table border=1 width=140%>\n";
echo "<caption><font >User Information</font></caption>
	<tr>
	<th>User ID</th>
	<th>NAME</th>
	<th>Email Address</th>
	<th>Postal Address</th>
	<th>Date of Birth</th>
	<th>phone Number</th>
	<th>School</th>
	<th>Gender</th>
	<th>Comment</th>
	<th>Username</th>
	<th>Password</th>
	<th>Confirm Password</th>
	<th>Login Times</th>
	</tr>";
	
while($myrow=mysql_fetch_row($Query_Result))
	{
	echo "<tr>";
	for($f=0;$f<mysql_num_fields($Query_Result);$f++) 
		{
		echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
		}
	echo "<td><a onClick='return delete_test();' href='?username_d=".urlencode($myrow[9])."'>delete</a>";
	echo "<td><a href='../Administrator/Edit_Users.php?username_d=".urlencode($myrow[9])."'>edit</a>";
	}
	echo "</tr>";
echo "</table>";

?>
</body>
</html>