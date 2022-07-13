  <?php include('includes/header.php');?>
  <br><br><br><br><br>
    <!--=================== Main Content Container ===================-->
    <main class="login-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="login-content paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <?php
                        if(isset($_SESSION['user_id_pk']))
                        {
                            $user_data=$this->User_model->userData($_SESSION['user_id_pk']);
                    ?>
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span style="font-size:30px">Your Profile</span></h2>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="form-contact">
                            <div class="row">
                                <form accept-charset="UTF-8" action="#" class="contact-form" method="post">
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="input-group margin-bottom-20">
                                            <img src="<?php echo base_url().$user_data['picture_path'];?>" style="height: 200px;width: 200px; border-radius:200px;">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <p style="font-size:25px;"><?php echo $user_data['f_name']."&nbsp;".$user_data['l_name'];?><hr></p>
                                            <p style="font-size:15px;"><?php echo "username:&nbsp;".$user_data['username'];?></p>
                                            <p style="font-size:15px;"><?php echo "email-id:&nbsp;".$user_data['email'];?></p>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <table>
                            <tr>
                                <td> <span>Gender</span><hr></td>
                                <td> <p><?php echo "&nbsp;".$user_data['gender'];?></p></td>
                            </tr>
                            <tr>
                               <td> <span>Birthdate</span><hr></td>
                                <td> <p><?php echo "&nbsp;".$user_data['birthdate'];?></p></td>
                            </tr>
                            <tr>
                                <td> <span>Contact</span><hr></td>
                                <td> <p><?php echo "&nbsp;".$user_data['contact'];?></p></td>
                            </tr>
                            <tr>
                                <td> <span>Address</span><hr></td>
                                <td> <p><?php echo "&nbsp;&nbsp;&nbsp;".$user_data['address'];?></p></td>
                            </tr>
                            <tr>
                                <td> <span>Pincode</span><hr></td>
                                <td> <p><?php echo "&nbsp;".$user_data['pincode'];?></p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="for-pass full-width">
                                    <a href="editUser/<?php echo $user_data['user_id_pk'];?>" class="btn btn-primary btn-lg">Edit Profile</a>
                                </td>
                            </tr>
                    </table>
                    </div>
                </div>
            <?php }?>
            </div>
        </section>
    </main>
    <style type="text/css">
        table{
            width: 100%;
            height: 500px;
            text-align:center;
            /*border: 5px solid #c2a476;*/
        }
        p{
            font-size: 20px;
        }
        span{
            font-size: 25px;

        }
    </style>
    <?php include('includes/footer.php');?>