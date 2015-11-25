<div class="main">
    <div class="content">
    	<div class="section group">
			<div class="col span_2_of_3 form-box">
			  	<div class="contact-form">
					<h3>Update category</h3>
					<?php echo form_open('category/update/'.$cur_data['catID'].'/0/'); ?>
						<span><label>Category Name</label></span>
						<span>
							<input type="text"  name="cat_name" 
									value="<?php 
												if(isset($cur_data['name'])){
													echo set_value('cat_name', $cur_data['name']);
												} else {
													echo set_value('cat_name');
												} 
											?>" />
						</span>
						<?php echo form_error('cat_name'); ?>
						<span><input class="myButton" type="submit" name="update_category" style="margin-top:5px;" value="Update"></span>
						
						<span><input class="myButton" type="submit" name="back" value="Back" style="margin-right:100px;"></span>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>