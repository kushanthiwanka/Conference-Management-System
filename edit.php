<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/bootstrap.js" type="text/javascript"></script></head>
	<script language="JavaScript">
		function CheckForm() {
			if(document.edit.email_address.value=='') {
				alert("Enter your email address to continue");
				return false; }
				return true;
			}
	</script>	
	<title>Edit User Info</title>
<body background="image/30.jpg" >
<br>
<center>
	<h1 style="color:gold">Change My Account</h1>
<br>

<form action="Edit_Users.php" method="post" name="edit"onsubmit="return CheckForm();">
<table>
<tr>
	<td style="color:gold">Name</td>
	<td><input type="text" name="name" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Email Address</td>
	<td><input type="email" name="address" placeholder="example@yourmail.com" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Postal Address</td>
	<td><input type="text" name="postal_address" value="" size="50"></td>
</tr>

<tr>
	<td style="color:gold">Phone Number</td>
	<td><input type="tel" name="phone_number" value="" size="50"></td>
</tr>



<tr>
	<td style="color:gold">Username</td>
	<td><input type="text" name="username" value="" size="50"></td>
</tr>

<br>

</table>
<br><br>
		
		<button type="submit" class="btn btn-primary ">change</button></form>
		<form action="author.php">	<button type="submit" class="btn btn-warning ">cancel</button></form>
		


</center>
</body>

</html>