<?php include('connection.php'); ?>

<?php

$sql = 'INSERT INTO users (name, email) values("Ahmed Ibrahim", "ahmed@gmail.com")';

if(mysqli_query($connection, $sql))
{
	echo 'record inserted';
} else {
	echo mysqli_error($connection);
}