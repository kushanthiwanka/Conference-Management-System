<?php

// Create connection

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

print_r($target_file);
echo '<br>';

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Check connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucsc_conf";


$authorMail = $_SESSION["email"];
$paperTitle = $_POST["paperTitle"];
$date = date("Y/m/d") ;
$pathofPaper="../uploads/". basename( $_FILES["fileToUpload"]["name"]);
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$organization = $_POST["organization"];
$country = $_POST["country"];


if(isset($_POST['topic'])){
    foreach($_POST['topic'] as $topics){
        $topicArea=  $topics. ",";
    }
}
$topic = $topicArea;
$keywords = $_POST["keywords"];
$abstract = $_POST["abstract"];
$comments = $_POST["comments"];
$contactname = $_POST["contactname"];
$contactemail = $_POST["contactemail"];
$contactnumber=$_POST["contactnumber"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
        echo 'connected to database';
    }
   


$sql = "INSERT INTO research_paper ( AuthorMail, PaperTitle, Date, PathOfPaper, firstName, middleName, lastName, organization, country, topicAriea, keyWord, abstrakt, optionalComment, contactName, contactEmail, contactNumber) VALUES('$authorMail', '$paperTitle', '$date','$pathofPaper', '$firstname','$middlename', '$lastname', '$organization', '$country', '$topic', '$keywords', '$abstract', '$comments', '$contactname', '$contactemail', '$contactnumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " ."<br>" . $conn->error;
}

$conn->close();
