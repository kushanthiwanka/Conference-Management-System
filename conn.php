<?php
$hostname="localhost";
$user="root";
$password="";
$database="UCSC_conf";
$con=mysql_connect($hostname,$user,$password);

if(! $con)
{
die('connection failed'.mysql_error());
}

echo 'Connected successfully';
mysql_select_db($database,$con);
?>