<?php

include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <style type="text/css">
        body {
	background-image: url(../images/Background-Image.jpg);
}
        body,td,th {
	color: #FFF;
}
        .c {
	color: #FF0;
}
        </style>
    </head>
    <body>
        
        <h1 class="c">Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
    <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
        <li>Emails must have a valid email format</li>
        <li>Passwords must be at least 6 characters long</li>
        <li>Passwords must contain
            <ul>
                <li>At least one upper case letter (A..Z)</li>
                <li>At least one lower case letter (a..z)</li>
                <li>At least one number (0..9)</li>
            </ul>
        </li>
        <li>Your password and confirmation must match exactly</li>
      </ul>
        <center>
        <fieldset style="width: 40%; color: #FFF;";"align:center">
        	<legend align="center">Registration Form</legend>
            <center>

            <table>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            <tr>
                <td> Username: </td><td><input type='text' name='username' id='username' /><br></td>
            </tr>
            <tr>
                <td>Email: </td><td><input type="text" name="email" id="email" /><br></td>
            </tr>
            <tr>
                <td>Password: </td><td>
                    <input type="password"
                             name="password" 
                             id="password"/><br>
                </td>
            </tr>
            <tr>
                <td>Confirm password: </td><td>
                    <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
                </td>
            </tr>
            
            <tr>
                
            </tr>
        </form>

        </table>
        <center>
                    <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
            
              </center>
            </center>
        </fieldset>
        </center>
        <p>Return to the <a href="index.php">login page</a>.</p>
    </body>
</html>
