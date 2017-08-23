<?php include('connection.php'); ?>

<?php
$sql = 'CREATE DATABASE db1';

if(mysqli_query($connection, $sql)) {
	echo 'Database created';
} else {
	echo 'Error creating database, ' . mysqli_error($connection);
}
