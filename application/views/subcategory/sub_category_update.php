<!DOCTYPE html>
<html>
<head>
	<title>Sub Category</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h3>Update sub category</h3>
	<?php echo form_open('subcategory/update/'.$cur_data['scatID'].'/0/'); ?>
		Sub Category Name 
		<input type="text" name="subcategory" value="<?php echo set_value('subcategory', $cur_data['name']); ?>" />
		<?php echo form_error('subcategory'); ?>
		<br><br>
		Category
		<?php echo form_dropdown("category", $categoryInfo, set_value('category', $cur_data['category'])) ?>
		<?php echo form_error('category'); ?>
		<br><br>
		<button type="submit" name="back" value="add">Back</button>
		<button type="submit" name="update_sub_category" value="add">Update</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>