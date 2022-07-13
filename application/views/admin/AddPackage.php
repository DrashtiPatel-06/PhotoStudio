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
                                            <h4><?php echo (isset($package_data))?"Update":"Add";?>&nbsp;Package</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($package_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertPackage" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Package Name"  name="package_name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Detail</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="package_detail" required></textarea>
                                                     <div class="valid-feedback">enter detail</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid detail
                                                    </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="form-group mb-4 mt-3">
                                                    <label for="exampleFormControlFile1">Picture</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="package_pic_path">
                                                     <div class="valid-feedback">choose file</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the file
                                                    </div>
                                                </div>
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php } else { ?>
                                       <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updatePackage" enctype="multipart/form-data">
                                        <input type="hidden" name="package_id_pk" value="<?php echo $package_data['package_id_pk'];?>">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Package Name"  name="package_name" value="<?php echo $package_data['package_name'];?>"> <required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Detail</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="package_detail" required><?php echo $package_data['package_detail']?></textarea>
                                                     <div class="valid-feedback">enter detail</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid detail
                                                    </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="form-group mb-4 mt-3">
                                                    <label for="exampleFormControlFile1">Picture</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="package_pic_path">
                                                     <div class="valid-feedback">choose file</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the file
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
