<?php

require("host.php");


$db = new mysqli($my_host, $my_user, $my_pw, $my_db); //we change the mysqli_connect to "new mysqli"

if($db->connect_errno > 0){
	    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>
