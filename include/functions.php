<?php

include("db/database.php");

function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}


function verify_username($db, $name) {
	$name = $db->real_escape_string($name);
	$query = "SELECT u.id, u.access, u.username, u.email FROM member u u.username='".$name."'";

	if (!$result = $mysqli->query($query)) {
		return 0;
	}
	while ($rs = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$user['id'] = $rs['id'];
		$user['access'] = $rs['access'];
		$user['username'] = $rs['username'];
		$user['email'] = $rs['email'];
	}

	if ($user['id'] == '') {
		return false;
	} else {
		return $user;
	}
}

?>
