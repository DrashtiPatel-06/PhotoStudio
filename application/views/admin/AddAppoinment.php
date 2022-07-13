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
                                            <h4><?php echo (isset($appoinment_data))?"Update":"Add";?>&nbsp;Appoinment</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($appoinment_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertAppoinment" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Username</label>
                                              <select class="form-control input-height" name="usercombo" required>

                                                        <option  selected="" disable="" value="">select user</option>

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
                                                <label for="validationCustom02">Appoinment Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="Appoinment date"  name="appoinment_date" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Appoinment Time</label>
                                                <input type="time" class="form-control" id="validationCustom02" placeholder="Appoinment time"  name="appoinment_time" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Purpose</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Purpose"  name="purpose" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                       <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateAppoinment" enctype="multipart/form-data">
                                        <input type="hidden" name="appoinment_id_pk" value="<?php echo $appoinment_data['appoinment_id_pk'];?>">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Username</label>
                                              <select class="form-control input-height" name="usercombo" required>

                                                        <option  selected="" disable="" value="">select user</option>

                                                        <?php foreach($user_data as $user)
                                                         { ?>
                                                         <option value="<?php echo $user['user_id_pk'];?>"<?php if($user['user_id_pk']==$appoinment_data['user_id_fk']) echo 'selected'?>>
                                                            <?php echo $user['f_name']."&nbsp;".$user['l_name'];?>
                                                        </option>
                                                         <?php } ?>
                                                    </select> 
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Appoinment Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="Appoinment date"  name="appoinment_date" value="<?php echo $appoinment_data['appoinment_date'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Appoinment Time</label>
                                                <input type="time" class="form-control" id="validationCustom02" placeholder="Appoinment time"  name="appoinment_time" value="<?php echo $appoinment_data['appoinment_time'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Purpose</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Purpose"  name="purpose" value="<?php echo $appoinment_data['purpose'];?>" required>
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
