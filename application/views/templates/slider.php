<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  	<ul>
				  		<h3>Categories</h3>
				  		<?php 
						if (isset($categories)) {
							foreach ($categories as $category) { ?>
				      	<li><?php echo anchor('categoryProducts/'.$category['catID'], $category['name']); ?></li>
				       	<?php }} ?>
				  	</ul>
				</div>					
	  	    </div>
			<div class="header_bottom_right">					 
		 		<div class="slider">					     
					<div id="slider">
				        <div id="mover">
				            <div id="slide-1" class="slide">			                    
								<div class="slider-img">
									<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/slide-1-image.png" alt="learn more" /></a>									    
								</div>
								<div class="slider-text">
									<h1>Clearance<br><span>SALE</span></h1>
									<h2>UPTo 30% OFF</h2>
									<div class="features_list">
										<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
									</div>
									<a href="preview.html" class="button">Shop Now</a>
								</div>			               
								<div class="clear"></div>				
							</div>	
							<div class="slide">
								<div class="slider-text">
									<h1>Clearance<br><span>SALE</span></h1>
									<h2>UPTo 40% OFF</h2>
									<div class="features_list">
										<h4>Get to Know More About Our Memorable Services</h4>							               
						            </div>
							        <a href="preview.html" class="button">Shop Now</a>
					        	</div>		
						        <div class="slider-img">
									<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/slide-3-image.jpg" alt="learn more" /></a>
								</div>						             					                 
								<div class="clear"></div>				
			                  	</div>
			                  	<div class="slide">						             	
				                  	<div class="slider-img">
								     	<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/slide-2-image.jpg" alt="learn more" /></a>
								  	</div>
								  	<div class="slider-text">
	                                 	<h1>Clearance<br><span>SALE</span></h1>
	                                 	<h2>UPTo 10% OFF</h2>
								   		<div class="features_list">
								   			<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
						            	</div>
						             	<a href="preview.html" class="button">Shop Now</a>
				                   	</div>	
								  	<div class="clear"></div>				
			                  	</div>												
		                 	</div>		
                	</div>
			 		<div class="clear"></div>					       
         		</div>
      		</div>
   			<div class="clear"></div>
		</div>