<?php
ob_start();
session_start();

include("../include/functions.php");
include("../db/database.php");


//print_r2($_POST);
print_r2($db);

$user = verify_username($db, $_POST['username']);
$user_id = $user['id'];

print_r2($user);



if ($userData = get_user($db, $user['id'])) {

	$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );

	if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
	{
        header('Location: ../home.php');
	}else{ // Redirect to home page after successful login.
		session_regenerate_id();
		$_SESSION['sess_user_id'] = $userData['id'];
		$_SESSION['sess_username'] = $userData['username'];
		$_SESSION['sess_access'] = $userData['access'];
		$_SESSION['sess_email'] = $userData['email'];


		session_write_close();
        header('Location: ../home.php');
	}
} else {
    header('Location: ../home.php');
}

?>
