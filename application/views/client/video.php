<?php include('includes/header.php');?>
<br><br><br><br><br>
<main class="register-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url();?>Client/index">Home</a></li>
                        <li>-</li>
                        <li>Video</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="banner paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Videos</span></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php 
                         foreach($video_data as $video){?>
                    <div class="product-widget text-center margin-top-20">
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
            </div>
        </section>
    </main>
<?php include('includes/footer.php');?>
