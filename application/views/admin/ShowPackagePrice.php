    <?php include('includes/header.php');?>
   <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
<br>
                <div class="seperator-header">
                    <h4 class="">Show Prices</h4><br>
                   <a href="<?php echo base_url();?>Admin/addPrice"><button class="btn btn-primary mt-3" type="submit">+ADD</button></a>
                </div>

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> Price Id </th>
                                            <th class="text-center">Package Price</th>
                                            <th class="text-center">Package Detail</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($price_data != null){
                                        $c=1;
                                        foreach($price_data as $price){?>
                                        <tr>
                                            <td class="checkbox-column text-center"><?php echo $c++;?> </td>
                                            
                                            <td><?php echo $price['package_price'];?></td>
                                            <td><?php echo $price['package_detail'];?></td>
                                            
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a href="<?php echo base_url()?>Admin/deletePrice/<?php echo $price['price_id_pk'];?>/<?php echo $price['package_id_fk'];?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                                </ul>
                                            </td>
                                        <?php }}?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
     <?php include('includes/footer.php');?>