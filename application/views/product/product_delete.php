<div class="main">
    <div class="content">
        <div class="section group">
            <div class="col span_2_of_3 form-box">
                <div class="contact-form">

                    <h2>Delete Product</h2>
                    <h3>
                        <span><label>Product Name : <?php echo $cur_data['name']; ?></label></span>
                    </h3>

                                            <span><label>Please confirm product deletion.</label></span>

                    <?php echo form_open('product/delete/'.$cur_data['PId'].'/0/'); ?>

                    <span><input class="myButton" type="submit" name="delete_category" style="margin-top:5px;" value="Delete"></span>

                    <span><input class="myButton" type="submit" name="back" value="Back" style="margin-right:100px;"></span>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>