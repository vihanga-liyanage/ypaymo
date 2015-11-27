<div class="main">
    <div class="content">
        <div class="section group">
            <div class="col span_2_of_3 form-box">
                <div class="contact-form">

                    <h3>Update Product</h3>
                    <?php echo form_open('Product/update/'.$cur_data['PId'].'/0/'); ?>
                    <span><label>Product Name</label></span>
                    <span><input type="text" name="name"
                           value="<?php
                           if(isset($cur_data['name'])){
                               echo set_value('name', $cur_data['name']);
                           } else {
                               echo set_value('name');
                           }
                           ?>" /></span>
                    <?php echo form_error('name'); ?>
                    <br>

                    <span><label>Description</label></span>
                    <span><input type="text" name="description"
                           value="<?php
                           if(isset($cur_data['description'])){
                               echo set_value('description', $cur_data['description']);
                           } else {
                               echo set_value('description');
                           }
                           ?>" /></span>
                    <?php echo form_error('description'); ?>
                    <br>

                    <span><label>AvailabliQuality</label></span>
                    <span><input type="text" name="availableQuality" value="<?php
                            if(isset($cur_data['availableQuality'])){
                                echo set_value('availableQuality', $cur_data['availableQuality']);
                            } else {
                                echo set_value('availableQuality');
                            }
                            ?>" /></span>
                    <?php echo form_error('availableQuality'); ?>
                    <br>

                    <span><label>UnitPrice</label></span>
                    <span><input type="text" name="unitPrice" value="<?php
                            if(isset($cur_data['unitPrice'])){
                                echo set_value('unitPrice', $cur_data['unitPrice']);
                            } else {
                                echo set_value('unitPrice');
                            }
                            ?>" /></span>
                    <?php echo form_error('unitPrice'); ?>
                    <br>

                    <span><label>SubCategory</label></span>
                    <span><input type="text" name="subCategory" value="<?php
                            if(isset($cur_data['subCategory'])){
                                echo set_value('subCategory', $cur_data['subCategory']);
                            } else {
                                echo set_value('subCategory');
                            }
                            ?>" /></span>
                    <?php echo form_error('subCategory'); ?>
                    <br>

                    <span><label>Discount</label></span>
                    <span><input type="text" name="discount" value="<?php
                            if(isset($cur_data['discount'])){
                            echo set_value('discount', $cur_data['discount']);
                            } else {
                            echo set_value('discount');
                            }
                            ?>" /></span>
                    <?php echo form_error('discount'); ?>
                    <br>

                    <span><label>Brand</label></span>
                    <span><input type="text" name="brand" value="<?php
                            if(isset($cur_data['brand'])){
                                echo set_value('brand', $cur_data['brand']);
                            } else {
                                echo set_value('brand');
                            }
                            ?>" /></span>
                    <?php echo form_error('brand'); ?>
                    <br>

                   <span><label>WarrantyType</label></span>
                    <span><input type="text" name="warrantyType" value="<?php
                            if(isset($cur_data['warrantyType'])){
                                echo set_value('warrantyType', $cur_data['warrantyType']);
                            } else {
                                echo set_value('warrantyType');
                            }
                            ?>" /></span>
                    <?php echo form_error('warrantyType'); ?>
                    <br>

                    <span><label>WarrantyPeriod</label></span>
                    <span><input type="text" name="warrantyPeriod" value="<?php
                            if(isset($cur_data['warrantyPeriod'])){
                                echo set_value('warrantyPeriod', $cur_data['warrantyPeriod']);
                            } else {
                                echo set_value('warrantyPeriod');
                            }
                            ?>" /></span>
                    <?php echo form_error('warrantyPeriod'); ?>
                    <br>

                    <span><label>Model</label></span>
                    <span><input type="text" name="model" value="<?php
                            if(isset($cur_data['model'])){
                                echo set_value('model', $cur_data['model']);
                            } else {
                                echo set_value('model');
                            }
                            ?>" /></span>
                    <?php echo form_error('model'); ?>
                    <br>

                    <span><label>Dimension</label></span>
                    <span><input type="text" name="dimension" value="<?php
                            if(isset($cur_data['dimension'])){
                                echo set_value('dimension', $cur_data['dimension']);
                            } else {
                                echo set_value('dimension');
                            }
                            ?>" /></span>
                    <?php echo form_error('dimension'); ?>
                    <br>

                    <span><label>Weight</label></span>
                    <span><input type="text" name="weight" value="<?php
                            if(isset($cur_data['weight'])){
                                echo set_value('weight', $cur_data['weight']);
                            } else {
                                echo set_value('weight');
                            }
                            ?>" /></span>
                    <?php echo form_error('weight'); ?>
                    <br>


                    <span><input class="myButton" type="submit" name="update" value="Update" style="margin-top:5px;" ></span>

                    <span><input class="myButton" type="submit" name="back" value="Back" style="margin-right:100px;"></span>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
