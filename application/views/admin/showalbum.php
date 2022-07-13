    <?php include('includes/header.php');?>
   <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
<br>
                <div class="seperator-header">
                    <h4 class="">Show Album</h4><br>
                   <a href="<?php echo base_url();?>Admin/addAlbum"><button class="btn btn-primary mt-3" type="submit">+ADD</button></a>
                </div>

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> Album Id </th>
                                            <th>Name</th>
                                            <th>Album Title</th>
                                            <th class="text-center">Album Type</th>
                                            <th>Album Date</th>
                                            <th>Photo Gallery</th>
                                            <th>Video Gallery</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c=1;
                                        foreach($album_data as $album){?>
                                        <tr>
                                            <td class="checkbox-column text-center"><?php echo $c++;?> </td>
                                            <td> <?php echo $album['f_name']."&nbsp;".$album['l_name'];?> </td>
                                            <td> <?php echo $album['album_title'];?> </td>
                                            <td class="text-center"><span class="shadow-none badge badge-primary"> <?php echo $album['album_type'];?> </span></td>
                                            <td> <?php echo $album['album_date'];?> </td>
                                            <td><li><a href="<?php echo base_url()?>Admin/showImgGallery/<?php echo $album['album_id_pk'];?>">Images</a></li></td>
                                            <td><li><a href="<?php echo base_url()?>Admin/showVideo/<?php echo $album['album_id_pk'];?>">Videos</a></li></td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a href="<?php echo base_url()?>Admin/editAlbum/<?php echo $album['album_id_pk'];?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li><a href="<?php echo base_url()?>Admin/deleteAlbum/<?php echo $album['album_id_pk'];?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                                </ul>
                                            </td>
                                        <?php }?>
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