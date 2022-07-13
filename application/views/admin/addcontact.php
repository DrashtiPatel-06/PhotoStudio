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
                                            <h4><?php echo (isset($contact_data))?"Update":"Add";?>&nbsp; Contact</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">    
                                <?php if(!isset($contact_data)){?>                            
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertContact">
                                        <div class="form-row">
                                            
                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Username</label>
                                                    <select class="custom-select" name="usercombo" id="userid" required>
                                                      <option value="">select username</option>
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
                                                <label for="validationCustom05">Subject</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="subject" name="subject" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                           <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Message</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                                                     <div class="valid-feedback">enter message</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid address
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                                
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                     <?php }else{?>
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateContact">
                                        <div class="form-row">
                                            <input type="hidden" class="form-control" id="validationCustom01"  name="c_id_pk" value="<?php echo $contact_data['c_id_pk'];?>" >

                                            <div id="select_menu" class="col-md-12 mb-4">
                                                <label for="validationCustom02">Username</label>
                                                    <select class="custom-select" name="usercombo" id="userid" required>
                                                      <option value="">select username</option>
                                                      <?php foreach($user_data as $user){?>
                                                            <option value="<?php echo $user['user_id_pk'];?>"<?php if($user['user_id_pk']==$contact_data['user_id_fk']) echo 'selected';?>>
                                                             <?php echo $user['f_name']."&nbsp;".$user['l_name'];?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                           
                
                                                <div class="col-md-12 mb-4">
                                                <label for="validationCustom05">Subject</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="subject" name="subject"  value="<?php echo $contact_data['subject'];?>" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div> 

                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Message</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required><?php echo $contact_data['message'];?></textarea>
                                                     <div class="valid-feedback">enter message</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid address
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
