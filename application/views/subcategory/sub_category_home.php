<!DOCTYPE html>
<html>
<head>
	<title>Sub Category</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h2>Welcome to sub category management!</h2>
	<h3>Add new sub category</h3>
	<div style="color:green;">
		<?php 
			if(isset($success_msg))
				echo $success_msg; 
		?>
	</div>
	<?php echo form_open('subcategory/insert'); ?>
		Sub Category Name 
		<input type="text" name="subcategory" value="<?php echo set_value('subcategory'); ?>" />
		<?php echo form_error('subcategory'); ?>
		<br><br>
		Select Category
		<?php echo form_dropdown("category", $categoryInfo, set_value('category')) ?>
		<?php echo form_error('category'); ?>
		<br><br>
		<button type="submit" name="add_sub_category" value="add">ADD</button>
	</form>

	<h3>Available categories</h3>

	<table border="1px solid black">
		<thead>
			<tr>
				<th>Sub Category ID</th>
				<th>Sub Category Name</th>
				<th>Category Name</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (isset($result)) {
				foreach ($result as $subcategory) { ?>
			<tr>
				<td><?php echo $subcategory['scatID']; ?></td>
				<td><?php echo $subcategory['name']; ?></td>
				<td><?php echo $categoryInfo[$subcategory['category']]; ?></td>
				<td><?php echo anchor('subcategory/update/'.$subcategory['scatID'], 'Update'); ?></td>
				<td><?php echo anchor('subcategory/delete/'.$subcategory['scatID'], 'Delete'); ?></td>
			</tr>
			<?php }} ?>
		</tbody>
	</table>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>