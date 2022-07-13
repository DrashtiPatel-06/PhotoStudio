<?php include('includes/header.php');?>
<br><br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#state_id').change(function(){
      var state=$(this).val();
      $.ajax({
        url:"<?php echo base_url();?>Client/getCityByState",
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

<!--=================== Main Content Container ===================-->
    <main class="register-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="register-content paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span><?php echo (isset($user_data))?"Update":"Add";?>&nbsp;Register</span></h2>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="form-contact">
                            <div class="row">
                                <?php if(!isset($user_data)){?> 
                             <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/insertUser" class="contact-form" method="post" enctype="multipart/form-data">

                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <input name="form_type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="✓">
                                        
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">First Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="f_name"  required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon16">Last Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="l_name"  required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">Gender</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" name="gender" required>
                                                      <option>-Select Gender-</option>
                                                      <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                                      <option value="Others">Others</option>
                                                    </select>
                                            </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Birthdate</span>
                                            <input type="date" class="form-control" aria-describedby="basic-addon3" name="birthdate" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Contact</span>
                                            <input type="number" class="form-control" aria-describedby="basic-addon3" name="contact" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon13">Email</span>
                                            <input type="email" class="form-control" aria-describedby="basic-addon3" name="email" required>
                                        </div>
                                       <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Address</span>
                                            <textarea  rows="5" cols="59" name="address" required></textarea>
                                        </div>
                                    </div>
                                
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="contact-form">
                            
                                        <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">State</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" id="state_id" name="statecombo" required>
                                                      <option value="">select state</option>
                                                     <?php foreach($state_data as $state){?>
                                                            <option value="<?php echo $state['state_id_pk'];?>"><?php echo $state['state_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">City</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" id="city_id" name="citycombo" required>
                                                      <option value="">select city</option>
                                                      <option value=""></option>
                                                    </select>
                                            </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Pincode</span>
                                            <input type="number" class="form-control" aria-describedby="basic-addon3" name="pincode" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Username</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="username" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Password</span>
                                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="password" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Picture</span>
                                            <input type="file" class="form-control" aria-describedby="basic-addon3" name="picture_path" required>
                                        </div>
                                        <div class="for-pass full-width">
                                            <button class="btn btn-primary btn-lg" type="submit">Save Data</button>
                                        </div>
                                        </form>

                                 <?php }else{?>

                                 <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/updateUser" class="contact-form" method="post" enctype="multipart/form-data">

                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <input name="form_type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="hidden" class="form-control" id="validationCustom01"  name="user_id_pk" value="<?php echo $user_data['user_id_pk'];?>" >
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">First Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="f_name" value="<?=$user_data['f_name'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon16">Last Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="l_name" value="<?=$user_data['l_name'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">Gender</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" name="gender" required>
                                                      <option value="Male"<?php if($user_data['gender']=="Male"){echo "selected";}?>>Male</option>
                                                      <option value="Female"<?php if($user_data['gender']=="Female"){echo "selected";}?>>Female</option>
                                                      <option value="Others"<?php if($user_data['gender']=="Others"){echo "selected";}?>>Others</option>
                                                    </select>
                                            </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Birthdate</span>
                                            <input type="date" class="form-control" aria-describedby="basic-addon3" name="birthdate" value="<?=$user_data['birthdate'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Contact</span>
                                            <input type="number" class="form-control" aria-describedby="basic-addon3" name="contact" value="<?=$user_data['contact'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon13">Email</span>
                                            <input type="email" class="form-control" aria-describedby="basic-addon3" name="email" value="<?=$user_data['email'];?> "required>
                                        </div>
                                       <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Address</span>
                                            <textarea  rows="5" cols="59" name="address" required><?php echo $user_data['address'];?></textarea>
                                        </div>
                                    </div>
                                
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="contact-form">
                            
                                        <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">State</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" id="state_id" name="statecombo" required>
                                                      <option value="">select state</option>
                                                     <?php foreach($state_data as $state){?>
                                                            <option value="<?php echo $state['state_id_pk'];?>"<?php if($state['state_id_pk']==$user_data['state_id_fk']) echo 'selected';?>><?php echo $state['state_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon15">City</span>
                                                    <select class="form-control" aria-describedby="basic-addon3" id="city_id" name="citycombo" required>
                                                      <option value="">select city</option>
                                                      <?php foreach($city_data as $city){?>
                                                      <option value="<?php echo $city['city_id_pk'];?>"<?php if($city['city_id_pk']==$user_data['city_id_fk']) echo 'selected';?>><?php echo $city['city_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                            </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Pincode</span>
                                            <input type="number" class="form-control" aria-describedby="basic-addon3" name="pincode" value="<?=$user_data['pincode'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Username</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="username" value="<?=$user_data['username'];?>" readonly required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Password</span>
                                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="password" value="<?=$user_data['password'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Picture</span>
                                            <img src="<?php echo base_url().$user_data['picture_path'];?>" style="height: 200px;width: 200px;">
                                            <input type="file" class="form-control" aria-describedby="basic-addon3" name="picture_path">
                                        </div>
                                        <div class="for-pass full-width">
                                            <button class="btn btn-primary btn-lg" type="submit">Update An Account</button>
                                        </div>
                                        </form>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php');?>