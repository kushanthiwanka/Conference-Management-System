<?php
	session_start();
	$username=$_SESSION["email_address"];
	$con=mysql_connect('localhost','root','');
        $var = mysql_select_db('ucsc_conf');
        
	$pas=mysql_query("SELECT password FROM member WHERE email_address='$username'");
        

?>

<html>
    <head>
        <title>Change Password</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script language="javascript">
            function test_form2() 
                {
                    if(document.changepassword.pass1.value=='$pas') {
                        alert("Enter your correct old password to continue");
                        return false; }
                    if(document.changepassword.pass2.value=='') {
                        alert("Enter your new password to continue");
                        return false; }
                    if(document.changepassword.pass3.value!=document.changepassword.pass2.value) {
                        alert("your new password is not match");
                        return false; }
		return true;
            }
        </script>
            
    
    </head>
    
    <body>
        <div class="container">
            <div class="row text-center pad-top ">
                <div class="row  pad-top">
                    <div class="" style="position: absolute; width: 75%; left: 160px; top: 10px;">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading text-center pad-top">
                                <h1>Change Your Password</h1>
                            </div>
                            <form action="changepassword.php" method="post">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Enter Current Password </span>
                                        <input type="password" name="pass1" class="form-control"/>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" >Enter new Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="password" name="pass2" class="form-control"/>
                                    </div>
                                    
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Confirm new password&nbsp;&nbsp; </span>
                                        <input type="password" name="pass3" class="form-control"/>
                                    </div>
            <button type="submit" class="btn btn-primary">change</button></br></br>
        </form>
            </div>
            </div>
            </div>
        </div>
            </div>
                </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-tooltip"></script>
	<script src="js/bootstrap-popover"></script>
    </body>
</html>