<?php 

function SignIn() 
{
	session_start(); //starting the session for user profile page 

	//Connect to Database
	require_once("C:/xampp/htdocs/sandbox/Conference-Management-System/conf/database and databse  connection/conn.php");

	//variables for POST method 
	$username = $_POST["username"];
	$password = $_POST["password"];

	//check the username and password for correctness

	$Check_Details = ("SELECT username FROM member where username = '$username' AND password = '$password'") or die(mysql_error());
	$result = mysql_query($Check_Details);

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
		header("Location:user.php");
		exit;
		}
}

if(isset($_POST["submit"])) 
	{ 
	SignIn(); 
	} 
?>
<!DOCTYPE html>

<html>
<head>
<title>User Login</title>
<head>
<body>
    
<br><br>

<table width="300" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
<tr>
    <form name="login_form" method="post" action="">
    <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
    <tr>
        <td colspan="3"><strong>Member Login </strong></td>
    </tr>
    <tr>
        <td width="78">Username</td>
        <td width="6">:</td>
        <td width="294"><input name="username" type="text"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input name="password" type="password"></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"><input type="submit" name="submit" value="Login to the System"></td>
    </tr>
    </table>
    </td>
</form>
</tr>
</table>
    <br><br>
    <center>
    <font color="Green" face="Times">
    If you are a new user <a href="Registration.html"><font color="Red" face="Times">click here</font></a> for register for free.</font>
    </center>

</body>

</html>