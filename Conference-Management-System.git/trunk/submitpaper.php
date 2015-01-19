<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<style>
			#as{
				position: absolute;
				right:205px;
				top:100px;
				background-color:transparent;
				
			}
			#az{
				background-color:transparent;
			}
			
		</style>
	</head>
	<body background="30.jpg" >
	<center><h1>Uploadpaper</h1></center>
		<div class="well span10"id="as">
			<legend><font size="+1" color="yellow" face="Times New Roman">General Information</legend>
			Submission title : &nbsp;&nbsp;<input type="text" size="20" placeholder="title"></br></br></br>
			Catogory :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="Catagory">
				<option value="all">all</option>
				<option value="a">a</option>
				<option value="b">b</option>
			</select>
			</br></br></br>
			Key tags : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="inputEmail3" placeholder="...............................................................">
			</br></br></br>
			Submission_type:&nbsp;&nbsp;&nbsp;<input type="checkbox"name="paper"> paper</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" > poster</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> shortpaper
			</br></br></br>
			<div class=well id="az">
				<legend><font size="+1" color="yellow" face="Times New Roman">Author(s)</legend>
				
				<div class=well span="6">
					<legend><font size="+1" color="green" face="Times New Roman">Author</legend>
					First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" value="FirstName"/></br>
					Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" value="LastName"/></br>
					Organization:&nbsp;&nbsp;&nbsp;<input type="text" name="Organization" value="Name"/></br>
					Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Country">
											<option value="SriLanka">SriLanka</option>
											<option value="Japan">Japan</option>
											<option value="Russia">Russia</option>
											<option value="other..">other..</option>
										</select>
					
					&nbsp;E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="address" value="email"/></br>
					Attachment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Attachment" value=""style="height:58px;"href=""/></br>
					
				<div>
				<div align="right"><button  type="submit" class="btn btn-success">Submit</button></div>
			</div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-tooltip"></script>
		<script src="js/bootstrap-popover"></script>
	</body>
</html>
