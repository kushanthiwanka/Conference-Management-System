<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<style type="text/css">
			.bs-example{
				margin: 20px;
			}
			#tab{
				position:relative;
				right:-350px;
				top:52px;
			}
			#myacc{
				position:relative;
				right:-150px;
				
			}
		</style>
		<?php 
			session_start(); 
			$username=$_SESSION["username"];
		?>
	</head>
	<body style="background-color:lightblue">
		<div class="col-lg-6" id="tab">
			<ul class="nav nav-tabs ">
				<li><a href="home.php">Home</a></li>
				
				 <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Updates<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span style="color:red">Modify dates</span></a></li>
						<li><a href="#"><span style="color:red">Modify conference dates</span></a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Notifications<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span style="color:red">Papers to assign</span></a></li>
						<li><a href="#"><span style="color:red">Papers to publish</span></a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Process of papers<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span style="color:red">papers further review</span></a></li>
						<li><a href="#"><span style="color:red">Papers without review</span></a></li>
					</ul>
				</li>
				 <li class="dropdown" id="myacc"><a href="#" data-toggle="dropdown" class="dropdown-toggle">MyAccount<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span style="color:red">Edit my profile</span></a></li>
						<li><a href="#"><span style="color:red">Change password</span></a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><span style="color:brown">logout</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div>
			
		</div>
	<script src="js/bootstrap.js"></script>
	</body>
</html>
<?php
function compute_1() 
	{
		$con=mysqli_connect(host,username,password,dbname);
		if (mysqli_connect_errno()) 
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		$a=SELECT count(*) FROM tablename;
		$numofassignpapers=mysqli_query($con,$a);
		
		mysqli_close($con);
		return $numofassignpapers;
	}
?>
<?php
function compute_2() 
	{
		$con=mysqli_connect(host,username,password,dbname);
		if (mysqli_connect_errno()) 
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		$b=SELECT count(*) FROM tablename;
		$numofpubpapers=mysqli_query($con,$b);
		
		mysqli_close($con);
		return $numofpubpapers;
	}
?>