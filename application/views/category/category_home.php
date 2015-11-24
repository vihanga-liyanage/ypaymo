<div class="main">
    <div class="content">
    	<div class="section group">
			<div class="col span_2_of_3 form-box">
			  	<div class="contact-form">
					<h2>Welcome to category management!</h2>
					<h3>Add new category</h3>
					<div style="color:green;">
						<?php 
							if(isset($success_msg))
								echo $success_msg; 
						?>
					</div>
					<?php echo form_open('category/insert'); ?>
						<span><label>Category Name</label></span>
						<span><input type="text" name="cat_name" class="textbox" value="<?php echo set_value('cat_name'); ?>" /></span>
						<?php echo form_error('cat_name'); ?>
						
						<span><input class="myButton" type="submit" name="add_category" value="Add"></span>
					</form>
				</div>
			</div>
			<div class="col span_2_of_3">
				<h3>Available categories</h3>
				
				<table class="CSSTableGenerator">
					<tr>
						<td>Category ID</td>
						<td>Category Name</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
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
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>