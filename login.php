<!DOCTYPE html>

<?php 

function SignIn() 
{
	session_start(); //starting the session for user profile page 

	//Connect to Database
	require_once("conn.php");

	//variables for POST method 
	$username = $_POST["email_address"];
        $password = $_POST["password"];

	//check the username and password for correctness

	$Check_Details = ("SELECT email_address FROM member where email_address = '$username' AND password = '$password'") or die(mysql_error());
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
		$_SESSION["email_address"] = $name;
		header("Location:selectpg.php");
		exit;
		}
}

if(isset($_POST['submit'])) 
	{ 
	SignIn(); 
	} 
?>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    
<div class="container logpos">
    <div class="row">
        
	    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>     

                    <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                    <form id="loginform" class="form-horizontal" role="form"  method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="email_address" placeholder="your email">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                                    
                            <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" value="Sign in" class="btn btn-success">
                                    </div>
                            </div>


                            <div class="form-group">
                                    
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="Registration.html">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                                    
                            </div>    
                        </form>     



                    </div>                     
                
                    </div>  
        </div>
                
        
    </div>
    
    </div>
</div>
</body>
</html>                                  		