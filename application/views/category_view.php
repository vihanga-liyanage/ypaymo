<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h2>Welcome to category management!</h2>
	<h3>Add new category</h3>
	<div style="color:green;">
		<?php 
			if(isset($success_msg))
				echo $success_msg; 
		?>
	</div>
	<?php echo form_open_multipart('category/insert'); ?>
		Category Name 
		<input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>" />
		<?php echo form_error('cat_name'); ?>
		<br><br>
		Upload Image
		<input type="file" name="userfile" size="20" />
		<?php 
			if(isset($image_error))
				echo $image_error; 
		?>
		<br><br>
		<button type="submit" name="add_category" value="add">ADD</button>
	</form>

	<h3>Available categories</h3>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Category ID</th>
				<th>Category Name</th>
				<th>Image</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (isset($result)) {
				foreach ($result as $category) { ?>
			<tr>
				<td><?php echo $category['catID']; ?></td>
				<td><?php echo $category['name']; ?></td>
				<td><img src="<?php echo $img_path."/".$category['image']; ?>" width="100px" border="1px solid black"></td>
				<td><?php echo anchor('', 'Update'); ?></td>
				<td><?php echo anchor('', 'Delete'); ?></td>
			</tr>
			<?php }} ?>
		</tbody>
	</table>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>