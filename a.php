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
	$Data_out = ("SELECT username FROM register where username = '$username' AND password = '$password'") or die(mysql_error());
	$result=mysqli_query($Registration_DB_Connect,$Data_out);
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

if(isset($_POST["submit"])) 
	if((username='$username') &&  (password==$password))
		{ 
		SignIn(); 
		} 
?>
<html>
	<head>
		<TITLE> Home </title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body background="image/30.jpg"> 
		<div class="well span3 offset12" id="log">
			<form action="home1.php" method="post">
				<legend><font size="+1" color="gold" face="Arial">Login</legend>
				<div align="left">
					<label>Username</label>
					<input type="text" name="username" placeholder="ENTER YOUR USERNAME........"/></br>
					<label>Password</label>
					<input type="password" name="password" placeholder="ENTER YOUR PASSWORD.........."/>
					<input type="checkbox" name="remember"/><font size="3%" color="black" face="Monotype Corsiva">&nbspRemember me</font>
					</br></br>
				</div>
				<button type="submit" name="submit" class="btn btn-primary ">Sign in</button>
			</form>
		</div>
	</body>
</html>