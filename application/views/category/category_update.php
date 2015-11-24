
<style>
	.error {color: #FF0000;}
</style>

	<h3>Update sub category</h3>
	<?php echo form_open('category/update/'.$cur_data['catID'].'/0/'); ?>
		Category Name 
		<input type="text" name="category" value="<?php echo set_value('category', $cur_data['name']); ?>" />
		<?php echo form_error('category'); ?>
		<br><br>
		<button type="submit" name="back" value="add">Back</button>
		<button type="submit" name="update_category" value="add">Update</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
