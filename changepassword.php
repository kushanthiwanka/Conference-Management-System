<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script language="javascript">
<?php
	session_start();
	$username=$_SESSION["username"];
	require_once("DB_Connect.php");
	$pas=mysqli_query($Registration_DB_Connect,'SELECT password FROM register WHERE email_address= $username ');

?>
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
		<style>
			#az{

			position: absolute;
			top:150px;
			right:150px;
			color:green;
			
		}
			#as{

			color:orange;
			font-size:25px;
			
		}
		</style>
	</head>
		
	<body background="image/30.jpg"> 
		<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Can reset Your Password Through the below Steps"</h1>
		
		<div class="well span12"id="az">
		<form action="welcom3.php" method="post" name="changepassword" onsubmit="return test_form2();">
			<div class=" span4"><p id="as" ><b>Change password</b></p></div></br></br></br></br></br>
			<div class=" span2"></div>
			<div class="well span5" align="right">
				Enter Current Password  :<input type="password" name="pass1" class="span3"/></br></br></br>
				Enter new Password      :<input type="password" name="pass2"class="span3"/></br></br></br>
				Confirm new password    :<input type="password" name="pass3"class="span3"/></br></br></br>
			</div>
			<div class=" span2" align="right">
				</br></br></br></br></br>
				<button type="submit" class="btn btn-primary">change</button></br></br></form>
				<form action="author.php"><button type="submit" class="btn btn-danger">cancel</button></form>
			</div>
		</div>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-tooltip"></script>
		<script src="js/bootstrap-popover"></script>
	</body>
</html>