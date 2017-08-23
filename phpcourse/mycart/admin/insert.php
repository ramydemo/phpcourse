<?php include 'C:\xampp\htdocs\phpcourse\products\connection.php'; ?>
<?php include 'C:\xampp\htdocs\phpcourse\products\functions.php'; ?>


<?php

$name='';
$prdcode='';
$grpcode='';
$image1='';
$image2='';
	if(isset($_POST['btn_submit']))
	{
		$name = clean_input($connection, $_POST['name']);
		$prdcode = clean_input($connection, $_POST['prdcode']);
		$grpcode = $_POST['combogrp'];

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
						echo "picture 1 is saved";
					}
					else
					{
						echo "picture 1 is unsaved";
					}
					if($_FILES['image2']['size'] <= 3145728)
					{
						$ext = substr($_FILES["image2"]["name"], strrpos($_FILES["image2"]["name"], '.') + 1);
						$image2 = rand(1000, 9999) .'.'.$ext;
						move_uploaded_file($_FILES['image2']['tmp_name'], 'uploads/'.$image2);
						echo "picture 2 is saved";
					}
					else
					{
						echo "picture 2 is unsaved";
					}
				}
			}
			$makerValue = $grpcode; // make value		   
		    echo '<br/>'.'this is combo value '. $makerValue;
		}
		$sql = 'INSERT INTO products (grpcode, prdcode, name, image1,image2)
			VALUES("'.$grpcode.'", "'.$prdcode.'", "'.$name.'", "'.$image1.'", "'.$image2.'")';

		$result = mysqli_query($connection, $sql);
		if($result)
		{
			//header('location: index.php');
			echo "sql is saved" .$grpcode.$prdcode.$name.$image1.$image2;

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

 <div dir="rtl" style="height: 315px; width: 100%; margin-top: 2px;text-align: center;">
    <table style="border-style: solid; width:75%"  align="center">
            <tr>
	                <td >
	                   <?php
							$sql = 'select name,grpcode from groups';
							ini_set('mbstring.substitute_character', "none");	 

								$result = mysqli_query($connection, $sql);
								if($result)
								{ ?>
									<select   name="combogrp">
							<?php
									while($ri = mysqli_fetch_array($result))
										{
										echo "<option value=" .$ri['grpcode'] . ">" . mb_convert_encoding($ri['name'], 'ISO-8859-1','UTF-8') . "</option>";
										}
										echo "</select> ";?>
									</select>      Group
							<?php	
								} else {
									echo 'Error, '. mysqli_error($connection);
								}?>

                 	</td>            
             </tr>
             <tr>
                	<td>
                   		 <input  type="text" name="prdcode" value='<?=$prdcode?>' > Product code
                  	</td>
                   
            </tr>
            <tr>
                <td >
                    <input   type="text" name="name"  value='<?=$name?>' > Product Name
                </td>
            </tr>
            <tr>
				<td>
					<input type="file" name="image1" id="image1">
				</td>
			</tr>	
			<tr>

				<td>
					<input type="file" name="image2" id="image2">
				</td>
				
			</tr>	
			<tr>
				<td  >
					<button type="submit" name="btn_submit">submit</button>  
				</td>

			</tr>
            </table> 
    </div>

	</form>
</body>
</html>