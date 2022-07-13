<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/dye/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 06:17:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="ThemeTidy">
    <link rel="shortcut icon" href="<?= ASSETS_PATH_CLIENT?>assets/images/log.png" type="image/png" />
    <title>Lens-Trends</title>
    <!--=================== Bootstrap core CSS ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Animate CSS ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main CSS ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/paira.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Font and Color CSS ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/paira-color-font.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main Responsive CSS ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/paira-responsive.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Font Awesome ===================-->
    <link href="<?= ASSETS_PATH_CLIENT?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ===================-->
    <!--[if lt IE 9]>
    <script src="<?= ASSETS_PATH_CLIENT?>assets/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="<?= ASSETS_PATH_CLIENT?>assets/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <!--=================== Google Fonts ===================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
</head>
<body>
<!--=================== Main Body Content Container ===================-->
<div class="paira-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container-fluid padding-fix">
                <div class="row">
                    <div class="pull-left logo col-md-3 col-sm-3 col-xs-4">
                        <a href="<?php echo base_url();?>Client/index"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/log2.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <center><ul class="list-inline pull-right">
                                <?php if(isset($_SESSION['user_id_pk'])){
                                $user_data=$this->User_model->userData($_SESSION['user_id_pk']);
                            ?>
                                <li><a href="#" class="search-popup"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/appoinment.png" alt="" class="" height=35px;></a><br><b>Appoinment</b></li>
                                <li><a href="<?php echo base_url();?>Client/profile"><img src="<?php echo base_url().$user_data['picture_path'];?>" style="height: 35px;width: 35px; border-radius:200px;border:solid;" alt="" class=""></a><br><b>Profile</b></li>
                                <li><a href="<?php echo base_url();?>Client/logout"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/logout.png" alt="" class="" height=32px;></a><br><b>Logout</b></li>
                                <?php }else{?>
                                <li><a href="#" class="login-popup"><img src="<?= ASSETS_PATH_CLIENT?>assets/images/setting.png" alt="" class="" height=35px;></a><br><b>Login</b></li>
                                <?php }?>
                            </ul></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>