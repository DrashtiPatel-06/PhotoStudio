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
                                            <h4><?php echo (isset($album_data))?"Update":"Add";?>&nbsp; Album</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">    
                                <?php if(!isset($album_data)){?>                            
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertAlbum">
                                        <div class="form-row">
                                            
                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Username</label>
                                                    <select class="custom-select" name="usercombo" id="userid" required>
                                                      <option value="">select user</option>
                                                      <?php foreach($user_data as $user){?>
                                                            <option value="<?php echo $user['user_id_pk'];?>">
                                                             <?php echo $user['f_name']."&nbsp;".$user['l_name'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                           
                
                                                <div class="col-md-12 mb-4">
                                                <label for="validationCustom05">Title</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="title" name="album_title" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                            <div class="col-md-12 mb-4">
                                                <label for="validationCustom05">Album Type</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="type" name="album_type" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="birthdate" name="album_date" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                                
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                     <?php }else{?>
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateAlbum">
                                        <div class="form-row">
                                            <input type="hidden" class="form-control" id="validationCustom01"  name="album_id_pk" value="<?php echo $album_data['album_id_pk'];?>" >

                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Username</label>
                                                    <select class="custom-select" name="usercombo" id="userid" required>
                                                      <option value="">select username</option>
                                                      <?php foreach($user_data as $user){?>
                                                            <option value="<?php echo $user['user_id_pk'];?>"<?php if($user['user_id_pk']==$album_data['user_id_fk']) echo 'selected';?>>
                                                             <?php echo $user['f_name']."&nbsp;".$user['l_name'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                           
                
                                                <div class="col-md-12 mb-4">
                                                <label for="validationCustom05">Title</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="title" name="album_title" value="<?=$album_data['album_title'];?>" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                            <div class="col-md-12 mb-4">
                                                <label for="validationCustom05">Album Type</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="type" name="album_type" value="<?=$album_data['album_type'];?>" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Date</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="birthdate" name="album_date" value="<?=$album_data['album_date'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                                
                                        
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
