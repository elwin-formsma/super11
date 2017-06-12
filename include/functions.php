<?php

function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}


function verify_username($db, $name) {
	$name = $db->real_escape_string($name);
	$query = "SELECT u.id, u.access, u.username, u.email FROM member u WHERE u.username='".$name."'";

	if (!$result = $db->query($query)) {
		return 0;
	}
	while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
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

function get_user($db, $user_id) {

    $query = "SELECT id, username, password, access, salt, email FROM member WHERE id = '".$user_id."'";

    $result = $db->query($query);

    if($result->num_rows == 0) {
        return false;
    }

    if ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        return $rs;
    } else {
        return false;
    }
}


?>
