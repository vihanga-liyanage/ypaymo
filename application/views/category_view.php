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
	<?php echo form_open('category/insert'); ?>
		<input type="text" name="cat_name" placeholder="Category Name" value="<?php echo set_value('cat_name'); ?>" />
		<?php echo form_error('cat_name'); ?>
		<br><br>
		<input type="text" name="cat_image" placeholder="Category Image" value="<?php echo set_value('cat_image'); ?>" />
		<?php echo form_error('cat_image'); ?>
		<br><br>
		<button type="submit" name="add_category" value="add">ADD</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>