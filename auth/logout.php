<?php

session_start();


unset($_SESSION['sess_user_id']);
session_destroy();
header('Location: /home.php');



?>
