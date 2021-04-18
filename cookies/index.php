<?php
require_once('../helper.php');


setcookie("user", "Arjun", time() + (86400 * 30), "/");

if (isset($_COOKIE['name'])) {
	echo $_COOKIE['name'];
}


?>