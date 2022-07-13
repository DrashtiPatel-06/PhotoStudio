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
                                            <h4><?php echo (isset($image_data))?"Update":"Add";?> &nbsp;Images</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">    
                                <?php if(!isset($image_data)){?>                             
                                    <form method="post" class="needs-validation" novalidate enctype="multipart/form-data" action="<?php echo base_url();?>Admin/insertGallery">
                                        <div class="form-row">
                                            
                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Album Title</label>
                                                    <select class="custom-select" name="titlecombo" required>
                                                      <option value="">select title</option>
                                                      <?php foreach($album_data as $album){?>
                                                            <option value="<?php echo $album['album_id_pk'];?>">
                                                             <?php echo $album['album_title'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group mb-4 mt-3">
                                                    <label for="exampleFormControlFile1">Picture</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1[]" name="img_path[]" multiple required>
                                                     <div class="valid-feedback">choose file</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the file
                                                    </div>
                                                </div>
                                        </div> 
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                        <form method="post" class="needs-validation" novalidate enctype="multipart/form-data" action="<?php echo base_url();?>Admin/updateImage">
                                        <div class="form-row">
                                            
                                             <input type="hidden" class="form-control" id="validationCustom01"  name="image_id_pk" value="<?php echo $image_data['image_id_pk'];?>" >

                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Album Title</label>
                                                    <select class="custom-select" name="titlecombo" required>
                                                      <option value="">select title</option>
                                                      <?php foreach($album_data as $album){?>
                                                            <option value="<?php echo $album['album_id_pk'];?>">
                                                             <?php echo $album['album_title'];?></option>
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
