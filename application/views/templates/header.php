<!DOCTYPE HTML>
<head>
	<title>YPayMo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/startstop-slider.js"></script>

</head>
<body>
	<div class="wrap">
		<div class="header">
			<div class="headertop_desc">
				<div class="call">
					<p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
				</div>
				<div class="account_desc">
					<ul>
						<?php 
							if (isset($admin_logged)) {
								if ($admin_logged) {
									$font = 'ambleregular';
									echo '<span style="font-family: '.$font.'; padding: 0px 14px 0px 0px;">Welcome Admin!</span>';
									echo '<li>';
									echo anchor('administrator/signout', 'Sign Out');
									echo '</li>';
									echo '<li>';
									echo anchor('administrator', 'Home');
									echo '</li>';
								}
							} 
						?>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Checkout</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="header_top">
				<div class="logo">
					<a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
				</div>
				<div class="cart">
					<p>Welcome to our Online Store!</p>
				</div>
				<script type="text/javascript">
					function DropDown(el) {
						this.dd = el;
						this.initEvents();
					}
					DropDown.prototype = {
						initEvents : function() {
							var obj = this;

							obj.dd.on('click', function(event){
								$(this).toggleClass('active');
								event.stopPropagation();
							});	
						}
					}

					$(function() {

						var dd = new DropDown( $('#dd') );

						$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
						});
					});
				</script>
				<div class="clear"></div>
			</div>
		
