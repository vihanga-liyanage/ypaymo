<br>
<div>
	<h3><b>Available Products in Store<b></h3>
	<br>
	<?php
	
		$this -> load -> library('table');
		
		$this->table->set_template(array('table_open'=>'<table class="CSSTableGenerator">'));
		$this -> table -> set_heading('Prod ID','Prod Name','Price','Available Qty','Buy');

		foreach($listproduct as $p){
			$this -> table -> add_row($p->PId,$p->name,$p->unitPrice,$p->availableQuality,anchor('shoppingcart/buy/'.$p->PId,'Add to Cart'));
		}

	echo $this->table->generate();
	?>
</div>
	
	


