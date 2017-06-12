<?php

//	Session information
session_start();
//print_r($_SESSION);
//include("session/session.php");
include("include/functions.php");

//	Page Header
include("include/header.php");
echo "</head>";

//	Navigation (menu)
include("include/nav.php");












// Content

echo "
		<br/><br/>

		<h1>
		Welkom op de Super11 website, ".$_SESSION['sess_username']."
		</h1>

		<br/>

";






/*
		<h2>Changelog:</h2>

		<ul>


echo shell_exec("git log -100 --pretty=format:'<li>%h - %s (%ci)</li>' --abbrev-commit");

echo "
		</ul>
";
*/


include($_SERVER['DOCUMENT_ROOT']."/include/footer.php");

?>
