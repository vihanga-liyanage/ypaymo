<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<body>
	<h2>Welcome to category management!</h2>
	<h3>Add new category</h3>
	<form action="<?php echo site_url('category/insert');?>" method="POST">
		<input type="text" name="cat_name" placeholder="Category Name" value="<?php echo $cat_name ?>" />
		<input type="text" name="cat_image" placeholder="Category Image" value="<?php echo $cat_image ?>" />
		<button type="submit" name="add_category" value="add">ADD</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>