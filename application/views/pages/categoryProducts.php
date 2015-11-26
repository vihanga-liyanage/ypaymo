
	</div>
	 <div class="main">
	    <div class="content">
	    	<div class="content_top">
	    		<div class="heading">
	    			<h3><?php echo $categoryName; ?></h3>
	    		</div>
	    		<div class="clear"></div>
	    	</div>
		    <div class="section group">
		    	<?php 
		    		$count = 0;
					if (isset($product_details)) {
						foreach ($product_details as $product) { 
							
							if ($count % 4 == 0) {
								echo '</div><div class="section group">';
							} ?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html">
						<img style="height:180px;" src="<?php echo base_url('assets/images/products/'.$product['fileName']); ?>" alt="" />
					</a>
					<h2><?php echo $product['name']; ?></h2>
					<div class="price-details">
				        <div class="price-number">
							<p><span class="rupees">Rs. <?php echo $product['unitPrice']; ?></span></p>
					    </div>
					    <div class="add-cart">								
							<h4><a href="preview">Add to Cart</a></h4>
					    </div>
						<div class="clear"></div>
					</div>
				</div>
				<?php
					$count += 1;
				}}?>
			</div>
			<?php if ($count == 0) {
				echo "<p style='color: rgb(114, 114, 114); font-family: \"ambleregular\"; padding: 10px;'>Sorry! We do not have products under this category yet.</p>";
			} ?>
	    </div>
	</div>
</div>
	   