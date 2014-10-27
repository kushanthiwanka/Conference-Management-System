<html>
	<head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<title>Registration</title>	
	
<script language="JavaScript">
function CheckForm() {
	if(document.Registration.name.value=='') {
		alert("Enter your name to continue");
		return false; }
	if(document.Registration.email_address.value=='') {
		alert("Enter your email address to continue");
		return false; }
	if(document.Registration.postal_address.value=='') {
		alert("Enter your postal address to continue");
		return false; }
	if(document.Registration.date_of_birth.value=='') {
		alert("Enter your date of birth to continue");
		return false; }
	if(document.Registration.phone_number.value=='') {
		alert("Enter your phone number to continue");
		return false; }
	if(document.Registration.gender.value=='') {
		alert("Please Select your gender to continue");
		return false; }
	if(document.Registration.username.value=='') {
		alert("Please provide a valid username");
		return false; }
	if(document.Registration.password.value=='') {
		alert("Please provide avalid password");
		return false; }
	if(document.Registration.password.value!=document.Registration.confirm_password.value) {
		alert("The passwords you types don't match. Retype the password again");
		return false; }
	if(document.Registration.type.value=='') {
		alert("Enter you what type of post register");
		return false; }
	return true;
	}
</script>
	</head>
<body background="image/30.jpg" onload="document.Registration.name.focus();">
<br>
<center>
	<h1 style="color:gold">Register for a New Account</h1>
<br>
<!--The registration form for the users -->
<form action="Welcome.php" method="post" name="Registration" onsubmit="return CheckForm();">

<table>
<tr>
	<td style="color:gold">Name</td>
	<td><input type="text" name="name" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Email Address</td>
	<td><input type="email" name="email_address" placeholder="example@yourmail.com" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Postal Address</td>
	<td><input type="text" name="postal_address" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Date of Birth</td>
	<td><input type="date" name="date_of_birth" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Phone Number</td>
	<td><input type="tel" name="phone_number" value="" size="50"></td>
</tr>

<tr>
	<td style="color:gold">Gender</td>
	<td><input type="radio" name="gender" value="Male"><font style="color:gold">Male</font>
	<input type="radio" name="gender" value="Female"><font style="color:gold">Female</font>
	</td>
</tr>

<tr>
	<td style="color:gold">Username</td>
	<td><input type="text" name="username" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Password</td>
	<td><input type="password" name="password" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">Confirm Password</td>
	<td><input type="password" name="confirm_password" value="" size="50"></td>
</tr>
<tr>
	<td style="color:gold">type</td>
	<td><input type="radio" name="type" value="Author"><font style="color:gold">Author</font>
	<input type="radio" name="type" value="Reviewer"><font style="color:gold">Reviewer</font>
	<input type="radio" name="type" value="Manager"><font style="color:gold">Manager</font>
	</td>
</tr>
<br>

</table>
<br><br>
		
			<button type="submit" class="btn btn-primary ">Register</button>
		
</form>

</center>
</body>

</html>