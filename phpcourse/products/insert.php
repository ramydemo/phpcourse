<?php include 'connection.php'; ?>
<?php include 'functions.php'; ?>
<?php
	$sql = 'select name,grpcode from groups';
	ini_set('mbstring.substitute_character', "none");	 

		$result = mysqli_query($connection, $sql);
		if($result)
		{ ?>
			<select>
	<?php
			while($ri = mysqli_fetch_array($result))
				{
				echo "<option value=" .$ri['grpcode'] . ">" . mb_convert_encoding($ri['name'],'HTML-ENTITIES','UTF-8') . "</option>";
				}
				echo "</select> ";?>
			</select>
	<?php	
		} else {
			echo 'Error, '. mysqli_error($connection);
		}

$prod_name='';
$prdcode='';
$grpcode='';
$image1='';
$image2='';
	if(isset($_POST['btn_submit']))
	{
		$name = clean_input($connection, $_POST['name']);
		$prdcode = clean_input($connection, $_POST['prdcode']);
		$grpcode = clean_input($connection, $_POST['grpcode']);

		//var_dump($_FILES['image']);die;<<
		//select file
		//extension
		//size
		if(isset($_POST["btn_submit"]))
			{
			    
			if($_FILES['image1']['name']) {
				//select file
				$image_name = $_FILES['image1']['name'];
				if($_FILES['image1']['type']=='image/jpeg' || $_FILES['image1']['type']=='image/x-png' || $_FILES['image1']['type']=='image/png')
				{
					if($_FILES['image1']['size'] <= 3145728)
					{
						$ext = substr($_FILES["image1"]["name"], strrpos($_FILES["image1"]["name"], '.') + 1);
						$image1 = rand(1000, 9999) .'.'.$ext;
						move_uploaded_file($_FILES['image1']['tmp_name'], 'uploads/'.$image1);
						echo "picture is saved";
					}
					else
					{
						echo "picture is unsaved";
					}
				}
			}
		}
		$sql = 'INSERT INTO products (grpcode, prdcode, name, image1,image2)
			VALUES("'.$grpcode.'", "'.$prdcode.'", "'.$name.'", "'.$image1.'", "'.$image2.'")';

		$result = mysqli_query($connection, $sql);
		if($result)
		{
			//header('location: index.php');
			echo "sql is saved";

		} else {
			echo 'Error, '. mysqli_error($connection);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype='multipart/form-data'>


<table style="width:100%">
 <tr>
	<td>
		product name
	</td>
	<td>
		<input type="text" name="name" value='<?=$prod_name?>' > 
	</td>
</tr>
<tr>
	<td>
		product code
	</td>
	<td>
		<input type="text" name="prdcode" value='<?=$prdcode?>' > 
	</td>
</tr>
<tr>
	<td>
		grpcode
	</td>
	<td>
		<input type="text" name="grpcode" value='<?=$grpcode?>' >
	</td>
</tr>	   
 <tr>
	<td>
		<input type="file" name="image1" id="image1">
	</td>
	<td>
		<input type="file" name="image2" id="image2">
	</td>
	
</tr>	
</table>
  <button type="submit" name="btn_submit">submit</button>  
	</form>
</body>
</html>