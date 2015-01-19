<?php

session_start();
$_SESSION["username"]=$username;
if(!isset($_SESSION["username"])) 
	{
	header("Location:Error.html");
	exit;
	}
if(isset($_POST["submit"]))
	{
	$username=$_SESSION["username"]
	require_once("DB_Connect.php");
	$name = $_POST["name"];
	$postal_address = $_POST["postal_address"];
	$phone_number = $_POST["phone_number"];
	$username = $_POST["username"];
	if(document.edit.name.value!=''){
		$query2 = ("UPDATE register SET name='$name' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.address.value!=''){
		$query2 = ("UPDATE register SET address='$postal_address' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.phone_number.value!=''){
		$query2 = ("UPDATE register SET phone_number='$phone_number' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.username.value!=''){
		$query2 = ("UPDATE register SET username='$username' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	echo'change successfull';
	mysqli_close($Registration_DB_Connect);
	}
	
?>
<html>
	<body background="image/30.jpg" >
	<h1 style="color:gold"> Your profile is changed</h1>
	<?php
	header("Location:edit.php");
	?>
	<a href="author.php"><font color="red"><b>Click here to back to profile</b></a>
</body>
</html>
