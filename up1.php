<!DOCTYPE html>
<html>
<body>

<?php

// cerate connection with ucsc_cms database.

$connect=mysqli_connect("localhost","root","","ucsc_cms");

// Check connection

if (mysqli_connect_errno()) {
	echo "Can'n connect with ucsc_cms database. " . mysqli_connect_error();
}

$authorMail = $_POST['AuthorMail'];
$paperTitle = $_POST['Title']);
$keyWords = $_POST['key_words']);
$catagory = $_POST['catagory']);
$date = date("Y/m/d") ;
$path ="../project_final/paper/". $_POST["Title"].".php" ;

$sql_query="INSERT INTO research_paper (AuthorMail, PaperTitle, KeyWords, Catagory, Date, PathOfPaper)
VALUES ('$authorMail', '$paperTitle' , '$keyWords' , '$catagory' , '$date' , '$path')";

if (!file_exists('../project_final/paper/'.$authorMail)) 
                {
                    mkdir('../project_final/paper/'.$authorMail,0777,true);
                }

move_uploaded_file($_FILES["file"]["tmp_name"],
                    "../project_final/paper/". $_FILES["file"]["name"].".pdf");

if (!mysqli_query($connect,$sql_query)) {
	die('Can not enter record into research_paper table.' . mysqli_error($connect));
}
else{
	
}

mysqli_close($connect);


?>
<!-- <form action="up2.php" name="rp" method="post" enctype="multipart/form-data"  > 
<?php

?>
 <table align="center" > 
<tr>
<td>Please Upload your paper</td>
<td><input type="file" name="file" id="file" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
-->

</body>
</html>
