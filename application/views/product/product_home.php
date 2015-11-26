
<div class="main">
    <div class="content">
        <div class="section group">
            <div class="col span_2_of_3 form-box">
                <div class="contact-form">
                    <h2>Welcome To Product Management!</h2>
                    <h3>Add new product</h3>

                    <?php echo form_open_multipart('product/insert'); ?>
                    <span><label>Product Name</label></span>
                    <span><input type="text" name="name" value="<?php echo set_value('name'); ?>" /></span>
                    <?php echo form_error('name'); ?>

                    <span><label>Description</label></span>
                    <span><input type="text" name="description" value="<?php echo set_value('description'); ?>" /></span>
                    <?php echo form_error('description'); ?>

                    <span><label>AvailabliQuality</label></span>
                    <span><input type="text" name="availableQuality" value="<?php echo set_value('availableQuality'); ?>" /></span>
                    <?php echo form_error('availableQuality'); ?>

                    <span><label>UnitPrice</label></span>
                    <span><input type="text" name="unitPrice" value="<?php echo set_value('unitPrice'); ?>" /></span>
                    <?php echo form_error('unitPrice'); ?>

                    <span><label>SubCategory</label></span>
                    <span>
                        <?php
                            $js = 'class="dropdown"';
                            $categoryInfo = array(
                                '1' => 'Samsung',
                                '4' => 'Sony',
                                '5' => 'HTC'
                            );
                            echo form_dropdown("subCategory", $categoryInfo, set_value('subCategory'), $js);
                        ?>
                    </span>

                    <?php echo form_error('subCategory'); ?>

                    <span><label>Discount</label></span>
                    <span><input type="text" name="discount" value="<?php echo set_value('discount'); ?>" /></span>
                    <?php echo form_error('discount'); ?>

                    <span><label>Brand</label></span>
                    <span><input type="text" name="brand" value="<?php echo set_value('brand'); ?>" /></span>
                    <?php echo form_error('brand'); ?>

                    <span><label>WarrantyType</label></span>
                    <span><input type="text" name="warrantyType" value="<?php echo set_value('warrantyType'); ?>" /></span>
                    <?php echo form_error('warrantyType'); ?>

                    <span><label>WarrantyPeriod</label></span>
                    <span><input type="text" name="warrantyPeriod" value="<?php echo set_value('warrantyPeriod'); ?>" /></span>
                    <?php echo form_error('warrantyPeriod'); ?>

                    <span><label>Model</label></span>
                    <span><input type="text" name="model" value="<?php echo set_value('model'); ?>" /></span>
                    <?php echo form_error('model'); ?>

                    <span><label>Dimension</label></span>
                    <span><input type="text" name="dimension" value="<?php echo set_value('dimension'); ?>" /></span>
                    <?php echo form_error('dimension'); ?>

                    <span><label>Weight</label></span>
                    <span><input type="text" name="weight" value="<?php echo set_value('weight'); ?>" /></span>
                    <?php echo form_error('weight'); ?>

                    <span><label>Upload Image</label></span>
                    <span><input type="file" name="fileName" value="<?php echo set_value('fileName'); ?>" /></span>
                    <?php echo form_error('fileName'); ?>

                    <?php
                    if(isset($image_error))
                        echo $image_error;
                    ?>

                    <input class="myButton" type="submit" name="add_product" value="Submit">
                    </form>
                </div>
            </div>

            <div class="col span_2_of_3">
                <h3>Available products</h3>
                <table class="CSSTableGenerator">
                    <tr>
                        <td>Product ID</td>
                        <td>Product Name</td>
                        <td>Image</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                    if (isset($result)) {
                        foreach ($result as $product) { ?>
                            <tr>
                                <td><?php echo $product['PId']; ?></td>
                                <td><?php echo $product['name']; ?></td>
                                <td><img src="<?php echo $img_path."/".$product['fileName']; ?>" width="100px" border="1px solid black"></td>
                                <td><?php echo anchor('Product/update/'.$product['PId'], 'Update'); ?></td>
                                <td><?php echo anchor('Product/delete/'.$product['PId'], 'Delete'); ?></td>
                            </tr>
                        <?php }} ?>
                </table>
            </div>
        </div>
    </div>
</div>
