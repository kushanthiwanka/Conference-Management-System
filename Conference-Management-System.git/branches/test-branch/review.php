<html>
<head>
	<title>Reviewer</title>
	<h1><center>Reviewer</center></h1>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</br>
	<style>
		#fra{

			position: absolute;
			right:50px;
			top:320px;
			padding:60px;
			background-color:transparent;
			
		}
		#ra{

			position: absolute;
			right:1000px;
			top:320px;
			padding:60px;
			background-color:transparent;
			
		}
		#qa{
			background-color:transparent;
			position: absolute;
			top:50px;
			
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
			top:75px;
			background-color:transparent;
			
		}
		#font{
			color:gold;
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
			<legend><font size="+1" color="yellow" face="Times New Roman">My Account</legend>
			<a href="apkushan90?"id="font">Edit my profile</a></br></br>
			<a href="changepassword.php"id="font">Change password</a></br></br>
			<a href="submitpaper.php"id="font">Upload a paper</a>
		</div>
		<div class="well span3"id="ra">
			<legend><font size="+1" color="yellow" face="Times New Roman">Notifications area</legend>
			<a href="apkushan90?"id="font">papers to review</a></br></br>
			<a href="papersub.php"id="font">Papers with resubmission</a></br></br>
			<a href="apkushan90?"id="font">papers reviewed</a>
			
		</div>
		<div class="well span3"id="fra">
			<legend><font size="+1" color="yellow" face="Times New Roman">my paper notifications</legend>
			<a href="apkushan90?"id="font">papers was reviewed</a></br></br>
			<a href="papersub.php"id="font">Papers published</a></br></br>
			<a href="apkushan90?"id="font">Other notifications</a>
			
		</div>
		<div class="well span3"id="az">
			<legend><font size="+1" color="yellow" face="ATimes New Roman">Conference content</legend>
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