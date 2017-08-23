<?php include('connection.php'); ?>

<?php
$sql = '
	CREATE TABLE users
	(
	id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name varchar(60) NOT NULL,
	email varchar(30) NOT NULL,
	created_at TIMESTAMP
	)
';

if(mysqli_query($connection, $sql)) {
	echo 'Table created';
} else {
	echo 'Error, ' . mysqli_error($connection);
}