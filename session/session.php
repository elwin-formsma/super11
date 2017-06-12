<?php
//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
/*
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
	header("location: /auth/logout.php");
exit();
}

 */

require("db/database.php");
require("include/functions.php");

print_r2($_SESSION);

/*
$target_id = get_kingdom_setting($_SESSION['kingdom_id'], 'target');
$target = get_kingdomisland($target_id);
$_SESSION['target_kingdom_id'] = $target_id;
$_SESSION['target_kingdom'] = $target['kingdom'];
$_SESSION['target_island'] = $target['island'];
 */


?>
