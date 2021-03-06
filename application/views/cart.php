
<br><br>
<h3>Cart Information</h3>
<br>
<?php echo anchor('cproduct','<< continue shopping');?> 
<br><br>
<?php echo form_open('shoppingcart/update');?>
<div>
<table class="CSSTableGenerator" >

<tr>
  <th>Option</th>
  <th>Quantity</th>
  <th>Product Name</th>
  <th style="text-align:right">Unit Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td style="text-align:center"><?php echo anchor('shoppingcart/delete/'.$items['rowid'],'Delete');?></td>
	  <td><?php echo form_input(array('name' => 'qty'.$i ,'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="3"> </td>
  <td style="text-align:right"><strong>Total</strong></td>
  <td style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
</div>
<br>
<p><?php echo form_submit('', 'Update your Cart'); ?></p>
<br>
<span><input class="myButton" type="submit" name="checkOut" value="Check Out"></span>
<?php form_close(); ?>


