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
                        <li>Package Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-3">
            <div class="container">
                <div class="row" >
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Our Package Details</span></h2>
                    </div>
                    <form accept-charset="UTF-8" action="<?php echo base_url();?>Client/booking" class="contact-form" method="post" enctype="multipart/form-data">
                    <?php
                     $c=1; 
                         foreach($package_detail_data as $package_detail){?>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30 margin-bottom-30">
                        <div class="blog" style="border-left: 6px solid #c2a476;border-top: 6px solid #c2a476;height: 500px;">
                            <div class="margin-top-20 text-left">
                                <p class="margin-left-5" style="font-size: 20px;"><?php echo "<b style='font-size: 20px;color:#c2a476;'>Name:</b>".$package_detail['package_name'];?><hr></p>
                                <p class="margin-left-5" style="font-size: 20px;"><?php echo "<b style='font-size: 20px;color:#c2a476;'>Detail:</b>".$package_detail['package_detail'];?><hr></p>
                                <p class="margin-left-5" value="<?php echo $package_detail['package_detail_id_pk']?>" name="price[]" style="font-size: 20px;"><?php echo "<b style='font-size: 20px;color:#c2a476;'>Price:</b>".$package_detail['package_price']."/-";?><hr>
                                    <input type="hidden" name="price[]" value="<?php echo $package_detail['package_price']?>">
                                <input type="hidden" name="package_price_id" value="<?php echo $package_detail['package_detail_id_pk'];?>">  
                                </p>
                                <p class="margin-left-5">
                                    <label class="check"><b style='font-size: 20px;color:#c2a476;'>Select Package:</b>
                                        <?php
                                        if($c==1)
                                        {?>
                                      <input type="checkbox" name="package[]" value="<?php echo $package_detail['package_detail_id_pk']?>" checked>
                                      <?php
                                        $c++;
                                        }else{
                                      ?>
                                       <input type="checkbox" name="package[]" value="<?php echo $package_detail['package_detail_id_pk']?>" >
                                   <?php }?>
                                      <input type="hidden" name="package_id" value="<?php echo $package_detail['package_id_fk'];?>">  
                                      <span class="mark"></span>  
                                    </label></p>
                                    <?php
                        if(isset($_POST['submit']))
                        {
                            if(!empty($_POST['package']))
                            {    
                                foreach($_POST['package'] as $value)
                                {
                                    echo "value : ".$value.'<br/>';
                                }
                            }
                        }
                    ?>
                            </div>
                        </div>
                        
                    </div>
                    <?php }?>
                
                    <div class="col-md-12 col-sm-12 col-xs-12 margin-top-30 text-center">
                        <p style="color: red;text-align:left">*Package price is not fixed it would be changed accordingly.</p>
                        <div class="for-pass full-width">
                            <button class="btn btn-primary btn-lg" type="submit">Booking</button>
                         </div><br>
                    </div>
                </div>
            </form>
            </div>
        </section>
    </main>
    <style>  
.check {  
  position: relative;  
}  
  
/* Create a custom checkbox */  
.mark {  
  position: absolute;  
  height: 25px;  
  width: 25px;  
  background-color: #c2a476;  
}  
.check input:checked ~ .mark {  
  background-color: green;  
}  
  
/* Create the mark/indicator (hidden when not checked) */  
.mark:after {  
  content: "";  
  position: absolute;  
  display: none;  
}  
  
/* Show the mark when checked */  
.check input:checked ~ .mark:after {  
  display: block;  
}  
  
/* Style the mark/indicator */  
.check .mark:after {  
  left: 9px;  
  top: 5px;  
  width: 5px;  
  height: 10px;  
  border: solid white;  
  border-width: 0 3px 3px 0;  
  transform: rotate(45deg);  
}  
</style> 
<?php include('includes/footer.php');?>
