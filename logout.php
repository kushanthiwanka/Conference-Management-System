<?php
session_start();
if(isset($_SESSION["username"])) {
unset($_SESSION["username"]);
}
header("Location:login.php");
exit;
?>
<html>
<head>
<title>Logg Off</title>
</head>
<body>
<br><br>
<div align="">
<h2>You are now logg off</h2>
&nbsp;&nbsp;&nbsp;
<a href="home.php">home</a></div>
</body> </html>