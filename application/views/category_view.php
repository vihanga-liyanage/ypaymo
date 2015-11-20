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
		<input type="text" name="cat_name" placeholder="Category Name" value="<?php echo set_value('cat_name'); ?>" />
		<?php echo form_error('cat_name'); ?>
		<br><br>
		<input type="file" name="userfile" size="20" />
		<?php 
			if(isset($image_error))
				echo $image_error; 
		?>
		<br><br>
		<button type="submit" name="add_category" value="add">ADD</button>
	</form>

	<h3>Available categories</h3>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>