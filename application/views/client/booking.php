<?php include('includes/header.php');?>
<br><br><br><br><br>
<!--=================== Main Content Container ===================-->
    <main class="register-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Booking</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="register-content paira-margin-bottom-3">
             
            <div class="container">
                <div class="row" >
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Booking</span></h2>
                    </div>
                   <center>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="form-contact">
                            <div class="row">
                                <?php
                                if(isset($_SESSION['user_id_pk']))
                                {
                                    $user_data=$this->User_model->userData($_SESSION['user_id_pk']);
                                    //print_r($package_data);
                                    //  echo "<br>"; 
                                    //print_r($package_price_data); 
                            ?> 
                             <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/insertBooking" class="contact-form" method="post" enctype="multipart/form-data" name="myForm">

                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <input name="form_type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="hidden" name="user_id_fk" value="<?php echo $user_data['user_id_pk'];?>">
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15"> Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" value="<?php echo $user_data['f_name']."&nbsp;".$user_data['l_name'];?>" required>
                                        </div>
                                        <input type="hidden" name="package_name" value="<?php echo $package_data['package_id_pk'];?>">
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon16">Package Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" value="<?php echo $package_data['package_name'];?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Package Price</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="package_price" value="<?php echo $package_price;?>" required>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Booking Date</span>
                                            <input type="date" class="form-control" aria-describedby="basic-addon3" name="booking_date" required>
                                        </div>
                                        
                                       <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Booking Venue</span>
                                            <textarea  rows="5" cols="59" name="booking_venue" required></textarea>
                                        </div>
                                        <div class="for-pass full-width">
                                            <script>
                                            function bFunction() {
                                                var x = document.forms["myForm"]["booking_date"].value;
                                                var y = document.forms["myForm"]["booking_venue"].value;
                                                if (x == "" || x == null ||y == "" || y == null) {
                                                    alert("Please fill all the fields");
                                                    return false;
                                                  }else
                                                  {
                                                  alert("Your booking request is submitted!,We will notify you wheather your booking is confirm or not!,Thank you!!");
                                                  }   
                                             }
                                            </script>
                                            <button class="btn btn-primary btn-lg" onclick="bFunction()" type="submit">Book Package</button>
                                        </div>
                                    </div>
                                </form>
                            </div> 
                            
                        
                        </div>
                    </div>
                     <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="creat-account">
                            <h4 class="margin-clear">Want to add more package?</h4>
                            <a href="<?php echo base_url();?>Client/showpackage1" class="btn btn-lg btn-success margin-top-15">Add Package</a>
                        </div>
                    </div>
                </div>
                <?php }else{redirect('client/index');}?> 
                </div>
            </div>
            </center>
        </section>
    </main>
    <?php include('includes/footer.php');?>