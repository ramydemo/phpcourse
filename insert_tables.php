<?php include("connection.php"); ?>
<?php

$user_email='';
$user_name='';
$comp_name='';
$grp_id='';
$query_disp="SELECT * FROM groups ORDER BY grp_id";
$result_disp = mysqli_query($query_disp, $conn);
$options = array();
while ($query_data = mysqli_fetch_array($result_disp)) {
    $options[$query_data["grp_id"]] = $query_data["name"];
}
?>
<select name="grp_id" onClick="submitCboSemester();">
<?php foreach ($options as $key => $value) : ?>
    <?php $selected = ($key == $_POST['grp_id']) ? 'selected="selected"' : ''; ?>
    <option value="<?php echo $key ?>" <?php echo $selected ?>>
    <?php echo $value ?>
    </option>
<?php endforeach; ?>
</select>
<!DOCTYPE html>
<html>
<head>
	<title> insert into tables</title>
</head>

<body>
<form method="post" action="insert_tables">
<table style="1">
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
		<input type="file" name="fileToUpload" id="image1">
	</td>
	<td>
		<input type="file" name="fileToUpload" id="image2">
	</td>
	
</tr>	
</table>
  <button type="submit" name="btn_submit">submit</button>  
</form>
</body>
</html>