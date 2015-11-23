<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h3>Delete category</h3>
	<?php echo form_open('category/delete/'.$cur_data['catID'].'/0/'); ?>
		Sub Category Name : <?php echo $cur_data['name']; ?>
		<br><br>
		<h4>Please confirm category deletion.</h4>
		<button type="submit" name="back" value="add">Back</button>
		<button type="submit" name="delete_category" value="add">Delete</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>