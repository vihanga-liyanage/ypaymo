<!DOCTYPE html>
<html>
<head>
<title>Demo Shopping Cart</title>
</head>
<body>
	<?php 
		$this -> load -> library('table');
		$this -> table -> set_heading('Prod ID','Prod Name','Price','Available Qty','Buy');

		foreach($listproduct as $p){
			$this -> table -> add_row($p->PId,$p->name,$p->unitPrice,$p->availableQuality,anchor('shoppingcart/buy/'.$p->PId,'Order Now'));
		}
		$this->table->set_template(array('table_open'=>'<table border = "1" cellpadding = "3" cellspacing="3">'));
		echo $this->table->generate();
	?>
</body>
</html>
