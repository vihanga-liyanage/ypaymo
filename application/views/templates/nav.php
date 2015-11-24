<div class="header_bottom">
	<div class="menu">
		<ul>
			<li <?php
				if (isset($home)) {
					echo "class='active'";
				}
				?> >
				<a href="home">Home</a></li>
			<li <?php
				if (isset($about)) {
					echo "class='active'";
				}
				?> >
				<a href="about">About</a></li>
			<li <?php
				if (isset($delivery)) {
					echo "class='active'";
				}
				?> >
				<a href="delivery">Delivery</a></li>
			<li <?php
				if (isset($news)) {
					echo "class='active'";
				}
				?> >
				<a href="news">News</a></li>
			<li <?php
				if (isset($contact)) {
					echo "class='active'";
				}
				?> >
				<a href="contact">Contact</a></li>
			<div class="clear"></div>
		</ul>
	</div>
	<div class="search_box">
		<form>
			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
		</form>
	</div>
	<div class="clear"></div>
</div>