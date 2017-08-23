<?php

$str = 'This is a Mohamed\'s Watch ---- "<>?#^)(&*' ;
//echo html_entity_encode($str);

//Connect
//Create database
//Create table
//check if name, email not empty
//insert data


$user_email = '';
$user_password = '';

if(isset($_POST['btn_submit']))
{
	$user_email = trim(addslashes($_POST['email']));
	$user_email = htmlspecialchars($user_email);

	$user_password = $_POST['password'];

	if($user_email=='')
	{
		echo 'enter your email';
	}
	else if($user_password=='') 
	{
		echo 'enter your password';
	} 
	else
	{
		header("location: loggedin.php");		
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" action="forms.php">
		<p>
			Name
			<input type="text" name="name" value='<?= @$user_name ?>'>
		</p>
		<p>
			Email
			<input type="text" name="email" value='<?= $user_email ?>'>
		</p>
		<p>
			Gender
			<label>
				Male
				<input type="radio" name="gender" value="male">
			</label>

			<label>
				Female
				<input type="radio" name="gender" value="female">
			</label>
		</p>
		<p>
			Password
			<input type="password" name="password" value='<?php echo $user_password; ?>'>
		</p>
		<p>
			<button type="submit" name="btn_submit">Submit</button>
		</p>
	</form>

</body>
</html>