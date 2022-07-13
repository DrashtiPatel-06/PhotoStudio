    <?php include('includes/header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#state_id').change(function(){
      var state=$(this).val();
      $.ajax({
        url:"<?php echo base_url();?>Admin/getCityByState",
        method:'post',
        data:{
        state_id:state
      },
      dataType:'json',
      success:function(response){
        //remove options
        $('#city_id').find('option').not(':first').remove();
        //Add options
        console.log(response);
        $.each(response,function(index,data){
        $('#city_id').append('<option value="'+data['city_id_pk']+'">'+data['city_name']+'</option>');
      });
    }
    });
  });
});
</script>
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
                                            <h4><?php echo (isset($user_data))?"Update":"Add";?>&nbsp;User</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">  
                                <?php if(!isset($user_data)){?>                              
                                    <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/insertUser" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="f_name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"  name="l_name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="gender" class="d-block">Gender</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male" required>
                                                     <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female" required>
                                                  <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                </div>
                                             </div>
                                             <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Birthdate</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="birthdate" name="birthdate" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Contact</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="Contact" name="contact" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="e_mail">Email</label>
                                                <input type="email" class="form-control" id="e_mail" placeholder="Email"  name="email" required >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill the Email
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" required></textarea>
                                                     <div class="valid-feedback">enter address</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid address
                                                    </div>
                                            </div>
                                            <div id="select_menu" class="col-md-5 mb-4">
                                                <label for="validationCustom02">State</label>
                                                    <select class="custom-select" name="statecombo" id="state_id" required>
                                                      <option value="">select state</option>
                                                      <?php foreach($state_data as $state){?>
                                                            <option value="<?php echo $state['state_id_pk'];?>">
                                                             <?php echo $state['state_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                            <div id="select_menu" class="col-md-4 mb-4">
                                                <label for="validationCustom02">City</label>
                                                    <select class="custom-select" name="citycombo" id="city_id" required>
                                                      <option value="">select city</option>
                                                      <option value=""></option>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                             <div class="col-md-3 mb-4">
                                                <label for="validationCustom05">Pincode</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Pincode" name="pincode" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid pincode.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" name="username" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="inputPassword6" class="d-block">Password</label>
                                                <input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline" name="password" required>
                                                <small id="passwordHelpInline" class="text-muted">
                                                    Min 8-20 char
                                                </small>
                                                <div class="invalid-feedback">
                                                        Please enter a password.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationCustom05">User Type</label>
                                                <select class="custom-select" name="u_type" required>
                                                      <option value="">select type</option>
                                                      <option value="client">client</option>
                                                      <option value="admin">admin</option>
                                                    </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                                <div class="form-group mb-4 mt-3">
                                                    <label for="exampleFormControlFile1">Picture</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture_path" required>
                                                     <div class="valid-feedback">choose file</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the file
                                                    </div>
                                                </div>
                                        
                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                    <?php }else{?>
                                        <form method="post" class="needs-validation" novalidate action="<?php echo base_url();?>Admin/updateUser" enctype="multipart/form-data">
                                        <div class="form-row">
                                            
                                                <input type="hidden" class="form-control" id="validationCustom01"  name="user_id_pk" value="<?php echo $user_data['user_id_pk'];?>" >
                                             
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="f_name" value="<?=$user_data['f_name'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"  name="l_name" value="<?=$user_data['l_name'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="gender" class="d-block">Gender</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" <?php if($user_data['gender']=='Male') echo "checked";?> Value="Male" required>
                                                     <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" <?php if($user_data['gender']=='Female') echo "checked";?> value="Female" required>
                                                  <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                </div>
                                             </div>
                                             <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Birthdate</label>
                                                <input type="date" class="form-control" id="validationCustom02" placeholder="birthdate" name="birthdate" value="<?=$user_data['birthdate'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom02">Contact</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="Contact" name="contact" value="<?=$user_data['contact'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="e_mail">Email</label>
                                                <input type="email" class="form-control" id="e_mail" placeholder="Email"  name="email" value="<?=$user_data['email'];?>" required >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill the Email
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                    <label for="exampleFormControlTextarea1">Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" required><?php echo $user_data['address'];?></textarea>
                                                     <div class="valid-feedback">enter address</div>
                                                    <div class="invalid-feedback">
                                                        Please provide the valid address
                                                    </div>
                                            </div>
                                            <div id="select_menu" class="col-md-5 mb-4">
                                                <label for="validationCustom02">State</label>
                                                    <select class="custom-select" name="statecombo" id="state_id" required>
                                                      <option value="">select state</option>
                                                      <?php foreach($state_data as $state){?>
                                                            <option value="<?php echo $state['state_id_pk'];?>"<?php if($state['state_id_pk']==$user_data['state_id_fk']) echo 'selected';?>><?php echo $state['state_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                            <div id="select_menu" class="col-md-4 mb-4">
                                                <label for="validationCustom02">City</label>
                                                    <select class="custom-select" name="citycombo" id="city_id" required>
                                                      <option value="">select city</option>
                                                      <?php foreach($city_data as $city){?>
                                                      <option value="<?php echo $city['city_id_pk'];?>"<?php if($city['city_id_pk']==$user_data['city_id_fk']) echo 'selected';?>><?php echo $city['city_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                            </div>
                                             <div class="col-md-3 mb-4">
                                                <label for="validationCustom05">Pincode</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Pincode" name="pincode" value="<?=$user_data['pincode'];?>" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid pincode.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" name="username" value="<?=$user_data['username'];?>" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="inputPassword6" class="d-block">Password</label>
                                                <input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline" name="password" value="<?=$user_data['password'];?>" required>
                                                <small id="passwordHelpInline" class="text-muted">
                                                    Min 8-20 char
                                                </small>
                                                <div class="invalid-feedback">
                                                        Please enter a password.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationCustom05">User Type</label>
                                                <select class="custom-select" name="u_type" required>
                                                      <option value="">select type</option>
                                                      <option value="client" <?php if($user_data['u_type']=="client"){echo "selected";}?>>client</option>
                                                      <option value="admin" <?php if($user_data['u_type']=="admin"){echo "selected";}?>>admin</option>
                                                    </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid type.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                                <div class="form-group mb-4 mt-3">
                                                    <label for="exampleFormControlFile1">Picture</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture_path">
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
