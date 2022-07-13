<?php include('includes/header.php');?>
<br><br><br><br><br>
<main class="blog-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Package</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Our All Packages</span></h2>
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
                                <a href="<?php echo base_url()?>Client/showPackage/<?php echo $package['package_id_pk'];?>" class="text-uppercase read-more">READ MORE<i class="fa fa-long-arrow-right margin-left-5"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php');?>
