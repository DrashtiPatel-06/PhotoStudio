<!--=================== Footer Container ===================-->
    <footer>
        
        <!--=================== Footer Bottom Section ===================-->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu pull-left">
                           <br><br>
                            <a href="<?php echo base_url();?>Client/index"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/2.png" height="100px"alt=""></a> 
                    
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Importent link</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url();?>Client/faqs">Faqs</a></li>
                                <li><a href="<?php echo base_url();?>Client/terms_conditions">Terms & Conditions </a></li>
                                <li><a href="<?php echo base_url();?>Client/privacy">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Quick Link</h4>
                            <ul class="list-unstyled">
                            <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                                <li><a href="<?php echo base_url();?>Client/showcontact">Contact Us</a></li>
                                <li><a href="<?php echo base_url();?>Client/aboutus">About Us</a></li>
                            </ul>
                        </div>
                      <!--   <div class="paira-widget paira-payment">
                            <h4>Payment Methode</h4>
                            <img src="<?= ASSETS_PATH_CLIENT?>assets/images/footer/payment-icon.png" alt="">
                        </div> -->
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="paira-widget paira-copyright">
                            <p class="margin-clear">© ThemeTidy. All Rights Reserved.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </footer>
</div>
<!--=================== Welcome Newsletter Dialog ===================-->

                <?php
                        if(isset($_SESSION['feedback']))
                        {
                    ?>
<div class="modal fade welcome-newsletter-content" id="paira-welcome-newsletter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                
                <div class="close-button">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                </div>
                <div class="welcome-newsletter text-center">
                    <h2 class="rale-light margin-bottom-0">Feedback</h2>
                    <p class="margin-top-0 margin-bottom-20">We would love to hear your thoughts,suggestions,concerns or problems with anything so we can improve.</p>
                    <form action="<?php echo base_url();?>Client/feedback" method="post" class="margin-bottom-15">
                        <input type="text" placeholder="Your name" name="user_name" required="">
                        <br><br>
                        <textarea class="margin-bottom-10" rows="4" cols="66" placeholder="Your feedback" name="feedback"></textarea>
                        <button type="submit" class="text-capitalize btn btn-success btn-lg">Feedback</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

        <?php }?>
<!--=================== Loading Image ===================-->
<div class="paira-loading ajax-loading margin-clear text-center">
    <img src="<?= ASSETS_PATH_CLIENT?>assets/images/AjaxLoader.gif" alt="" class="padding-clear margin-top-10">
    <p><b>Loading...</b></p>
</div>
<!--=================== Ajax Success Message ===================-->
<div class="modal fade ajax-success-message" id="paira-ajax-success-message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <?php 
                         foreach($product_data as $product){?>
                <div class="row paira-margin-top-2">
                    
                    <div class="col-md-4 pull-right padding-left-0 col-xs-12 col-sm-4 paira-success-message-img"><img src="<?php echo base_url().$product['product_pic_path'];?>" alt="" class="img-responsive"></div>
                    <div class="col-md-8 col-xs-12 col-sm-8 pull-left">
                        <h4 class="margin-top-0 paira-success-message-title"><strong class="paira-success-message-details letter-spacing-2"><i class="fa fa-check-circle"></i> Added To Your Shopping Cart.</strong></h4>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="btn btn-success btn-lg btn-block margin-top-30">Continue Shopping</a>
                        <a href="#" class="btn btn-default btn-lg btn-block margin-top-15 paira-success-message-link">Go To Cart</a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<!--=================== Login Dialog ===================-->
<?php if(isset($invalid) != null){ ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#paira-login").modal("show");
    });
</script>

        <?php }?>
