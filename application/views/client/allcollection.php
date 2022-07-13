<?php include('includes/header.php');?>
<br><br><br><br><br>
 <!--=================== Main Content Container ===================-->
    <main class="home-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home <i class="fa fa-angle-right"></i></a></li>
                        <li>Collection</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Collection</span></h2>
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
                                        <img src="<?php echo base_url().$album['img_path'];?>" alt="" style="height: 350px;width:550px;" class="img-responsive"><br>
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
                </div>
            </div>
        </section>  
        
    </main>
    <?php include('includes/footer.php');?>