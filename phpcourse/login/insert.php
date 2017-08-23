<?php 

include('connection.php');

for ($i=1; $i <= 10; $i++) { 
	mysqli_query($connection, '
		INSERT INTO users (email, password)
		VALUES ("myemail'.$i.'@gmail.com", "'.md5($i).'")
	');

	echo ' query no ' . $i . ' successed <br>';
}


echo 'end';