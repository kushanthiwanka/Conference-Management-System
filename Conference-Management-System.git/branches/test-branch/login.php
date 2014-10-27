<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body>
		<a href="#myModal" class="btn" data-toggle="modal">Login here...</a>
		<div class="modal hide" id="myModal" aria-hidden="true">
			<div class="modal-header">
				<h3>Login<h3/>
			</div>
			<div class="modal-body">
				<form >
					<legend><font size="+1" color="purple" face="Arial">Login</legend>
					<div align="left">
						<label>Username</label>
						<input class="span2" type="text" name="username" placeholder="ENTER YOUR USERNAME........"/></br>
						<label>Password</label>
						<input class="span3" type="password" name="pwd" placeholder="ENTER YOUR PASSWORD.........."/>
						<br/><input type="checkbox" name="remember"/><font size="3%" color="black" face="Monotype Corsiva">&nbspRemember me</font>
						</br></br>
					</div>
					<button type="submit" class="btn btn-primary ">Sign in</button>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hiden="true">close</button>
			</div>
		</div>
	</body>
</html>