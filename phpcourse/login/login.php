<?php
include 'connection.php';

if(isset($_COOKIE[$cookie_name])) {
	$user_id = $_COOKIE[$cookie_name];
	$query = mysqli_query($connection, 'SELECT * FROM users WHERE id='.$user_id.'');
	if(mysqli_num_rows($query)) {
		header('location: myaccount.php');
	}
}
/*login form
submit
check db
user, password (encrypted)
true 
	1- Create Cookie (ID)
	2- redirect myaccount

false (login stay, error "invalid")

mysqli_num_rows > 0*/

	if(isset($_POST['btn_submit']))
	{
		$email = clean($connection, $_POST['email']);
		$password = clean($connection, $_POST['password']);

		if(empty($email) || empty($password)) {
			$error_msg = 'Please enter both email and password';
		} else {
			$sql = mysqli_query($connection, "
					SELECT * FROM users
					WHERE email='".$email."' AND password='".md5($password)."'
					");

			if($sql && mysqli_num_rows($sql) > 0) {
				//user exist in DB
				$user = mysqli_fetch_assoc($sql); //complete row
				$user_id = $user['id'];

				//create cookie
				$expiry = time() + 1*60*60;
				setcookie($cookie_name, $user_id, $expiry, '/');

				//redirect 
				if(isset($_GET['continue'])) {
					header('location: '.$_GET['continue']);
				} else {
					header('location: myaccount.php');
				}
			} else {
				//not exist
				$error_msg = 'Invalid compination email or password';
			}			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<style type="text/css">
		.error { color: red; border: 1px solid red; padding:20px; background:#f0f0f0;  }
	</style>
</head>
<body>
	<?php 
		if(isset($error_msg) && !empty($error_msg)) {
			echo '<div class="error">'.$error_msg.'</div>';
		}
	?>

	<form method="POST" action="<?=$_SERVER['REQUEST_URI']?>">
		<p>
			<label for="email_id">Email</label>
			<input type="email" name="email" id="email_id" required="">
		</p>
		<p>
			<label for="password_id">Password</label>
			<input type="password" name="password" class="" id="password_id" required="" />
		</p>
		<p>
			<button name="btn_submit">Login !</button>
		</p>
	</form>
</body>
</html>