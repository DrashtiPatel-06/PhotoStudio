<?php include('includes/header.php');?>
<!--=================== Main Slider Section ===================-->
        <section class="header-middle paira-margin-bottom-2">
            <div class="main-slider paira-animation-container">
                <div id="Carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="First slide" src="<?= ASSETS_PATH_CLIENT?>assets/images/slider/4.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption1">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">Pre-wedding</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">Photography</h1>
                                    <a href="<?php echo base_url();?>Client/allcollection" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="<?= ASSETS_PATH_CLIENT?>assets/images/slider/2.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption3">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Baby</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">Photography</h1>
                                    <a href="<?php echo base_url();?>Client/allcollection" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="<?= ASSETS_PATH_CLIENT?>assets/images/slider/3.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption2">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Wedding
                                    </h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">Photography
                                    </h1>
                                    <a href="<?php echo base_url();?>Client/allcollection" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control paira-animation" href="#Carousel" data-slide="prev" data-paira-animation="fadeIn" data-paira-animation-delay="0.0ms"><span>PR<br>EV</span></a>
                    <a class="right carousel-control paira-animation" href="#Carousel" data-slide="next" data-paira-animation="fadeIn" data-paira-animation-delay="0.10ms"><span>NE<br>XT</span></a>
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active">01</li>
                        <li data-target="#Carousel" data-slide-to="1">02</li>
                        <li data-target="#Carousel" data-slide-to="2">03</li>
                    </ol>
                    <span class="carousel-indicators-total"></span>
                </div>
            </div>
        </section>
 <!--=================== Main Content Container ===================-->
    <main class="home-page">
        <!--=================== Small Banner Section ===================-->
        <section class="banner-small paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back">
                            <img src="<?= ASSETS_PATH_CLIENT?>assets/images/icon.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">Online Booking</a></h4>
                            <p class="margin-bottom-0 margin-top-5">Book your package</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back">
                            <img src="<?= ASSETS_PATH_CLIENT?>assets/images/icon-2.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">Online Appoinment</a></h4>
                            <p class="margin-bottom-0 margin-top-5">Take your appoinment</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="banner-small-back last">
                            <img src="<?= ASSETS_PATH_CLIENT?>assets/images/icon-3.png" alt="" class="img-responsive pull-left">
                            <h4 class="margin-clear text-capitalize margin-bottom-5"><a href="#">Free Booking</a></h4>
                            <p class="margin-bottom-0 margin-top-5">No charges of booking</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear"><span>Our Latest Collection</span></h2>
                    </div>
                </div>
            </div>
            
            <div class="margin-top-30">
                <div class="container">
                    <div class="row">
                        <?php
                                    foreach($album_data as $album){?>
                                    
                        <div class="col-sm-4 col-md-6 col-xs-12 margin-bottom-30">
                                
                            <div class="blog">
                                <div class="blog-image position-r">
                                    
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="<?php echo base_url().$album['img_path'];?>" style="height: 350px;width:550px;" alt=""  class="img-responsive" ><br>
                                    </a>    
                                
                                </div>
                                <div class="blog-hover">
                                    <h2 class="margin-clear"><?php echo $album['album_type'];?></h2>
                                    <a href="<?php echo base_url()?>Client/showImgGallery/<?php echo $album['album_id_pk'];?>" class="margin-top-10">- See The Collection -</a>
                                </div>
                            </div>
                        </div>

                            <?php }?>
                    </div>
                    <center><a href="<?php echo base_url();?>Client/allcollection" class="btn-primary btn btn-lg margin-top-30">See More Collection</a></center>
                </div>
            </div>
        </section>  
        <!--=================== latest Product Section ===================-->
        <section class="latest-picture paira-margin-bottom-2">
            <div class="picture-container">
                <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Packages</span></h2>
                        <a href="<?php echo base_url();?>Client/showpackage1" class="text-uppercase pull-right margin-top-10">View All</a>
                    </div>
                    <?php 
                         foreach($package_data as $package){?>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">

                        <div class="blog">
                            
                            <div class="blog-image position-r">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="<?php echo base_url().$package['package_pic_path'];?>" alt="" class="img-responsive" style="width:500px;height:500px;">
                                </a>
                            </div>
                            <div class="blog-hover">
                                <a href="<?php echo base_url()?>Client/showPackage/<?php echo $package['package_id_pk'];?>" class="margin-top-10">- See The package -</a>
                            </div>
                            <div class="margin-top-15 text-left">
                                <p class="margin-bottom-5"><?php echo $package['package_name'];?></p>
                                <h4 class="margin-top-0 margin-bottom-10"><?php echo $package['package_detail'];?></h4>
                                <a href="<?php echo base_url()?>Client/showPackage/<?php echo $package['package_id_pk'];?>" class="text-uppercase read-more">Read More<i class="fa fa-long-arrow-right margin-left-5"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            </div>
        </section>
        <!--=================== Gallery Section ===================-->
        <!-- <section class="gallery paira-margin-bottom-2">
            <div class="gallery-background margin-top-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-title">
                            <h2 class="text-capitalize margin-clear"><span>Instragram Gallery</span></h2>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram-desc text-left">
                                <h4 class="margin-top-0 margin-bottom-10">ThemeTidy</h4>
                                <a href="#" class="margin-bottom-10">@ forpreview</a>
                                <p class="margin-bottom-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                <button class="btn btn-primary btn-lg"><i class="fa fa-instagram margin-right-5"></i>Follow us</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="<?= ASSETS_PATH_CLIENT?>assets/images/banner/banner-small-3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.html" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="<?= ASSETS_PATH_CLIENT?>assets/images/banner/banner-small-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.html" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="<?= ASSETS_PATH_CLIENT?>assets/images/banner/banner-small-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="collection.html" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=================== Banner Section ===================-->
        <section class="banner paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Videos</span></h2>
                    </div>
                    <?php 
                         foreach($video_data as $video){?>
                    <div class="product-widget text-center ">
                        <div class="col-sm-8 col-md-6 col-xs-12 overs padding-right-10 margin-top-20">
                            <div class="banners text-center">
                                <div>
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <iframe width="560" height="315" src="<?php echo $video['video_url'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-12 heading-title">
                        <center><a href="<?php echo base_url();?>Client/video" class="btn-primary btn btn-lg margin-top-30">All Videos</a></center>
                    </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php');?>