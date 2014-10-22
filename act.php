<!--Connecting form variables to the Database fields-->
<?php
include('conn.php');

if(!isset($_POST['name']))
{
$user_id = $_POST["user_id"];
$title = $_POST["title"];
$first_name = $_POST["first_name"];
$middle_name = $_POST["middle_name"];
$last_name = $_POST["last_name"];
$date_of_birth = $_POST["date_of_birth"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$postal_address = $_POST["postal_address"];
$postal_code = $_POST["postal_code"];
$email_address = $_POST["email_address"];
$email=$_POST["email"];
$phone_number = $_POST["phone_number"];
$fax = $_POST["fax"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];


//insert data into the database query
$Data_Insert = ("INSERT INTO member(user_id,title,first_name,middle_name,last_name,date_of_birth,gender,country,postal_address,postal_code,email_address,email,phone_number,fax,username,password,confirm_password) 
VALUES
('$user_id','$title','$first_name','$middle_name','$last_name ','$date_of_birth','$gender','$country','$postal_address','$postal_code','$email_address','$email','$phone_number','$fax','$username','$password','$confirm_password')") or die(mysql_error());
$result = mysql_query($Data_Insert);
if($result){
echo "Registration Successful";
}
mysql_close($con);
header("location:Registration.html");
exit();
}
?>

