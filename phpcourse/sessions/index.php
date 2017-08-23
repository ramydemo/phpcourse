<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello</h1>

	<button type="button" class="btn btn-danger">Click</button>
</body>
</html>

<?php
	$_SESSION['myname'] = 'Ahmed';
	echo $_SESSION['myname'];
?>