<?php
if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/png"))&& ($_FILES["file"]["size"] < 100000000))
	{
	if ($_FILES["file"]["error"] > 0)
		{
		echo "File Error : " . $_FILES["file"]["error"] . "<br />";
		}
	else 
		{
		echo "Upload File Name: " . $_FILES["file"]["name"] . "<br />";
		echo "File Type: " . $_FILES["file"]["type"] . "<br />";
		echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 

		if (file_exists("image/".$_FILES["file"]["name"]))
			{
			echo "<b>".$_FILES["file"]["name"] . " already exists. </b>";
			}
			else
				{
				move_uploaded_file($_FILES["file"]["tmp_name"],"image/". $_FILES["file"]["name"]);
				echo "Stored in: " . "image/" . $_FILES["file"]["name"]."<br />";
?>
Uploaded File:<br>
<img src="image/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" >
<?php
				}			
		}
	
	}
else
	{
echo "Invalid file detail ::<br> file type ::".$_FILES["file"]["type"]." , file size::: ".$_FILES["file"]["size"];
	}
?>

<html>
<body bgcolor="yellow">
Go to the <a href="home.php">Login Page.</a>
</body>
</html>
