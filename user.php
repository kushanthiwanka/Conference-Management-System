<?php
include "test.html";
session_start();

if(!isset($_SESSION["email_address"])) 
	{
	header("Location:error.html");
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
<a href="home.html">Log Out</a>
<br><br>

</center>
</body>
</html>