<?php include 'connection.php'; ?>
<?php include 'functions.php'; ?>
<?php

	if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
		$id = clean_input($connection, $_GET['id']);
	} else {
		header('location: index.php');
	}

	$query = mysqli_query($connection, 'SELECT * FROM products WHERE id='.$id);
	$product = mysqli_fetch_assoc($query);

	$name = $product['name'];
	$description = $product['description'];
	$image = $product['image'];
	$price = $product['price'];

	
	if(isset($_POST['btn_submit']))	
	{
		$name = clean_input($connection, $_POST['name']);
		$price = clean_input($connection, $_POST['price']);
		$descirption = clean_input($connection, $_POST['description']);

		$sub_sql = '';
		if($_FILES['image']['name'])
		{	
			$image_name = $_FILES['image']['name'];
			if($_FILES['image']['type']=='image/jpeg' || $_FILES['image']['type']=='image/x-png' || $_FILES['image']['type']=='image/png')
			{
				if($_FILES['image']['size'] <= 3145728)
				{
					$ext = substr($_FILES["image"]["name"], strrpos($_FILES["image"]["name"], '.') + 1);
					$image_name = rand(1000, 9999) .'.'.$ext;
					move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image_name);
					$sub_sql = ',image="'.$image_name.'"';
				}
			}
		}

		$sql = 'UPDATE products SET name="'.$name.'", price='.$price.', description="'.$description.'" '.$sub_sql.' WHERE id='.$id.'';

		if(mysqli_query($connection, $sql)) {
			header('location: index.php?action=updated');
		} else {
			echo 'Error, ' . mysqli_error($connection);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype='multipart/form-data'>
		<p>
			<label>Product Name</label>
			<input type="text" name="name" value="<?=$name?>">
		</p>
		<p>
			<label>Price</label>
			<input type="text" name="price" value="<?=$price?>">
		</p>
		<p>
			<label>Image</label><br>
			<?php if($image!=''): ?>
				<img src='uploads/<?=$image?>' />
			<?php endif; ?>

			<br>
			Change image: 
			<input type="file" name="image">
		</p>
		<p>
			<label>Description</label>
			<textarea name="description"><?=$description?></textarea>
		</p>
		<p>
			<button type="submit" name="btn_submit">update</button>
		</p>		
	</form>
</body>
</html>