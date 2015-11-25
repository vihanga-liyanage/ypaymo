<div class="main">
    <div class="content">
    	<div class="section group">
			<div class="col span_2_of_3 form-box">
			  	<div class="contact-form">
					<h3>Update sub category</h3>
					<?php echo form_open('subcategory/update/'.$cur_data['scatID'].'/0/'); ?>
						<span><label>Sub Category Name</label></span>
						<span>
							<input type="text"  name="subcategory" 
									value="<?php 
												if (isset($cur_data['name'])) {
													echo set_value('subcategory', $cur_data['name']);
												} else {
													echo set_value('subcategory');
												} 
											?>" />
						</span>
						<?php echo form_error('subcategory'); ?>
						<span><label>Select Category</label></span>
						<span>
							<?php
								$js = 'class="dropdown"';
								if (isset($cur_data['name'])) {
									echo form_dropdown("category", $categoryInfo, set_value('category', $cur_data['category']), $js);
								} else {
									echo form_dropdown("category", $categoryInfo, set_value('category'), $js);
								}
							?>
						</span>
						<?php echo form_error('category'); ?>
						<span><input class="myButton" type="submit" name="update_sub_category" style="margin-top:5px;" value="Update"></span>
						
						<span><input class="myButton" type="submit" name="back" value="Back" style="margin-right:100px;"></span>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>