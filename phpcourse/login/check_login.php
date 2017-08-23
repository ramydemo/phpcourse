<?php
include_once ('connection.php');

//Check logged in or not
if(isset($_COOKIE[$cookie_name]))
{
	$user_id = $_COOKIE[$cookie_name];
	$sql = 'SELECT * FROM users where id="'.$user_id.'"';

	$query = mysqli_query($connection, $sql);
	if(mysqli_num_rows($query) > 0)
	{
		//user exist
		//get user data
		$user_data = mysqli_fetch_assoc($query);
	} else {
		//user not exist, redirect
		header('location: login.php');
	}
} else {
	header('location: login.php');	
}