<div class="modal fade paira-login-popup" id="paira-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-3 col-sm-3 paira-margin-top-3">
                        <div class="currency">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-9 paira-margin-top-3">
                        <h3 class="text-capitalize margin-bottom-30">Login</h3>
                        <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/user_login" class="contact-form" method="post">
                            <div>
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon1">Email</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3" name="email">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon2">Password</span>
                                    <input type="password" class="form-control" aria-describedby="basic-addon3" name="password">
                                </div>
                            </div>
                            <div class="margin-bottom-20 for-pass full-width text-right">
                            <a href="<?php echo base_url();?>Client/forget_password" class="forget pull-left margin-top-10 text-underline">Reset Password?</a>
                            <div class="col-md-12">
                             <button type="submit" class="btn btn-success btn-lg text-capitalize">Login Account</button>
                            </div>
                            <?php if(isset($invalid)){
                                                if($invalid!=null)
                                                {
                                                ?>
                                            <div class="">
                                            <span style="color:#FF0000;"><b><?php echo $invalid;?></b></span>
                                            </div>
                                        <?php }}?>
                        </div>
                        </form>
                        
                    </div>
                    <div class="col-md-5 col-sm-12 paira-margin-top-3">
                        <div class="creat-account">
                            <h3 class="text-capitalize margin-bottom-30">Register</h3>
                            <h4 class="margin-clear">Are you new Customer?</h4>
                            <a href="<?php echo base_url();?>Client/adduser" class="btn btn-lg btn-success margin-top-15">Create An Account</a>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Menu Dialog ===================-->
<div class="modal fade paira-menu-popup" id="paira-menu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg text-center">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-12 margin-top-15">
                        <div class="menus">
                            <h3>MAIN MENU</h3>
                            <ul class="list-unstyled margin-top-20">
                                <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                                <li><a href="<?php echo base_url();?>Client/showpackage1">Package</a></li>
                                <li><a href="<?php echo base_url();?>Client/allcollection">Collection</a></li>
                                <li><a href="<?php echo base_url();?>Client/video">Video</a></li>
                                <li><a href="<?php echo base_url();?>Client/aboutus">About Us</a></li>
                                <li><a href="<?php echo base_url();?>Client/showcontact">Contact Us</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle plus" data-toggle="dropdown" href="#">Pages<i class="fa fa-plus margin-left-5"></i><i class="fa fa-minus minus-fa"></i></a>
                                    <ul class="dropdown-menu sub">
                                        <li><a href="<?php echo base_url();?>Client/adduser">register</a></li>
                                        <li><a href="<?php echo base_url();?>Client/forget_password">reset-password</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Appoinment Dialog ===================-->
<div class="modal fade paira-search-popup search-pops" id="paira-search" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php
                        if(isset($_SESSION['user_id_pk']))
                        {
                            $user_data=$this->User_model->userData($_SESSION['user_id_pk']);
                    ?>  
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <center>
                <div class="row">
                    <div class="col-md-3 col-sm-3 paira-margin-top-3">
                        
                    </div>
                    <div class="col-md-4 col-sm-9 paira-margin-top-3">
                        <h3 class="text-capitalize margin-bottom-30">Appoinment</h3>
                        <form accept-charset="UTF-8" class="contact-form" method="post" action="<?php echo base_url();?>Client/insertappoinment" name="myForm">
                            <div>
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <input type="hidden" name="name" value="<?php echo $user_data['user_id_pk'];?>">
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3" value="<?php echo $user_data['f_name']."&nbsp;".$user_data['l_name'];?>" style="font-size: 20px;" required >
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon2"> Date</span>
                                    <input type="date" class="form-control" aria-describedby="basic-addon3" name="appoinment_date" style="font-size: 15px;width:205px;" required>
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon2"> Time</span>
                                    <input type="time" class="form-control" aria-describedby="basic-addon3" name="appoinment_time" style="font-size: 20px;" required>
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon" id="basic-addon2"> Purpose</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3" name="purpose" style="font-size: 20px;" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <script>
                                    function myFunction() {
                                        var x = document.forms["myForm"]["appoinment_date"].value;
                                        var y = document.forms["myForm"]["appoinment_time"].value;
                                        var z = document.forms["myForm"]["purpose"].value;
                                          if (x == "" || x == null ||y == "" || y == null ||z == "" || z == null) {
                                            alert("Please fill all the fields");
                                            return false;
                                          }else
                                          {
                                          alert("Your appoinment request is submitted!,We will notify you wheather your appoinment is confirm or not!,Thank you!!");
                                          }
                                        
                                    }
                                </script>
                                <button type="submit" onclick="myFunction()" class="btn btn-success btn-lg text-capitalize">Appoinmet</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            
            </center>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/jquery.bxslider.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="<?= ASSETS_PATH_CLIENT?>assets/js/paira.js" type="text/javascript"></script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/dye/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 06:19:40 GMT -->
</html>
