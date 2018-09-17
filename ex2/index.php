<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

//Include files from class user,registered,and admin
include_once("classes/users.class.php");
include_once("classes/registered.class.php");
include_once("classes/admin.class.php");



//Instantiate registered user, and admin user with two parameters
$register = new Register("Regular User", "ddotson");
$admin = new Admin("Administrator", "bbdotson");




//register objects access to the properties
$register->user_level = "Regular User";
$register->user_id= "ddotson";
$register->user_type = "1";
$register->first_name = "Dewayne";
$register->last_name = "Dotson";
$register->email_address = "dotson@iupui.edu";

//admin objects access to the properties
$admin->user_level = "Administrator";
$admin->user_id = "bbdotson";
$admin->user_type= "2";
$admin->first_name = "Mike";
$admin->last_name = "Smith";
$admin->email_address = "smith@test.com";


//Print properties to screen of each regular user object
echo "User Level: ".$register->user_level."<br/>";
echo "Registered User ID: ".$register->user_id."<br/>";
echo "Registered User Type: ".$register->user_type."<br/>";
echo "Registered First Name: ".$register->first_name."<br/>";
echo "Registered Last Name: ".$register->last_name."<br/>";
echo "Registered Email: ".$register->email_address."<br/>";

echo "<hr />";

//Print properties to screen of each Administrator object
echo "User Level: ".$admin->user_level."<br/>";
echo "Admin User ID: ".$admin->user_id."<br/>";
echo "Admin User Type: ".$admin->user_type."<br/>";
echo "Admin First Name: ".$admin->first_name."<br/>";
echo "Admin Last Name: ".$admin->last_name."<br/>";
echo "Admin Email: ".$admin->email_address."<br/>";
?>


<!DOCTYPE html>
<html>
<head>
	<title>CIT 313 Exercise 2</title>
</head>
<body>
	
<?php
	
	
	
	
?>		

</body>
</html>