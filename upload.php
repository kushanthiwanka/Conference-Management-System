<?php

// Check connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucsc_conf";
$state = 1;
if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $fileType = (get_magic_quotes_gpc() == 0 ? mysql_real_escape_string(
                            $_FILES['userfile']['type']) : mysql_real_escape_string(
                            stripslashes($_FILES['userfile'])));
	
	$fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }

$authorMail = filter_input(INPUT_POST, 'contactemail');
$paperTitle = filter_input(INPUT_POST, 'paperTitle');
$date = date("Y/m/d") ;

//$pathofPaper="../uploads/". basename( $_FILES["fileToUpload"]["name"]);

$firstname = filter_input(INPUT_POST, 'firstname');
$middlename = filter_input(INPUT_POST, 'middlename');
$lastname = filter_input(INPUT_POST, 'lastname');
$organization = filter_input(INPUT_POST, 'organization');
$country = filter_input(INPUT_POST, 'country');


if(isset($_POST['topic'])){
    foreach($_POST['topic'] as $topics){
        $topicArea=  $topics. ",";
    }
}
$topic = $topicArea;
$keywords = filter_input(INPUT_POST, 'keywords');
$abstract = filter_input(INPUT_POST, 'abstract');
$comments = filter_input(INPUT_POST, 'comments');
$contactname = filter_input(INPUT_POST, 'contactname');

$contactnumber=filter_input(INPUT_POST, 'contactnumber');

$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db = mysql_select_db('test', $con);
/*
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
        echo 'connected to database';
    }
   
*/

if ($db) {

        $sql = "INSERT INTO research_paper ( AuthorMail,state, PaperTitle, Date, firstName, middleName, lastName, organization, country, topicAriea, keyWord, abstract, optionalComment, contactName, contactNumber, name, size, type, content)". "VALUES ('$authorMail', '$state','$paperTitle', '$date', '$firstname','$middlename', '$lastname', '$organization', '$country', '$topic', '$keywords', '$abstract', '$comments', '$contactname', '$contactnumber', '$fileName', '$fileSize', '$fileType', '$content')";

            mysql_query($sql) or die('Error, query failed');
            mysql_close();
            echo "<br>File $fileName uploaded<br>";
	}else {
        echo "file upload failed";
        }
/*
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " ."<br>" . $conn->error;
}

*/

}