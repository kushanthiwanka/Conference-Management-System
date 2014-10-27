<html>
<head>
<script language="javascript">
function CheckImage()
	{
	if (document.image.file.value=="")
		{
		alert("Please Upload a Picture");
		return false; }
	return true;
	}
</script>
<title>Welcome</title>
</head>
<body>

<!--Connecting form variables to the Database fields-->
<?php

$name = $_POST["name"];
$email_address = $_POST["email_address"];
$postal_address = $_POST["postal_address"];
$date_of_birth = $_POST["date_of_birth"];
$phone_number = $_POST["phone_number"];
$gender = $_POST["gender"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$type = $_POST["type"];


//Connecting to the Database
require_once("DB_Connect.php");

$Data_Insert = ("INSERT INTO register(name,email_address,postal_address,date_of_birth,phone_number,gender,username,password,confirm_password,type) 
VALUES
('$name','$email_address','$postal_address','$date_of_birth','$phone_number','$gender','$username','$password','$confirm_password','$type')") or die(mysql_error());
mysqli_query($Registration_DB_Connect,$Data_Insert);
echo "Registration Successful";
mysqli_close($Registration_DB_Connect);
?>
Welcome <?php echo "  ".$_POST["name"]; 
?><br>
Your email address is: <?php echo " ".$_POST["email_address"]; ?>
<br><br>
<form action="image.php" name="image" method="post" enctype="multipart/form-data" onSubmit="return CheckImage();" >
<table align="center" >
<tr>
<td>Please Upload your Image</td>
<td><input type="file" name="file" id="file" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>


</table>
</form>

</body>
</html>