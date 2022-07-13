    <?php include('includes/header.php');?>
   <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
<br>
                <div class="seperator-header">
                    <h4 class="">Show User</h4><br>
                   <a href="<?php echo base_url();?>Admin/addUser"><button class="btn btn-primary mt-3" type="submit">+ADD</button></a>
                </div>

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> Record Id </th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                            <th>Mobile No.</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Pincode</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c=1;
                                        foreach($user_data as $user){?>
                                        <tr>
                                            <td class="checkbox-column text-center"><?php echo $c++;?> </td>
                                            <td> <?php echo $user['f_name'];?> </td>
                                            <td> <?php echo $user['l_name'];?> </td>
                                            <td> <?php echo $user['gender'];?> </td>
                                            <td> <?php echo $user['birthdate'];?> </td>
                                            <td> <?php echo $user['contact'];?> </td>
                                            <td> <?php echo $user['email'];?> </td>
                                            <td> <?php echo $user['address'];?> </td>
                                            <td> <?php echo $user['state_name'];?> </td>
                                            <td> <?php echo $user['city_name'];?> </td>
                                            <td> <?php echo $user['pincode'];?> </td>
                                            <td class="text-center">
                                                <span><img src="<?php echo base_url().$user['picture_path'];?>" class="profile-img" alt="avatar"></span>
                                            </td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a href="<?php echo base_url()?>Admin/editUser/<?php echo $user['user_id_pk'];?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li><a href="<?php echo base_url()?>Admin/deleteUser/<?php echo $user['user_id_pk'];?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
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