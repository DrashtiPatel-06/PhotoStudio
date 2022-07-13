    <?php include('includes/header.php');?>

    <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">
                    
                  <div class="row layout-top-spacing">

                    <div class="row">
                        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4><?php echo (isset($price_data))?"Update":"Add";?>Add Package Price</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">    
                                <?php if(!isset($price_data)){?>                             
                                    <form method="post" class="needs-validation" novalidate enctype="multipart/form-data" action="<?php echo base_url();?>Admin/insertPrice">
                                        <div class="form-row">
                                             <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Package Price</label>
                                                    <select class="custom-select" name="pricecombo" required>
                                                      <option value="">select price</option>
                                                      <?php foreach($package_data as $package){?>
                                                            <option value="<?php echo $package['package_price'];?>">
                                                             <?php echo $package['package_price'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div> 
                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Package Detail</label>
                                                    <select class="custom-select" name="detailcombo" required>
                                                      <option value="">select detail</option>
                                                      <?php foreach($package_data as $package){?>
                                                            <option value="<?php echo $package['package_detail'];?>">
                                                             <?php echo $package['package_detail'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>                                         
                                        </div> 
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                        <form method="post" class="needs-validation" novalidate enctype="multipart/form-data" action="<?php echo base_url();?>Admin/updatePrice">
                                        <div class="form-row">
                                            
                                             <input type="hidden" class="form-control" id="validationCustom01"  name="price_id_pk" value="<?php echo $price_data['price_id_pk'];?>" >

                                           <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Package Price</label>
                                                    <select class="custom-select" name="pricecombo" required>
                                                      <option value="">select price</option>
                                                      <?php foreach($package_data as $package){?>
                                                            <option value="<?php echo $package['package_price'];?>">
                                                             <?php echo $package['package_price'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Package Detail</label>
                                                    <select class="custom-select" name="detailcombo" required>
                                                      <option value="">select detail</option>
                                                      <?php foreach($package_data as $package){?>
                                                            <option value="<?php echo $package['pacakge_id_pk'];?>">
                                                             <?php echo $package['package_detail'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                        
                                        </div> 
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
         </div>
    </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <?php include('includes/footer.php');?>
