<?php
	session_start(); 
	$con=mysql_connect('localhost','root','');
	$var = mysql_select_db('ucsc_conf');
	$username=$_SESSION["email_address"];
        
	$type =  mysql_query("SELECT role FROM member WHERE email_address='$username'") ;
        $tt = mysql_fetch_array($type);
        
	if($tt['role'] ==='A'){
		header("location:Author.php");
	}
	elseif($tt['role'] ==='R'){
		header("location:Reviewer.php");
	}
	else{
		header("location:home.html");
	}
?>