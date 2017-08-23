<?php include('connection.php'); ?>
<?php
	$sql = "SELECT * FROM products ORDER BY id DESC";
	$result = mysqli_query($connection, $sql);
?>
<?php include ('header.php'); ?>
	<?php
		if(isset($_GET['action'])):
			if($_GET['action']=='updated'): 
	?>
		<div style="border:1px solid green; background:#aa99aa; padding:10px;">
			Record updated
		</div>
	<?php
		endif;
	endif; ?>

	<div class="row">
		<div class="col-xs-10 col-sm-6 col-md-8 col-lg-12">
			<div class="well" style="background: red">
			<?php for ($i=0; $i < 4; $i++): ?>
				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="#" alt="Image">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>Text goes here...</p>
					</div>
				</div>
			<?php endfor; ?>
			</div>
		</div>
		<div class="col-xs-2 col-sm-4 col-md-2">
			<div class="well" style="background: blue">
				<ul class="list-group">
					<li class="list-group-item">Item 1</li>
					<li class="list-group-item">Item 2</li>
					<li class="list-group-item">Item 3</li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-sm-2 col-md-2">
			<div class="well" style="background: green">
				<button type="button" class="btn btn-default">button</button>
			</div>
		</div>
	</div>


	<a href="insert.php" class="btn btn-success">Add new product</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php if(mysqli_num_rows($result)): ?>
				<?php while($product = mysqli_fetch_assoc($result)): ?>
					<tr>
						<td><?=$product['id']?></td>
						<td><?=$product['name']?></td>
						<td><?=$product['price']?></td>
						<td><img src="uploads/<?=$product['image']?>" /></td>
						<td><?=$product['description']?></td>
						<td>
							<a class="btn btn-primary" href="update.php?id=<?=$product['id']?>">Update</a>
							<a class="btn btn-danger" href="#">Delete</a>
							<a class="btn btn-warning" href="show.php?id=<?=$product['id']?>">Preview</a>
						</td>
					</tr>
				<?php endwhile; ?>
			<?php else: ?>
					<tr><td colspan="5">No products found</td></tr>
			<?php endif; ?>
		</tbody>
	</table>
</body>
</html>