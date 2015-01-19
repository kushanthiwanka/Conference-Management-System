<html>
<head>
	<title>Author</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</br>
	<p><font size="+4">International Conference on Advances in ICT for <br/> <br/><center>Emerging Regions</center></font></p>
	<style>
		#fra{

			position: absolute;
			right:450px;
			top:320px;
			padding:60px;
			background-color:transparent;
			
		}
		#qa{
			background-color:transparent;
			
		}
		
		#as{

			position: absolute;
			right:25px;
			top:25px;
			background-color:transparent;
			
			
		}
		#az{

			position: absolute;
			right:50px;
			background-color:transparent;
			
		}
	</style>
</head>

	<body background="30.jpg" >
		<div align="right"id="as">
			<a href="apkushan90?">User name</a>
			|
			<a href="apkushan90?">Logout</a>
		</div>
		<div class="well span2"id="qa">
			<legend><font size="+1" color="purple" face="Times New Roman">My Account</legend>
			<a href="apkushan90?">Edit my profile</a></br></br>
			<a href="changepassword.php">Change password</a></br></br>
			<a href="submitpaper.php">Upload a paper</a>
		</div>
		<div class="well span6"id="fra">
			<legend><font size="+1" color="purple" face="Times New Roman">Notifications</legend>
			<a href="apkushan90?">papers was reviewed</a></br></br>
			<a href="papersub.php">Papers published</a></br></br>
			<a href="apkushan90?">Other notifications</a>
			
		</div>
		<div class="well span3"id="az">
			<legend><font size="+1" color="purple" face="ATimes New Roman">Conference content</legend>
			<input type="text" style="height:30px" name="Name" value="Name"/>
			<select name="type">
				<option value="all">all</option>
				<option value="a">a</option>
				<option value="b">b</option>
				
			</select>
			<br/>
			<button type="submit" class="btn btn-success" align="right">search</button>
			
		</div>
	</body>
</html>