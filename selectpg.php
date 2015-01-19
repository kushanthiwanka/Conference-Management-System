<?php
	session_start(); 
	$con=mysqli_connect(host,username,password,dbname);
	$username=$_SESSION["username"];
	$type=("SELECT type FROM register WHERE username=$username");
	if($type==1){
		header("location:home.php");
	}
	elseif($type==2){
		header("location:home.php");
	}
	elseif($type==3){
		header("location:home.php");
	}
	else{
		header("location:home.php");
	}
?>