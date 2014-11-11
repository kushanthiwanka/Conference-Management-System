<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <style type="text/css">
        #apDiv1 {
	position: absolute;
	left: 302px;
	top: 112px;
	width: 668px;
	height: 280px;
	z-index: 1;
	background: transparent;
	text-align: center;
	color: #FFF;
	 a:hover {
    color: white;
	font-size: large;
	font-size: x-large;
	font-size: 18px;
	font-size: x-large;
}
        a:link {
	color: #FFF;
}
a:visited {
	color: #0F0;
}
        a:hover {
	color: #FFF;
}
a:active {
	color: #F00;
}
        body,td,th {
	font-size: x-large;
}
        </style>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    <meta charset="utf-8">
    </head>
    <body background="../images/Background-Image.jpg">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <div id="apDiv1">
		<fieldset>
        <legend align="center">Log in</legend>
        	<center>
        	<table>
          	<form action="includes/process_login.php" method="post" name="login_form">
           	<tr>
           	<td> Email:</td>
            <td><input type="text" name="email" /></td>
           	</tr>
           	<tr>
           	<td> Password:</td>
			<td><input type="password" 
                             name="password" 
                             id="password"/></td>
           	</tr><br>
			<tr>
			<td>  <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /></td>
           	</tr>
          	</form>
          </table>
          </center>
        </fieldset>
		
          <p>If you don't have a login, please <a href="register.php">register</a></p>
          <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
          <p>You are currently logged <?php echo $logged ?>.</p>
        </div>
        <form action="includes/process_login.php" method="post" name="login_form">
        </form>
</body>
</html>
