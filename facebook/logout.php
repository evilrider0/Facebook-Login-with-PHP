<?php 
require_once 'config.php';
session_unset();
session_destroy();
header('Location: login.php');
if (session_destroy()) {
	echo 'logged Out';
}
exit();
 ?>