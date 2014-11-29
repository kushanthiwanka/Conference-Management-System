<?php
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_database="UCSC_conf";
$con=mysql_connect($mysql_hostname,$mysql_user,$mysql_password);

if(! $con)
{
die('connection failed'.mysql_error());
}

echo 'Connected successfully';
mysql_select_db($mysql_database,$con);
?>