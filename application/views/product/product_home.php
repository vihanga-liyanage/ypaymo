
<style>
    .error {color: #FF0000;}
</style>

<h2>Welcome To ypaymo!</h2>
<h3>Add new product</h3>
<div style="color:green;">
    <?php
    if(isset($success_msg))
        echo $success_msg;
    ?>
</div>
<?php echo form_open_multipart('product/insert'); ?>
Name
<input type="text" name="name" value="<?php echo set_value('name'); ?>" />
<?php echo form_error('name'); ?>
<br><br>

Description
<input type="text" name="description" value="<?php echo set_value('description'); ?>" />
<?php echo form_error('description'); ?>
<br><br>

AvailabliQuality
<input type="text" name="availableQuality" value="<?php echo set_value('availableQuality'); ?>" />
<?php echo form_error('availableQuality'); ?>
<br><br>

UnitPrice
<input type="text" name="unitPrice" value="<?php echo set_value('unitPrice'); ?>" />
<?php echo form_error('unitPrice'); ?>
<br><br>

SubCategory
<input type="text" name="subCategory" value="<?php echo set_value('subCategory'); ?>" />
<?php echo form_error('subCategory'); ?>
<br><br>

Discount
<input type="text" name="discount" value="<?php echo set_value('discount'); ?>" />
<?php echo form_error('discount'); ?>
<br><br>

Brand
<input type="text" name="brand" value="<?php echo set_value('brand'); ?>" />
<?php echo form_error('brand'); ?>
<br><br>

WarrantyType
<input type="text" name="warrantyType" value="<?php echo set_value('warrantyType'); ?>" />
<?php echo form_error('warrantyType'); ?>
<br><br>

WarrantyPeriod
<input type="text" name="warrantyPeriod" value="<?php echo set_value('warrantyPeriod'); ?>" />
<?php echo form_error('warrantyPeriod'); ?>
<br><br>

Model
<input type="text" name="model" value="<?php echo set_value('model'); ?>" />
<?php echo form_error('model'); ?>
<br><br>

Dimension
<input type="text" name="dimension" value="<?php echo set_value('dimension'); ?>" />
<?php echo form_error('dimension'); ?>
<br><br>

Weight
<input type="text" name="weight" value="<?php echo set_value('weight'); ?>" />
<?php echo form_error('weight'); ?>
<br><br>

Upload Image
<input type="file" name="fileName" value="<?php echo set_value('fileName'); ?>" />
<?php echo form_error('fileName'); ?>

<?php
if(isset($image_error))
    echo $image_error;
?>
<br><br>

<button type="submit" name="add_product" value="add">SUBMIT</button>
</form>

<h3>Available product ypaymo</h3>
<table border="1px solid black">
    <thead>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($result)) {
        foreach ($result as $product) { ?>
            <tr>
                <td><?php echo $product['PId']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><img src="<?php echo $img_path."/".$product['fileName']; ?>" width="100px" border="1px solid black"></td>
                <td><?php echo anchor('', 'Update'); ?></td>
                <td><?php echo anchor('', 'Delete'); ?></td>
            </tr>
        <?php }} ?>
    </tbody>
</table>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>