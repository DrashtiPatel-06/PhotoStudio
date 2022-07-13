<?php include('includes/header.php');?>
<br><br><br><br><br>
<!--=================== Main Content Container ===================-->
    <main class="reset-password-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>New password</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="reset-password-content paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>New Password</span></h2>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                            <div class="form-contact">
                                <div class="row">
                                    
                                    <form accept-charset="UTF-8" class="contact-form" method="post" action="<?php echo base_url();?>Client/password">

                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                            <input name="form_type" type="hidden" value="contact">
                                            <input name="utf8" type="hidden" value="✓">
                                            <input type="hidden" name="user_id_pk" value="<?php echo $user_id;?>">
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon14">New Password</span>
                                                <input type="password" class="form-control" aria-describedby="basic-addon3" name="pass" required>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon14">Confirm Password</span>
                                                <input type="password" class="form-control" aria-describedby="basic-addon3" name="password" required>
                                            </div>
                                            
                                            <div class="for-pass full-width">
                                                <input type='submit' name="submit" class="btn btn-primary btn-lg" value="submit">
                                            </div>
                                            <?php if(isset($wrong)){
                                                if($wrong!=null)
                                                {
                                                ?>
                                            <div class="">
                                            <span style="color:#FF0000;"><b><?php echo "<br>".$wrong;?></b></span>
                                            </div>
                                        <?php }}?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30 cols">
                            <div class="creat-account">
                                <h4 class="margin-clear">No need to reset password?</h4>
                                <a href="<?php echo base_url();?>Client/index" class="btn btn-lg btn-success margin-top-15">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php');?>