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
                                            <h4><?php echo (isset($feedback_data))?"Update":"Add";?>&nbsp;Feedback</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($feedback_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertFeedback" enctype="multipart/form-data">
                                        <div class="form-row">
                                             <div class="col-md-8 mb-4">
                                                <label for="validationCustom02">User name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="user name" name="user_name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                             <div class="col-md-8 mb-4">
                                                <label for="validationCustom02">Feedback</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Feedback" name="feedback" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                       <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateFeedback" enctype="multipart/form-data">
                                        <div class="form-row">

                                    <input type="hidden" class="form-control" id="validationCustom01"  name="f_id_pk" value="<?php echo $feedback_data['f_id_pk'];?>" >

                                       <div class="col-md-8 mb-4">
                                                <label for="validationCustom02">User name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="user name" name="user_name" value="<?php echo $feedback_data['user_name'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                             <div class="col-md-8 mb-4">
                                                <label for="validationCustom02">Feedback</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Feedback" name="feedback" value="<?php echo $feedback_data['feedback'];?>" required>
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
