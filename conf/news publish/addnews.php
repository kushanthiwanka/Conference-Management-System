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
    <li><a href="newsdis.php" class="MenuBarItemSubmenu">News publish</a>
    </li>
    
</div>
<div id="apDiv3"><a href="#">Sign in</a><br>
  <span class="ff">or</span><br>
<a href="#">Register</a></div>
<div id="apDiv4">
  <h1>Publish Site News</h1>
  <div>
  <div style= "width:500; margin:30px; padding:10px;">
<form method="post" action="#"> 
	<strong>Title : </strong> &nbsp  &nbsp  &nbsp   <input name="subject" id="subject" type="Text" ><br /><br />
	<strong>Brief Description : <strong>  &nbsp  &nbsp   &nbsp &nbsp  <br/> <textarea name="news" id="news" cols="50" rows="5"></textarea><br /><br />
	<strong>Publish Date :<strong> <input id="a" type="date" name="date" placeholder="yyyy/mm/dd" ><br/><br/><br/>
	<input type="Submit" name="submit" id="submit" value="Publish">
</form><br/><br/>
<a href="newsup.php"> update news</a>
<br/><br/>
<?php
if(!isset($_POST['name']))
{ 

	 if (empty($_POST['subject']))
		die(''); 
	else if (empty($_POST['news']))
		die('Brief Description.'); 
	else if (empty($_POST['date']))
		die('Enter publish date.'); 

	$subject = $_POST['subject']; 
	$news = $_POST['news']; 
	$date = $_POST['date'];
	include("conn.php");
	if(mysql_query("INSERT INTO news (news_id , subject , news , date) VALUES ('', '$subject', '$news', '$date')"))
		echo 'News Entered.';
	mysql_close(); 
}
?>

</body>
</html>