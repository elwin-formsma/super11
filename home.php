<?php
#$page_home = "class='active'";

#$page = $_GET['page'];

//	Session information
include("session/session.php");

//	Page Header
include("include/header.php");
echo "</head>";

//	Navigation (menu)
include("include/nav.php");

echo "
		<br/><br/>

		<h1>
		Welkom op de Super11 website, ".$_SESSION['sess_username']."
		</h1>

		<br/>

		<h2>Orders:</h2>
		<ul>

";


    $orders = get_orders();

    foreach ($orders as $o) {
        echo "<pre>".$o['message']."</pre>";
        //$message = preg_replace("|x[0-9]|", "", $o['message']);
        //echo "<li>".$o['id'].": ".$message."</li>";
    }

echo "
        </ul>
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
