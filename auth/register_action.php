<?php

#include("header.php");
require("../database.php");



$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
 
if($password1 != $password2) {
	header('Location: ../register.php');
	exit;
}
 
if(strlen($username) > 30) {
	header('Location: ../register.php');
	exit;
}
 
$hash = hash('sha256', $password1);
 
function createSalt()
{
$text = md5(uniqid(rand(), true));
return substr($text, 0, 3);
}
 
$salt = createSalt();
$password = hash('sha256', $salt . $hash);
 
#$mysqli = new mysqli('localhost', 'root', '', 'login'); //we change the mysqli_connect to "new mysqli"
#echo $username;
 
//sanitize username
$username = $mysqli->real_escape_string($username);

$query = "INSERT INTO member ( username, password, email, access, salt ) VALUES
( '".$username."', '".$password."', '".$email."', 0, '".$salt."' )";

 
//remove $conn variable in order to connect to our database using OOP.
$mysqli->query($query);
 
header('Location: ../index.php');
exit;

?>
