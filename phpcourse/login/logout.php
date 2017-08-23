<?php
include ('connection.php');

/*if(isset($_COOKIE[$cookie_name]))
{*/
	$expiry = time() - 1*60*60;
	setcookie($cookie_name, '', $expiry, '/'); //will be deleted (expired)
//}

header('location: login.php?continue='. @$_GET['continue']);
