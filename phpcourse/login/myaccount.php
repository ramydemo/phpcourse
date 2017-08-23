<?php
include ('connection.php');
include ('check_login.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
</head>
<body>
<h2>My Account</h2>
Welcome, <?=$user_data['email']?>

<br>
<a href="logout.php?continue=<?=$_SERVER['REQUEST_URI']?>">Logout</a>

</body>
</html>