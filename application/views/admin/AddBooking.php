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
                                            <h4><?php echo (isset($booking_data))?"Update":"Add";?>&nbsp;Booking</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($booking_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertBooking" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Username</label>
                                              <select class="form-control input-height" name="usercombo" required>
                                                        <option  selected="" disable="" value="">select username</option>
                                                        <?php foreach($user_data as $user)
                                                         { ?>
                                                         <option value="<?php echo $user['user_id_pk'];?>">
                                                            <?php echo $user['f_name']."&nbsp;".$user['l_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>  
                                        
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Name</label>
                                              <select class="form-control input-height" name="package_name" required>
                                                        <option  selected="" disable="" value="">select</option>

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

                                              <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Price</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="Package price" name="package_price" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="Date" name="booking_date" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Venue</label>
                                                <input type="venue" class="form-control" id="validationCustom02" placeholder="Venue"  name="booking_venue" required >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                            </div>
                                            </div>

                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                        <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateBooking" enctype="multipart/form-data">
                                          <div class="form-row">
                                            <input type="hidden" class="form-control" id="validationCustom01"  name="booking_id_pk" value="<?php echo $booking_data['booking_id_pk'];?>" >
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Username</label>
                                              <select class="form-control input-height" name="usercombo" required>
                                                        <option  selected="" disable="" value="">select username</option>
                                                        <?php foreach($user_data as $user)
                                                         { ?>
                                                         <option value="<?php echo $user['user_id_pk'];?>"<?php if($user['user_id_pk']==$booking_data['user_id_fk']) echo 'selected';?>>
                                                            <?php echo $user['f_name']."&nbsp;".$user['l_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>  
                                        
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Name</label>
                                              <select class="form-control input-height" name="package_name" required>
                                                        <option  selected="" disable="" value="">select</option>

                                                        <?php foreach($package_data as $package)
                                                         { ?>
                                                         <option value="<?php echo $package['package_id_pk'];?>"<?php if($package['package_id_pk']==$booking_data['package_id_fk']) echo 'selected';?>>
                                                            <?php echo $package['package_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                              <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Package Price</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="Package price" name="package_price" value="<?php echo $booking_data['package_price'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="Date" name="booking_date" value="<?php echo $booking_data['booking_date'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Venue</label>
                                                <input type="venue" class="form-control" id="validationCustom02" placeholder="Venue"  name="booking_venue" value="<?php echo $booking_data['booking_venue'];?>" required >
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
