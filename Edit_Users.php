<html>
    <head>
        <script>
            	if(document.edit.name.value!=''){
		$query2 = ("UPDATE member SET name='$name' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.address.value!=''){
		$query2 = ("UPDATE member SET address='$postal_address' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.phone_number.value!=''){
		$query2 = ("UPDATE member SET phone_number='$phone_number' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}
	if(document.edit.username.value!=''){
		$query2 = ("UPDATE member SET username='$username' WHERE username = '$username'");
		mysqli_query($Registration_DB_Connect,$query2);
	}

        </script>

    </head>
</html>

<?php

session_start();
$username=$_SESSION["email_address"];

if(!isset($_SESSION["email_address"])) 
	{
	header("Location:Error.html");
	exit;
	}
if(isset($_POST['submit']))
	{
	        
	$con=mysql_connect('localhost','root','');
        $var = mysql_select_db('ucsc_conf');
        
	$name = filter_input(INPUT_POST, 'var_name')["name"];
	$postal_address = filter_input(INPUT_POST, 'postal_address');
	$phone_number = filter_input(INPUT_POST, 'phone_number');
	$username = filter_input(INPUT_POST, 'username');
        
	echo'change successfull';
	mysql_close($Registration_DB_Connect);
	}
	
?>
<html>
	<body background="image/30.jpg" >
	<h1 style="color:gold"> Your profile is changed</h1>
	<?php
	header("Location:edit.php");
	?>
	<a href="author.php"><font color="red"><b>Click here to back to profile</b></a>
</body>
</html>
