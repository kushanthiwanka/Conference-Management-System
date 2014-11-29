<?php

mysql_connect('localhost','root','');
mysql_select_db('UCSC_conf');

if(!isset($_GET['user_id']))
{
	$query = mysql_query("SELECT * FROM member ORDER BY user_id DESC");
	while($output = mysql_fetch_assoc($query))
		echo $output['first_name'].' &raquo; <a href="?user_id='.$output['user_id'].'"> Profile</a><br />';
}
else
{

 if (isset($_POST['submit']))
	{
			
		$title = $_POST["title"];
		$first_name = $_POST["first_name"];
		$middle_name = $_POST["middle_name"];
		$last_name = $_POST["last_name"];
		$country = $_POST["country"];
		$postal_address = $_POST["postal_address"];
		$postal_code = $_POST["postal_code"];
		$email_address = $_POST["email_address"];
		$phone_number = $_POST["phone_number"];
		$fax = $_POST["fax"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		$user_id = $_GET["user_id"]; 
		mysql_query("UPDATE member SET title='$title', first_name='$first_name', middle_name='$middle_name',last_name='$last_name',country='$country',postal_address='$postal_address',postal_code='$postal_code',email_address='$email_address',phone_number='$phone_number',fax='$fax', username='$username',password='$password ',confirm_password='$confirm_password' WHERE user_id='$user_id'");
		mysql_close();
		echo 'success.';
	}
	else
	{
		$user_id = $_GET["user_id"]; 
		$query = mysql_query("SELECT * FROM member WHERE user_id='$user_id'");
		$output = mysql_fetch_assoc($query);
		

?>

<div style= "width:500; margin:50px; padding:10px;">
<form method="post" action="?user_id=<?php echo $output['user_id']; ?>"> 
<strong>Title : </strong> &nbsp  &nbsp  &nbsp <select name="title" value="<?php echo $output['title'];?>">
        <option>Rev.</option>
	    <option>Mr.</option>
	    <option>Mrs.</option>
		<option>Ms.</option>
	    <option>Dr.</option>
		<option>Prof.</option>
		</select>  
        <br /><br />
<strong>First Name : <strong>  &nbsp  &nbsp   &nbsp &nbsp <input type="text"  name="first_name" cols="50" rows="5" value="<?php echo $output['first_name']; ?>"><br /><br />
<strong>Middle Name :<strong><input name="middle_name"  type="text"  value="<?php echo $output['middle_name']; ?>"><br /><br />
<strong>Last Name : </strong> &nbsp  &nbsp  &nbsp <input name="last_name"  type="Text"  value="<?php echo $output['last_name']; ?>"><br /><br />
<strong>country : <strong>  &nbsp  &nbsp   &nbsp &nbsp <select  name="country" value ="<?php echo $output['country'];?>">
		<option>America</option>
		 <option>Australia</option>
		 <option>Austria</option>
		 <option>Bahrain</option>
		 <option>Bangladesh</option>
		 <option>Brazil</option>
		 <option>Canada</option>
		 <option>China</option>
		 <option>Cuba</option>
		 <option>Cyprus</option>
		 <option>Czech Republic</option>
		 <option>Denmark</option>
		 <option>El Salvador</option>
		 <option>Finland</option>
		 <option>France</option>
		 <option>Germany</option>
		 <option>Hong Kong</option>
		 <option>Iceland</option>
		 <option>India</option>
		 <option>Indonesia</option>
		 <option>Iran</option>
		 <option>Iraq</option>
		 <option>Ireland</option>
		 <option>Israel</option>
		 <option>Italy</option>
		 <option>Jamaica</option>
		 <option>Japan</option>
		 <option>Jordan</option>
		 <option>Korea, North</option>
		 <option>Korea, South</option>
		 <option>Kuwait</option>
		 <option>Lebanon</option>
		 <option>Malaysia</option>
		 <option>Maldives</option>
		 <option>New Zealand</option>
		 <option>Netherlands</option>
		 <option>Nepal</option>
		 <option>Oman</option>
		 <option>Pakistan</option>
		 <option>Philippines</option>
		 <option>Poland</option>
		 <option>Portugal</option>
		 <option>Qatar</option>
		 <option>Russia</option>
		 <option>Saudi Arabia</option>
		 <option>Singapore</option>
		 <option>Sri Lanka</option>
		 <option>Switzerland</option>
		 <option>Thailand </option>
		 <option>United Kingdom</option>
		 <option>Vietnam</option>
		 <option>Yemen</option>
		 <option>Zimbabwe</option>
		 </select>  <br /><br />
<strong>Postal Address:<strong><textarea name="postal_address" type="text"  value="<?php echo $output['postal_address']; ?>"></textarea><br /><br />
<strong>Postal code : </strong> &nbsp  &nbsp  &nbsp <input name="postal_code"  type="Text"  value="<?php echo $output['postal_code']; ?>"><br /><br />
<strong>Email Address: <strong>  &nbsp  &nbsp   &nbsp &nbsp <input name="email_address"  type="Text"  value="<?php echo $output['email_address']; ?>"><br /><br />
<strong>Phone Number :<strong><input name="phone_number" type="text"  value="<?php echo $output['phone_number']; ?>"><br /><br />
<strong>Fax : </strong> &nbsp  &nbsp  &nbsp <input name="fax"  type="Text"  value="<?php echo $output['fax']; ?>"><br /><br />
<strong>Username: <strong>  &nbsp  &nbsp   &nbsp &nbsp <input name="username" cols="50" rows="5" value="<?php echo $output['username']; ?>"><br /><br />
<strong>Password :<strong><input name="password"  type="password"  value="<?php echo $output['password']; ?>"><br /><br />
<strong>Confirm Password :<strong><input name="confirm_password"  type="password"  value="<?php echo $output['confirm_password']; ?>"><br /><br />

<input type="Submit" name="submit" value="Publish">
</form>
<?php 
}
}
?>
