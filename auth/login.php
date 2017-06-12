<?php
ob_start();
session_start();

require($_SERVER['DOCUMENT_ROOT']."/include/functions.php");


$username = $_POST['username'];
$password = $_POST['password'];
$user = verify_username($_POST['username']);
$user_id = $user['id'];


if ($userData = get_user($user_id)) {

	$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );

	if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
	{
		header('Location: /index.php');
	}else{ // Redirect to home page after successful login.
		session_regenerate_id();
		$_SESSION['sess_user_id'] = $userData['id'];
		$_SESSION['sess_username'] = $userData['username'];
		$_SESSION['sess_access'] = $userData['access'];
		$_SESSION['sess_email'] = $userData['email'];
		$_SESSION['kingdom_id'] = $userData['kingdom_id'];
		$_SESSION['province_id'] = $userData['province_id'];
		$_SESSION['bi_username'] = $userData['bi_username'];
		$_SESSION['bi_password'] = $userData['bi_password'];

		$kd = get_kingdomisland($_SESSION['kingdom_id']);
		$target_id = get_kingdom_setting($_SESSION['kingdom_id'], 'target');
        $target = get_kingdomisland($target_id);
		$prov = get_province_by_provinceid($_SESSION['province_id']);
		$_SESSION['kingdom'] = $kd['kingdom'];
		$_SESSION['island'] = $kd['island'];
		$_SESSION['target_kingdom_id'] = $target_id;
		$_SESSION['target_kingdom'] = $target['kingdom'];
		$_SESSION['target_island'] = $target['island'];
		$_SESSION['province_name'] = $prov['name'];

		session_write_close();
		header('Location: /?page=home');
	}
} else {
	header('Location: /index.php');
}

?>
