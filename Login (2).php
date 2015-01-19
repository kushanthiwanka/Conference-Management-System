<?php 
function SignIn() 
	{
		session_start(); 
		$con=mysqli_connect(host,username,password,dbname);
		$username = $_POST["username"];
		$password = $_POST["password"];
		$Check_Details = ("SELECT username FROM register where username = '$username' AND password = '$password'") or die(mysqli_error());
		$result = mysqli_query($con,$Check_Details);
		while($row=mysqli_fetch_row($result))
			{
			$name=$row["0"];
			}
		if(mysqli_affected_rows()==0) 
			{
			echo "Wrong Username and Password. Please check your username and password and try again.";
			}
		else
			{
			$_SESSION["username"] = $name;
			header("Location:selectpg.php");
			exit;
			}	
	}
if(isset($_POST["submit"])) 
	{ 
		SignIn(); 
	} 
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<style>
			#log{
			background-color:black;
			color:white;
			
		}
		</style>
		<body>
			
			<div class=" col-lg-12"id="log">
				<span><font size="+6"  face="Bauhaus 93">CONFERENCE MANAGEMENT SYSTEM</font></span>
				<div align="right">
				<form class="form-inline" method="post">
					<div class="form-group">
						<label class="sr-only" for="inputusername">Username</label>
						<input type="text" class="form-control" name="username" id="inputusername"placeholder="ENTER USERNAME"/>
					</div>
					<div class="form-group">
						<label class="sr-only" for="inputPassword">Password</label>
						 <input type="password" class="form-control" id="inputPassword" name="password" placeholder="ENTER PASSWORD"/>
					 </div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<button type="submit" name="submit" class="btn btn-primary ">Sign in</button>
				</div>
				</form>
			</div>
			<script src="js/bootstrap.js"></script>
		</body>
	</head>
</html>

		

		



   




