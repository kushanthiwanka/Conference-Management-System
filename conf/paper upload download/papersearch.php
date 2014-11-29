<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ICTer2014   International Conference on Advances in ICT for Emerging Regions</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 100%;
	height: 119px;
	z-index: 1;
	left: 2px;
	top: 2px;
	text-align: right;
	background-color: rgba(0,0,51,.8);
	right: 5%;
	color: rgba(204,204,204,1);
	clip: rect(auto,auto,auto,auto);
}
#Icter {
	position: absolute;
	left: 10px;
	top: 3px;
	width: 198px;
	height: 117px;
	z-index: 224;
}
#apDiv2 {
	position: absolute;
	left: 4px;
	top: 127px;
	width: 225px;
	height: 340px;
	z-index: 225;
}
</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv3 {
	position: absolute;
	left: 243px;
	top: 15px;
	width: 181px;
	height: 108px;
	z-index: 226;
	color: #FF0;
}
#apDiv4 {
	position: absolute;
	left: 245px;
	top: 132px;
	width: 864px;
	height: 3820px;
	z-index: 227;
}
h1 {
	color: #00F;
}
#apDiv3 a {
	color: #FF0;
}
.ff {
	color: #FFF;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF">
<div id="apDiv1">
  <h2>International Conference on Advances in ICT for Emerging Regions</h2>
  <h3>10-14th December 2014, Colombo (Sri Lanka)</h3>
</div>
<div id="Icter"><img src="images/icter_logo.png" width="189" height="115" alt="Icter" /></div>
<div id="apDiv2">
<ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="Home.html">Home</a></li>
	<li><a href="assign.php" class="MenuBarItemSubmenu">Assign Reviewers</a>
    <li><a href="paper.html"> Papers</a></li>
    <li><a href="addnews.php" class="MenuBarItemSubmenu">News publish</a>
    </li>
    
</div>
<div id="apDiv3"><a href="login.php">Sign in</a><br>
  <span class="ff">or</span><br>
<a href="Registration.html">Register</a></div>
<div id="apDiv4">

<body>
<form action="papersearch.php" method="post">
     <input type="text" name="search" placeholder="name">
	 <input type="submit" value="search" />
	 </form>
<?php
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("UCSC_conf") or die("cannot connect to the database");
$ot='';
if(isset($_POST['search'])){
$sear=$_POST['search'];

$query=mysql_query("select * from upload where name LIKE '%$sear%'") OR DIE ("could not search"); 
$count=mysql_num_rows($query);
if($count==0){
$ot="no result";
}
else{
   while($row=mysql_fetch_array($query)){
echo "<div id='main'>";
echo "<div style='background-color:#DCDCDC' >";
echo "Name : ". $row['name'] . "</br></br>";
echo "Type : ". $row['type'] . "</br></br>";
  echo "Size :" . $row['size'] . "</br></br>";
   echo "Content :" . $row['content'] . "</br></br>";
  echo "</div >";
	echo "</div>";
	echo "</br>";
               
}


}

}

?>
