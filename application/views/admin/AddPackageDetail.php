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
                                            <h4><?php echo (isset($package_detail_data))?"Update":"Add";?> Package Detail</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($package_detail_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertPackageDetail" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Name</label>
                                              <select class="form-control input-height" name="packagecombo" required>

                                                        <option  selected="" disable="" value="">select package</option>

                                                        <?php foreach($package_data as $package)
                                                         { ?>
                                                         <option value="<?php echo $package['package_id_pk'];?>">
                                                            <?php echo $package['package_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Detail</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Package_Detail" required></textarea>
                                                     <div class="valid-feedback">enter detail</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid detail
                                                    </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Detail Price</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Package Detail Price"  name="package_price" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                       <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updatePackageDetail" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <input type="hidden" name="package_detail_id_pk" value="<?php echo $package_detail_data['package_detail_id_pk'];?>">
                                                <label for="validationCustom02">Package Name</label>
                                              <select class="form-control input-height" name="packagecombo" required>

                                                        <option  selected="" disable="" value="">select package</option>

                                                        <?php foreach($package_data as $package)
                                                         { ?>
                                                         <option value="<?php echo $package['package_id_pk'];?>"<?php if($package['package_id_pk']==$package_detail_data['package_id_fk']) echo 'selected';?>>
                                                            <?php echo $package['package_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Detail</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="package_detail" required><?php echo $package_detail_data['package_detail'];?></textarea>
                                                     <div class="valid-feedback">enter detail</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid detail
                                                    </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Detail Price</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Package Detail Price"  name="package_price" value="<?php echo $package_detail_data['package_price'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
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
