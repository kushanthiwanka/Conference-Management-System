
<?php
$email=$_SESSION["email_address"];
$con=mysqli_connect("localhost","root","","ucsc_conf");  
$a=('SELECT PaperTitle,AuthorMail,KeyWords,Catagory,Date,mark,comment FROM research_paper where mark!=0');
$Select_data=mysqli_quary($con,$a);
		if(mysqli_affected_rows()==0) 
			{
			echo "No more one reviewed";
			}
		else
			{
				foreach($b as $Select_data){
					echo $b;
				}

			}	
?>