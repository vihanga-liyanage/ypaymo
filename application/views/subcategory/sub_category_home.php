<div class="main">
    <div class="content">
    	<div class="section group">
			<div class="col span_2_of_3 form-box">
			  	<div class="contact-form">
					<h2>Welcome to sub category management!</h2>
					<h3>Add new sub category</h3>
					<div style="color:green;">
						<?php 
							if(isset($success_msg))
								echo $success_msg; 
						?>
					</div>
					<?php echo form_open('subcategory/insert'); ?>
						<span><label>Sub Category Name</label></span>
						<span><input type="text" name="subcategory"  value="<?php echo set_value('subcategory'); ?>" /></span>
						<?php echo form_error('subcategory'); ?>
						<span><label>Select Category</label></span>
						<span>
							<?php
								$js = 'class="dropdown"';
								echo form_dropdown("category", $categoryInfo, set_value('category'), $js);
							?>
						</span>
						<?php echo form_error('category'); ?>
						<span><input class="myButton" type="submit" name="add_sub_category" value="Add"></span>
					</form>
				</div>
			</div>
			<div class="col span_2_of_3">
				<h3>Available sub categories</h3>
				
				<table class="CSSTableGenerator">
					<tr>
						<td>Sub Category ID</td>
						<td>Sub Category Name</td>
						<td>Category Name</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
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
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>
