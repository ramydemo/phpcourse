<?php include('connection.php'); ?>
<?php
$user_email='';
$user_password='';
if(isset($_POST['btn_submit']))
{
	if ($_POST['email']!='')
	{
		$user_email=trim(addslashes($_POST['email']));
	}
	else
	{
			echo '<p class="error">please enter email </p>';
			
	}

	if ($_POST['password']!='')
	{
		$user_password=$_POST['password'];
	}
		else
		{
			echo 'please enter password';
		}
}		
?>
<html>
<title> post </title>
<form  method="post" action="getpost.php">
<style>
.error {color:red;}
</style>
<p>
<input type="text" name="email" value='<?=$user_email?>' >
</p>
	<p>
	<input type="text" name="password" value='<?=$user_password?>'>
	</p>
	<p>
	<button type="submit" name="btn_submit">submit</button>
	</p>
<table border="1" width="150" >
	<tr>
		<td>
			
afdgafgasdfg
		</td>
		<td>
			asdfgsdfg
			
		</td>
		<td>
			
			ggggggggggg
		</td>
	</tr>
	<tr>
		<td>
			
afdgafgasdfg
		</td>
		<td>
			asdfgsdfg
			
		</td>
		<td>
			
			ggggggggggg
		</td>
	</tr>
</table>

</form>
</html>
