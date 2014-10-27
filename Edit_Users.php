<?php

session_start();

if(!isset($_SESSION["username"])) 
	{
	header("Location:../Users/Error.html");
	exit;
	}
	
$mess = "";

if(isset($_POST["submit"]))
	{
	require_once("../Database/DB_Connect.php");
	
	$name = $_POST["name"];
	$email_address = $_POST["email_address"];
	$postal_address = $_POST["postal_address"];
	$date_of_birth = $_POST["date_of_birth"];
	$phone_number = $_POST["phone_number"];
	$school = $_POST["school"];
	$gender = $_POST["gender"];
	$comment = $_POST["comment"];
	$username = $_POST["username"];
	$login_times = $_POST["login_times"];
	
	
	$query2 = "UPDATE Student_Details SET name='$name',email_address ='$email_address',postal_address ='$postal_address',date_of_birth='$date_of_birth',phone_number='$phone_number',school='$school',gender='$gender',comment='$comment' WHERE username = '$username'";
	$result2 = mysql_query($query2);
	
	if(!$result2) 
		{
		$err=mysql_error();
		print $err;
		exit();
		}
	
	echo "<font color='blue'><b>Information has been entered.</b></font>"; 
	echo "<br>";
	echo "<a href='../Administrator/Final_Output.php'>back</a>";
	exit;
	}
?>
<html>
<head>
<title>Edit User Info</title>
<script language="javascript">
function test_form2() 
		if(document.edit.name.value=='') {
		alert("Enter your name to continue");
		return false; }
	if(document.edit.email_address.value=='') {
		alert("Enter your email address to continue");
		return false; }
	if(document.edit.postal_address.value=='') {
		alert("Enter your postal address to continue");
		return false; }
	if(document.edit.date_of_birth.value=='') {
		alert("Enter your date of birth to continue");
		return false; }
	if(document.edit.phone_number.value=='') {
		alert("Enter your phone number to continue");
		return false; }
	if(document.edit.school.value=='') {
		alert("Please Enter your school to continue");
		return false; }
	if(document.edit.gender.value=='') {
		alert("Please Select your gender to continue");
		return false; }
	if(document.edit.comment.value=='') {
		alert("Please add a comment. We need your feedback");
		return false; }
	return true;
	}
	
</script>
</head>
<body>
<?php
	echo $mess;
?>
<?php
if(isset($_GET["username_d"]))
	{
	require_once("../Database/DB_Connect.php");
	
	$username = $_GET["username_d"];
	$query="SELECT name,email_address,postal_address,date_of_birth,phone_number,school,gender,comment,username,login_times FROM Student_Details WHERE username='$username'";  
	
	$result=mysql_query($query);
	if(!$result) 
		{
		print mysql_error();
		exit(); 
		}
	
	while($row=mysql_fetch_array($result)) 
		{
		$name = $row["name"];
		$email_address = $row["email_address"];
		$postal_address = $row["postal_address"];
		$date_of_birth = $row["date_of_birth"];
		$phone_number = $row["phone_number"];
		$school = $row["school"];
		$gender = $row["gender"];
		$comment = $row["comment"];
		$username = $row["username"];
		$login_times = $row["login_times"];
		}	
?>
<center>
<h2>Edit User Information</h2>
<form name="edit" method="post" action="" onSubmit="return test_form2();">

<table>
<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $name;?>" size="50"></td>
</tr>
<tr>
	<td>Email Address</td>
	<td><input type="email" name="email_address" placeholder="example@yourmail.com" value="<?php echo $email_address;?>" size="50"></td>
</tr>
<tr>
	<td>Postal Address</td>
	<td><input type="text" name="postal_address" value="<?php echo $postal_address?>" size="50"></td>
</tr>
<tr>
	<td>Date of Birth</td>
	<td><input type="date" name="date_of_birth" value="<?php echo $date_of_birth?>" size="50"></td>
</tr>
<tr>
	<td>Phone Number</td>
	<td><input type="tel" name="phone_number" value="<?php echo $phone_number?>" size="50"></td>
</tr>
<tr>
	<td>School</td>
	<td><input type="text" name="school" value="<?php echo $school?>" size="50"></td>
</tr>
<tr>
	<td>Gender</td>
	<td><input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	</td>
</tr>
<tr>
	<td>Comments/Your Expectations</td>
	<td>
		<textarea name="comment" rows="4" cols="40" placeholder="Please include briefly why do you like to join e-English Online Education System" value="<?php echo $comment?>"></textarea>
	</td>
</tr>
<tr>
	<td>Username</td>
	<td><input type="text" name="username" value="<?php echo $username?>" size="50"></td>
</tr>

<tr>
	<td>Please Select How Frequently you will login to the system</td>
	<td><select name="login_times">
		<option value="Daily">Daily</option>
		<option value="Weekly">Weekly</option>
		<option value="Monthly">Monthly</option>
		<option value="Hourly">Hourly</option>
		<option value="Never">Never</option>
		<option value="Often">Often</option>
	 </td>
</tr>
<tr>
</tr>
</table>
<input type="submit" name="submit" value=" submit ">
<input type="reset" name="reset_s" value="Cancel">
</form>
<?php
}
?>
</body>
</html>