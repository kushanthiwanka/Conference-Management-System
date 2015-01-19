<?php
	session_start(); 
	$con=mysqli_connect('localhost','root','','ucsc_conf');
	$email=$_SESSION["email_address"];
	$Data_Insert = ("INSERT INTO member(title,first_name,middle_name,last_name,date_of_birth,gender,country,postal_address,postal_code,email_address,email,phone_number,fax,username,password,confirm_password,role) VALUES ('$title','$first_name','$middle_name','$last_name ','$date_of_birth','$gender','$country','$postal_address','$postal_code','$email_address','$email','$phone_number','$fax','$username','$password','$confirm_password','$role')");
?>