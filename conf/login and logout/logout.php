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
<title>Logged Off</title>
</head>
<body>
<br><br>
<div align="">
<h2>You are now logged off</h2>
&nbsp;&nbsp;&nbsp;
<a href="login.php">home</a></div>
</body> </html>