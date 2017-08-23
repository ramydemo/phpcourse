<?php include('connection.php'); ?>

<?php
$sql = 'SELECT * FROM users ORDER BY id DESC LIMIT 5';
$myusers = mysqli_query($connection, $sql);
$name = 'mohamed';
?>

<table border=1 cellspacing="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created At</th>
		</tr>
	</thead>

	<tbody>
		<?php if(mysqli_num_rows($myusers)>0): ?>
			<?php while($row = mysqli_fetch_assoc($myusers)): ?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['created_at'] ?></td>
				</tr>
			<?php endwhile; ?>
		<?php else: ?>
			<tr>
				<td colspan="4">No results</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>



<h1>End of file</h1>

