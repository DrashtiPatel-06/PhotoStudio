<?php include('includes/header.php');?>
<br><br><br><br><br>
<!--=================== Main Content Container ===================-->
    <main class="collection-page">
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
        <!--=================== latest Picture Section ===================-->
        <section class="latest-picture paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Collection</span></h2>
                    </div>
                </div>
            </div>
            
            <div class="margin-top-40">
                <div class="container">
                    <div class="row">
                    	<?php
                                	if($image_data != null){
                                	foreach($image_data as $image){?>
                                	
                        <div class="col-sm-4 col-md-6 col-xs-12 margin-top-30">
                            	
                            <div class="blog">
                                <div class="blog-image position-r">
                                	
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="<?php echo base_url().$image['img_path'];?>" alt=""  class="img-responsive"><br>
                                    </a>    
                            	
                                </div>
                                <div class="blog-hover">
                                    <h2 class="margin-clear">- <?php echo $image['album_title'];?> -</h2>
                                </div>
                            </div>
                        </div>

                            <?php }}?>
                    </div>
                </div>
            </div>
        </section>  
    </main>
<?php include('includes/footer.php');?>