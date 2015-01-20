<?php
session_start();

if(isset($_SESSION["email_address"])){
	unset($_SESSION["email_address"]);
        header("location:home.html");
}

?>