<?php
session_start();

if(!isset($_SESSION["username"])) 
	{
	header("Location:Error.html");
	exit;
	}
?>

<html>
<head>
<title>User Page</title>
</head>
<body>
<center>
You are successfully logged In.Click Here to
<a href="../Content/Home.html">Log Out</a>
<br><br>
</center>
</body>
</html>