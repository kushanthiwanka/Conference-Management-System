<?php 

function SignIn() 
{
	session_start(); //starting the session for user profile page 

	//Connect to Database
	require_once("DB_Connect.php");

	//variables for POST method 
	$username = $_POST["username"];
	$password = $_POST["password"];

	//check the username and password for correctness
	$result = mysqli_query($Registration_DB_Connect,"SELECT username FROM register where username = '$username' AND password = '$password'") or die(mysqli_connect_errno());
	

	while($row=mysql_fetch_array($result))
		{
		$name=$row["0"];
		}
	if(mysql_affected_rows()==0) 
		{
		echo "Wrong Username and Password. Please check your username and password and try again.";
		}
	else
		{
		$_SESSION["username"] = $name;
		header("Location:User.php");
		exit;
		}
}

if(isset($_POST["login"])) 
	{ 
	SignIn(); 
	} 
?>