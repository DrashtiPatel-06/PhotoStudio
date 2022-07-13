<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 09:59:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Lens-Trends</title>
    <link rel="icon" type="image/x-icon" href="<?= ASSETS_PATH?>assets/img/lens-trends3.png"/>
    <link href="<?= ASSETS_PATH?>assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= ASSETS_PATH?>assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= ASSETS_PATH?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= ASSETS_PATH?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?= ASSETS_PATH?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= ASSETS_PATH?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH?>plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH?>plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH?>plugins/table/datatable/custom_dt_custom.css">

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-item flex-row ml-auto">
                <?php
                    if(isset($_SESSION['user_id_pk']))
                                {
                                    $session_data=$this->User_model->userData($_SESSION['user_id_pk']);

                            ?> 
                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="<?php echo base_url().$session_data['picture_path'];?>" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5><?php echo $session_data['f_name']."&nbsp;".$session_data['l_name'];?></h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <a href="<?php echo base_url();?>Client/logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            <?php }?>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="<?php echo base_url();?>Admin/index">
                            <img src="<?= ASSETS_PATH?>assets/img/lens-trends3.png" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="<?php echo base_url();?>Admin/index" class="nav-link"> Lens-Trends </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                   
                   <li class="menu">
                        <a href="<?php echo base_url();?>Admin/index" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Home</span>
                            </div>
                        </a>
                    </li>
                   
                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo base_url();?>Admin/addUser"> Add User </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showUser"> Show User</a>
                            </li>
                        </ul>
                    </li>
                    
                     
                    <li class="menu">
                        <a href="#appoinments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span>Appoinment</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="appoinments" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/AddAppoinment"> Add Appoinment </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/ShowAppoinment"> Show Appoinment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showConfirmAppoinment"> Show Confirm Appoinment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showPendingAppoinment"> Show Pending Appoinment</a>
                            </li>
                        </ul>
                    </li>

                    
                     <li class="menu">
                        <a href="#albums" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Album</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="albums" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/addAlbum"> Add Album </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showalbum"> Show Album </a>
                            </li>
                        </ul>
                    </li>

                      <li class="menu">
                        <a href="#videos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Video</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="videos" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/addVideo"> Add Videos </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showVideo1"> Show Video </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#images" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Image</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="images" data-parent="#accordionExample">
                          <li>
                                <a href="<?php echo base_url();?>Admin/addImage"> Add Images </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showImgGallery1"> Show Images </a>
                            </li>
                        </ul>
                    </li>
                        
                    <li class="menu">
                        <a href="#packages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Package</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="packages" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/addPackage"> Add Package </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showPackage"> Show Package </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/AddPackageDetail">Add Package Detail</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showallPackageDetail">Show Package Detail</a>
                            </li>
                        </ul>
                    </li>


                    
                    <li class="menu">
                        <a href="#bookings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span>Booking</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="bookings" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo base_url();?>Admin/addBooking"> Add Booking </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showBooking"> Show Booking </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showConfirmBooking"> Show Confirm Booking </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showPendingBooking"> Show Pending Booking </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#contacts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Contacts</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="contacts" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/addContact">Add Contact</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/showContact"> Show Contact</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#feedback" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span>Feedback</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>

                        <ul class="collapse submenu list-unstyled" id="feedback" data-parent="#accordionExample">
                           <li>
                                <a href="<?php echo base_url();?>Admin/addFeedback"> Add Feedback </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Admin/showFeedback"> Show Feedback</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul> 
            </nav>
        </div>
        <!--  END SIDEBAR  -->