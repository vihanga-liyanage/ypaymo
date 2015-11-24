<style>
	.error {color: #FF0000;}
</style>

	<h2>Welcome to category management!</h2>
	<h3>Add new category</h3>
	<div style="color:green;">
		<?php 
			if(isset($success_msg))
				echo $success_msg; 
		?>
	</div>
	<?php echo form_open('category/insert'); ?>
		Category Name 
		<input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>" />
		<?php echo form_error('cat_name'); ?>
		<br><br>
		<button type="submit" name="add_category" value="add">Add</button>
	</form>

	<h3>Available categories</h3>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Category ID</th>
				<th>Category Name</th>
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
				<td><?php echo anchor('category/update/'.$category['catID'], 'Update'); ?></td>
				<td><?php echo anchor('category/delete/'.$category['catID'], 'Delete'); ?></td>
			</tr>
			<?php }} ?>
		</tbody>
	</table>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
