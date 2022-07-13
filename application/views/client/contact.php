<?php include('includes/header.php');?>
<br><br><br><br><br>
<main class="contact-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== Article Content Section ===================-->
        <section class="contact-detail paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Contact details</span></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <p class="margin-bottom-30">You can contact us on given number or email-id in case of any query you can directly contact us on our specified address.<br>
                        thanks,regards!!
                        </p>
                        <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                            <div class="text-center official-detail">
                                <i class="fa fa-map-marker fa-3x"></i>
                                <p>98 Vip Road, Roonghta Shopping Mall, 2nd Floor, Vesu, Surat, Gujrat, <br>India</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                            <div class="text-center official-detail">
                                <i class="fa fa-phone fa-3x"></i>
                                <p>(1800) 000 8808<br>01248 2468 523745<br>421 25879 145368</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                            <div class="text-center official-detail">
                                <i class="fa fa-envelope fa-3x"></i>
                                <p>support@lenstrends.com<br>admin@lenstrends.com<br>design@lenstrends.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="get-touch paira-margin-bottom-3">
            <div class="contact-form-background">
                <div class="container">
                    <div class="row">
                        <?php
                        if(isset($_SESSION['user_id_pk']))
                        {
                            $user_data=$this->User_model->userData($_SESSION['user_id_pk']);
                            ?>
                        <div class="col-md-12 margin-bottom-30 heading-title">
                            <h2 class="text-capitalize margin-clear text-center"><span>Get in Touch</span></h2>
                        </div>
                        <div class="form-contact">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/insertcontact"  class="contact-form" method="post" name="myForm">
                                        <input name="form_type" type="hidden" value="new_comment">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input name="name" type="hidden" value="<?php echo $user_data['user_id_pk'];?>">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon7">Name</span>
                                                <input type="text" class="form-control" aria-describedby="basic-addon3" value="<?php echo $user_data['f_name']."&nbsp;".$user_data['l_name'];?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon10">Subject</span>
                                                <input type="text" class="form-control" aria-describedby="basic-addon3" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon" id="basic-addon11">Comment</span>
                                                <textarea rows="10" class="form-control" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <script>
                                            function conFunction() {
                                                var x = document.forms["myForm"]["subject"].value;
                                                var y = document.forms["myForm"]["message"].value;
                                                if (x == "" || x == null ||y == "" || y == null) {
                                                    alert("Please fill all the fields");
                                                    return false;
                                                  }else
                                                  {
                                                  alert("Your message request is submitted!,We will check your query and contact you soon,Thank you!!");
                                                  }   
                                             }
                                            </script>
                                        <div class="col-md-12">
                                            <button type="submit" onclick="conFunction()" class="btn btn-success btn-lg text-capitalize" value="Send">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }else{?>
                        <a href="<?php echo base_url();?>Client/index">First login for contact form</a>
                    <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php');?>