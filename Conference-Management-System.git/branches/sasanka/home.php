<html>
	<head>
		<TITLE> Home </title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.carousel').carousel({
					interval:3000
				});
			});
		</script>
		<style>
			#footer {
			background-color:black;
			font-size:60%;
			color:white;
			clear:both;
			text-align:center;
			padding:5px;
		}
			#li{
				position: absolute;
				right:35px;
			}
			#fra{

			position: absolute;
			right:350px;
			top:520px;
			
		}
			#form{
			top:170px;
			position: absolute;
			right:35px;
			background-color:transparent;
			
		}
			#log{
			background-color:transparent;
			position:absolute;
			top: 250px;
			right: 25px;
			
		}
		</style>
		<?php
			include ('login.php');
		?>
	</head>
	<body background="30.jpg"> 
		<br/>
		<div class="span2">
			<img src="icter.jpg">
		</div>
		<br/><br/>
		<font size="+10" color="purple" face="Bauhaus 93"> UCSC CONFERANCE MANAGEMENT SYSTEM</font>	
		<br/><br/><br/>
		<div class=" span5 offset4">
			<ul class="nav nav-pills" >
				<li class="active"><a href="home.html">Home&nbsp</li></a>
				<li><a href="">&nbsp About us &nbsp</li></a>  
				<li><a href="contact us.html">&nbsp Contact us &nbsp</li></a>
				<li><a href="">&nbsp History &nbsp</li></a>
			</ul>
		</div>
		<div class="content offset12"id="li">
			<p><a href="https://www.facebook.com/ICTer?fref=ts" target="_blank"><img alt="" src="http://www.icter.org/conference/images/facebook.png" /></a><a href="https://twitter.com/#!/ICTerorg" target="_blank"><img alt="" src="http://www.icter.org/conference/images/twitter.png" /></a><a href="http://ieeexplore.ieee.org/xpl/aboutJournal.jsp?punumber=1800178#AimsScope" target="_blank"><img alt="" src="http://www.icter.org/conference/images/ieee.png" /></a><a href="http://scholar.google.com/scholar?q=site%3Aicter.org+&amp;hl=en&amp;btnG=Search&amp;as_sdt=1%2C5&amp;as_sdtp=on" target="_blank"><img alt="" src="http://www.icter.org/conference/images/scholar.png" /></a><a href="http://www.flickr.com/photos/91862002@N02/" target="_blank"><img alt="" src="http://www.icter.org/conference/images/flicker.png" /></a></p>
		</div>
		<div class="well span3 offset12" id="log">
			<form>
				<legend><font size="+1" color="purple" face="Arial">Login</legend>
				<div align="left">
					<label>Username</label>
					<input type="text" name="username" placeholder="ENTER YOUR USERNAME........"/></br>
					<label>Password</label>
					<input type="password" name="pwd" placeholder="ENTER YOUR PASSWORD.........."/>
					<input type="checkbox" name="remember"/><font size="3%" color="black" face="Monotype Corsiva">&nbspRemember me</font>
					</br></br>
				</div>
				<button type="submit" class="btn btn-primary ">Sign in</button>
			</form>
		</div>
		<div class="span8 offset3">
		<center>
			<div class="container row   carousel carousel-inner " id="myCarousel" >
				<div class="item active"><img src="main_banner1.jpg"> </div>
				<div class="item "><img src="main_banner2.jpg"> </div>
				<div class="item "><img src="main_banner3.jpg"/>  
				<a class="carousel-control left" href="#myCarousel" data-slide="prev"> &lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next"> &rsaquo;</a>
			</div>
		</center>
		</div>
		<form class="well form-search"id="form">
			<input type="text" class="span2 search-query"placeholder="search....."/>
			<button class="btn btn-small btn-success">search</button>
		</form>
		<iframe id="fra"src="dis.html" width="900" height="185"></iframe>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<div id="footer">
			Copyright &#169 Group No 09
		</div>
		
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
	</body>
</html>