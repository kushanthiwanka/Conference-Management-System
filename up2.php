<html>
<body>

<?php

//ath_mail();
//$connect=mysqli_connect("localhost","root","","ucsc_cms");
//$authorMail = mysqli_real_escape_string($connect, $_POST['AuthorMail']);

//if (!file_exists('../final/paper/'.$authorMail)) 
                //{
                    //mkdir('../final/paper/'.$authorMail,0777,true);
                //}

move_uploaded_file($_FILES["file"]["tmp_name"],
                    "../final/paper/". $_FILES["file"]["name"].".pdf");
					
?>
