<style>
	.error {color: #FF0000;}
</style>

	<h3>Delete sub category</h3>
	<?php echo form_open('subcategory/delete/'.$cur_data['scatID'].'/0/'); ?>
		Sub Category Name : <?php echo $cur_data['name']; ?>
		<br><br>
		Category : <?php echo $categoryInfo[$cur_data['category']]; ?>
		<br><br>
		<h4>Please confirm sub category deletion.</h4>
		<button type="submit" name="back" value="add">Back</button>
		<button type="submit" name="update_sub_category" value="add">Delete</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>