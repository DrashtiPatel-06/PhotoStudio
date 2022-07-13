<?php
class Admin extends CI_Controller
{
	public function __Construct()
	{
		parent::__Construct();
		
			$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'pateldrashti0612@gmail.com',
		    'smtp_pass' => 'sweet0612',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		
	}
	public function index()
	{
		$data['appoinment_data']=$this->Appoinment_model->appoinmentList();
		$this->load->view('admin/index',$data);
	}
	//user
	public function addUser()
	{
		$data['state_data']=$this->User_model->stateList();
		$this->load->view('admin/adduser',$data);
	}
	public function insertUser()
	{
		$data['f_name']=$this->input->post('f_name');
		$data['l_name']=$this->input->post('l_name');
		$data['gender']=$this->input->post('gender');
		$data['birthdate']=$this->input->post('birthdate');
		$data['contact']=$this->input->post('contact');
		$data['email']=$this->input->post('email');
		$data['address']=$this->input->post('address');
		$data['state_id_fk']=$this->input->post('statecombo');
		$data['city_id_fk']=$this->input->post('citycombo');
		$data['pincode']=$this->input->post('pincode');
		$data['u_type']=$this->input->post('u_type');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['picture_path']=$this->imageupload();
		$this->User_model->insertUser($data);
		redirect('admin/showuser');
	}
	public function imageupload()
	{
		$type=explode(".",$_FILES["picture_path"]["name"]);
		$type=strtolower($type[count($type)-1]);
		$url="uploads/"."USER_IMG_".rand(1,999).'.'.$type;
		if(in_array($type,array("jpeg","jpg","png","gif"))){
			if(is_uploaded_file($_FILES["picture_path"]["tmp_name"])){
				if(move_uploaded_file($_FILES["picture_path"]["tmp_name"],$url)){
					return $url;
				}
			}
		}
	}
	public function getCityByState()
	{
		$state_id=$this->input->post('state_id');
		$data=$this->User_model->cityListByState($state_id);
		echo json_encode($data);
	}
	public function showUser()
	{
		$data['user_data']=$this->User_model->userList();
		$this->load->view('admin/showuser',$data);
	}
	public function editUser($id)
	{
		$data['city_data']=$this->User_model->cityList();
		$data['state_data']=$this->User_model->stateList();
		$data['user_data']=$this->User_model->userData($id);
		$this->load->view('admin/adduser',$data);
	}
	public function deleteUser($id)
	{
		$this->User_model->deleteUser($id);
		redirect('admin/showuser');
	}
	public function updateUser()
	{
		$data['user_id_pk']=$this->input->post('user_id_pk');
		$data['f_name']=$this->input->post('f_name');
		$data['l_name']=$this->input->post('l_name');
		$data['gender']=$this->input->post('gender');
		$data['birthdate']=$this->input->post('birthdate');
		$data['contact']=$this->input->post('contact');
		$data['email']=$this->input->post('email');
		$data['address']=$this->input->post('address');
		$data['state_id_fk']=$this->input->post('statecombo');
		$data['city_id_fk']=$this->input->post('citycombo');
		$data['username']=$this->input->post('username');
		$data['pincode']=$this->input->post('pincode');
		$data['u_type']=$this->input->post('u_type');
		$data['password']=$this->input->post('password');
		if($_FILES['picture_path']['name']!=null)
		{
			$data['picture_path']=$this->imageupload();
		}
		$this->User_model->updateUser($data);
		redirect('admin/showuser');
	}

	//album
	public function addAlbum()
	{
		$data['user_data']=$this->User_model->userList();
		$this->load->view('admin/addalbum',$data);
	}
	public function insertAlbum()
	{
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['album_title']=$this->input->post('album_title');
		$data['album_type']=$this->input->post('album_type');
		$data['album_date']=$this->input->post('album_date');
		$this->Album_model->insertAlbum($data);
		redirect('admin/showalbum');
	}
	public function showAlbum()
	{
		$data['album_data']=$this->Album_model->albumList();
		$this->load->view('admin/showalbum',$data);
	}
	public function editAlbum($id)
	{
		$data['user_data']=$this->User_model->userList();
		$data['album_data']=$this->Album_model->albumData($id);
		$this->load->view('admin/addalbum',$data);
	}
	public function deleteAlbum($id)
	{
		$this->Album_model->deleteAlbum($id);
		redirect('admin/showalbum');
	}
	public function updateAlbum()
	{
		$data['album_id_pk']=$this->input->post('album_id_pk');
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['album_title']=$this->input->post('album_title');
		$data['album_type']=$this->input->post('album_type');
		$data['album_date']=$this->input->post('album_date');
		$this->Album_model->updateAlbum($data);
		redirect('admin/showalbum');
	}

	//image
	public function addImage()
	{
		$data['album_data']=$this->Album_model->albumList();
		$this->load->view('admin/addimage',$data);
	}
	public function insertGallery(){
        
        $id=$this->input->post('titlecombo');
        $this->imggalleryupload($id);
        redirect('admin/showImgGallery/'.$id);
    }
	public function showImgGallery($id)
	{
		$data['album_id_fk']=$id;
		$data['image_data']=$this->Album_image_model->fetchImgGallery($id);
		$this->load->view('admin/showimage',$data);
	}	
	public function showImgGallery1()
	{
		$data['image_data']=$this->Album_image_model->fetchImgGallery1();
		$this->load->view('admin/showimage',$data);
	}
	public function deleteGallery($id,$iid){
        $data = $this->Album_image_model->fetchGallery($id);
        //print_r($data);die;
        unlink($data['img_path']);
        $this->Album_image_model->deleteGallery($id);
        redirect('admin/showImgGallery1/'.$iid);
    }
	public function imggalleryupload($id){
        $count = count($this->Album_image_model->fetchImgGallery($id));
        $j = $count;
        if (count($_FILES["img_path"]['name']) > 0) {
            for ($i = 0; $i < count($_FILES["img_path"]['name']); $i++) {

                $type = explode('.', $_FILES["img_path"]["name"][$i]);
                $type = end($type);

                $j++;
                $url = "uploads/" . 'IMG_ALBUM_' . $id . '_' . $j. '.' . $type;

                if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
                    if (is_uploaded_file($_FILES["img_path"]["tmp_name"][$i])) {
                        if (move_uploaded_file($_FILES["img_path"]["tmp_name"][$i], $url)) {
                            $da['album_id_fk'] = $id;
                            $da['img_path'] = $url;
                            $this->Album_image_model->insertGallery($da);
                        }
                    }
                }
            }
            return;
        }
    }

    //video
	public function addVideo()
	{
		$data['album_data']=$this->Album_model->albumList();
		$this->load->view('admin/addvideo',$data);
	}
	public function insertVideo(){
        $id=$this->input->post('titlecombo');
        $data['album_id_fk']=$this->input->post('titlecombo');
       	$data['video_url']=$this->input->post('video_url');
       	$this->Video_model->insertVideo($data);
        redirect('admin/showVideo/'.$id);
    }
	public function showVideo($id)
	{
		$data['album_id_fk']=$id;
		$data['video_data']=$this->Video_model->VideoList($id);
		$this->load->view('admin/showvideo',$data);
	}
	public function showVideo1()
	{
		$data['video_data']=$this->Video_model->allVideoList();
		$this->load->view('admin/showvideo',$data);
	}
	public function deleteVideo($id,$vid){
        $data = $this->Video_model->VideoList($id);
        $this->Video_model->deleteVideo($id);
        redirect('admin/showVideo1/'.$vid);
    }

    //contact
    public function addContact()
    {
    	$data['user_data']=$this->User_model->userList();
		$this->load->view('admin/addcontact',$data);
    }
    public function insertContact()
	{
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['subject']=$this->input->post('subject');
		$data['message']=$this->input->post('message');
		$this->Contact_model->insertContact($data);
		redirect('admin/showcontact');
	}
	public function showContact()
	{
		$data['contact_data']=$this->Contact_model->contactList();
		$this->load->view('admin/showcontact',$data);
	}
	public function editContact($id)
	{
		$data['user_data']=$this->User_model->userList();
		$data['contact_data']=$this->Contact_model->contactData($id);
		$this->load->view('admin/addcontact',$data);
	}
	public function deleteContact($id)
	{
		$this->Contact_model->deleteContact($id);
		redirect('admin/showcontact');
	}
	public function updateContact()
	{
		$data['c_id_pk']=$this->input->post('c_id_pk');
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['subject']=$this->input->post('subject');
		$data['message']=$this->input->post('message');
		$this->Contact_model->updateContact($data);
		redirect('admin/showcontact');
	}
	
	//booking
	public function addBooking()
	{
		$data['user_data']=$this->User_model->userList();
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('Admin/AddBooking',$data);
	}
	public function insertBooking(){
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['package_id_fk']=$this->input->post('package_name');
		$data['package_price']=$this->input->post('package_price');
		$data['booking_date']=$this->input->post('booking_date');
        $data['booking_venue']=$this->input->post('booking_venue');

		$this->BookingModel->insertBooking($data);
		redirect('Admin/ShowBooking');
	}
	public function bookBooking($id,$user_id,$pid)
	{
		$data1['booking_id_pk']=$id;
        $data1['is_booked']=1;
        $this->BookingModel->updateBooking($data1);
        $booking_data=$this->BookingModel->bookingData($id);
        $user_data=$this->User_model->userData($user_id);
        $package_data=$this->PackageModel->packageData($pid);

        $htmlContent = '<h1>Your Booking Is Confirmed!!</h1>';
		$htmlContent .= '<p>Hello <b>'.$user_data['f_name'].'&nbsp;'.$user_data['l_name'].'</b>,<br>Your booking is <b>confirmed</b>.<br>You have selected <b>'.$package_data['package_name'].'</b> and your booking date is <b>'.$booking_data["booking_date"].'</b> and venue is <b>'.$booking_data["booking_venue"].'</b> and your total booking price is <b>'.$booking_data['package_price'].'/-</b><br>We would love to work with you.<br>You can come to our place and discuss more about your package and about payment.<br>Thank you!!</p>';

		$this->email->to($user_data['email']);
		$this->email->from('pateldrashti0612@gmail.com','Lens-Trends');
		$this->email->subject('Booking Confirmation');
		$this->email->message($htmlContent);

		$this->email->send();
        redirect('Admin/showconfirmbooking');

	}
	public function declineBooking($id,$user_id)
	{
		$data1['booking_id_pk']=$id;
        $data1['is_booked']=2;
        $this->BookingModel->updateBooking($data1);
        $booking_data=$this->BookingModel->bookingData($id);
        $user_data=$this->User_model->userData($user_id);

        $htmlContent = '<h1>Your Booking Is Decline!!</h1>';
		$htmlContent .= '<p>Hello <b>'.$user_data['f_name'].'&nbsp;'.$user_data['l_name'].'</b>,<br>Your booking is <b>decline</b>.<br>Your suitable date is not suitable for us so please select another date we will notify you if they are suitable for us.<br>Thanks for your understanding!</p>';

		$this->email->to($user_data['email']);
		$this->email->from('pateldrashti0612@gmail.com','Lens-Trends');
		$this->email->subject('Booking Decline');
		$this->email->message($htmlContent);

		$this->email->send();
        redirect('Admin/showbooking');

	}
	public function showBooking()
	{
		$data['user_data']=$this->User_model->userList();
		$data['booking_data']=$this->BookingModel->bookingList();
		$this->load->view('Admin/showbooking',$data);
	}
	public function showConfirmBooking()
	{
		$data['user_data']=$this->User_model->userList();
		$data['booking_data']=$this->BookingModel->confirmbookingList();
		$this->load->view('Admin/showConfirmbooking',$data);
	}
	public function showPendingBooking()
	{
		$data['user_data']=$this->User_model->userList();
		$data['booking_data']=$this->BookingModel->bookingList();
		$this->load->view('Admin/showpendingbooking',$data);
	}
	public function editBooking($id){
		$data['user_data']=$this->User_model->userList();
		$data['package_data']=$this->PackageModel->packageList();
        $data['booking_data']=$this->BookingModel->bookingData($id);
        $this->load->view('Admin/AddBooking',$data);
	}
	public function updateBooking(){
		$data['booking_id_pk']=$this->input->post('booking_id_pk');
        $data['user_id_fk']=$this->input->post('usercombo');
		$data['package_id_fk']=$this->input->post('package_name');
		$data['package_price']=$this->input->post('package_price');
		$data['booking_date']=$this->input->post('booking_date');
		$data['booking_venue']=$this->input->post('booking_venue');

		$this->BookingModel->updateBooking($data);
		redirect('Admin/ShowBooking');
	}
	public function deleteBooking($id){
        $this->BookingModel->deleteBooking($id);

        redirect('Admin/ShowBooking');
	}

	//Package
	public function addPackage()
	{
		$this->load->view('Admin/AddPackage');
	}
	public function insertPackage(){
		$data['package_name']=$this->input->post('package_name');
		$data['package_detail']=$this->input->post('package_detail');
       $data['package_pic_path']=$this->imagepackageupload();

		$this->PackageModel->insertPackage($data);
		redirect('Admin/ShowPackage');
	}
	public function imagepackageupload()
	{
		$type=explode(".",$_FILES["package_pic_path"]["name"]);
		$type=strtolower($type[count($type)-1]);
		$url="uploads/"."PACKAGE_IMG_".rand(1,999).'.'.$type;
		if(in_array($type,array("jpeg","jpg","png","gif"))){
			if(is_uploaded_file($_FILES["package_pic_path"]["tmp_name"])){
				if(move_uploaded_file($_FILES["package_pic_path"]["tmp_name"],$url)){
					return $url;
				}
			}
		}
	}
	public function showPackage()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('Admin/ShowPackage',$data);
	}
	public function editPackage($id){
        $data['package_data']=$this->PackageModel->packageData($id);
        $this->load->view('Admin/AddPackage',$data);
	}
	public function updatePackage(){
		$data['package_id_pk']=$this->input->post('package_id_pk');
		$data['package_name']=$this->input->post('package_name');
		$data['package_detail']=$this->input->post('package_detail');
		if($_FILES['package_pic_path']['name']!=null)
		{
			$data['package_pic_path']=$this->imagepackageupload();
		}
        
		$this->PackageModel->updatePackage($data);
		redirect('Admin/ShowPackage');
	}
	public function deletePackage($id){
        $this->PackageModel->deletePackage($id);

        redirect('Admin/ShowPackage');
	}

	//feedback
	public function addFeedback()
	{
		$data['user_data']=$this->User_model->userList();
		$this->load->view('Admin/AddFeedback',$data);
	}
	public function insertFeedback(){
		$data['user_name']=$this->input->post('user_name');
		$data['feedback']=$this->input->post('feedback');

		$this->FeedbackModel->insertFeedback($data);
		redirect('Admin/ShowFeedback');
	}
	public function showFeedback()
	{
		$data['feedback_data']=$this->FeedbackModel->feedbackList();
		$this->load->view('Admin/ShowFeedback',$data);
	}
	public function editFeedback($id){
        $data['feedback_data']=$this->FeedbackModel->feedbackData($id);
        $data['user_data']=$this->User_model->userList();
        $this->load->view('Admin/AddFeedback',$data);
	}
	public function updateFeedback(){
		$data['f_id_pk']=$this->input->post('f_id_pk');
		$data['user_name']=$this->input->post('user_name');
		$data['feedback']=$this->input->post('feedback');
		
		$this->FeedbackModel->updateFeedback($data);
		redirect('Admin/ShowFeedback');
	}
	public function deleteFeedback($id){
        $this->FeedbackModel->deleteFeedback($id);

        redirect('Admin/ShowFeedback');
	}

	//purchase
	public function addPurchase()
	{
		$data['user_data']=$this->User_model->userList();
		$data['product_data']=$this->ProductModel->productList();
		$data['payment_data']=$this->PaymentModel->paymentList();
		$this->load->view('Admin/AddPurchase',$data);
	}
	public function insertPurchase(){
		$data['user_id_fk']=$this->input->post('user_id_pk');
		$data['product_id_fk']=$this->input->post('product_id_pk');
		$data['product_quantity']=$this->input->post('product_quantity');
		$data['product_pic_path']=$this->purchase_imageupload();
        $data['payment_id_fk']=$this->input->post('payment_id_pk');

		$this->PurchaseModel->insertPurchase($data);
		redirect('Admin/ShowPurchase');
	}
	public function purchase_imageupload()
	{
		$type=explode(".",$_FILES["product_pic_path"]["name"]);
		$type=strtolower($type[count($type)-1]);
		$url="uploads/"."PRODUCT_IMG_".rand(1,999).'.'.$type;
		if(in_array($type,array("jpeg","jpg","png","gif"))){
			if(is_uploaded_file($_FILES["product_pic_path"]["tmp_name"])){
				if(move_uploaded_file($_FILES["product_pic_path"]["tmp_name"],$url)){
					return $url;
				}
			}
		}
	}
	public function showPurchase()
	{
		$data['purchase_data']=$this->PurchaseModel->purchaseList();
		$this->load->view('Admin/ShowPurchase',$data);
	}
	public function editPurchase($id){
        $data['purchase_data']=$this->PurchaseModel->purchaseData($id);
        $data['user_data']=$this->User_model->userList();
		$data['product_data']=$this->ProductModel->productList();
		$data['payment_data']=$this->PaymentModel->paymentList();
        $this->load->view('Admin/AddPurchase',$data);
	}
	public function updatePurchase(){
		$data['purchase_id_pk']=$this->input->post('purchase_id_pk');
		$data['user_id_fk']=$this->input->post('user_id_pk');
		$data['product_id_fk']=$this->input->post('product_id_pk');
		$data['product_quantity']=$this->input->post('product_quantity');
		$data['product_pic_path']=$this->purchase_imageupload();
        $data['payment_id_fk']=$this->input->post('payment_id_pk');
		
		$this->PurchaseModel->updatePurchase($data);
		redirect('Admin/ShowPurchase');
	}
	public function deletePurchase($id){
        $this->PurchaseModel->deletePurchase($id);

        redirect('Admin/ShowPurchase');
	}
	
	//package price and detail
	public function addPrice()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('Admin/AddPackagePrice',$data);
	}
	public function insertPrice()
	{
		$data['package_id_fk']=$this->input->post('pricecombo');
        $data['package_id_fk']=$this->input->post('detailcombo');
       
        $this->PackagePriceModel->insertPrice($data);
         //print_r( $data);
        redirect('Admin/ShowPrice');
    }
	public function ShowPrice()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$data['price_data']=$this->PackagePriceModel->fetchPrice();
        
		$this->load->view('Admin/ShowPackagePrice',$data);
	}
	public function ShowPackagePrice()
	{
		$data['price_data']=$this->PackagePriceModel->fetchPrice();
		
		$this->load->view('Admin/ShowPackagePrice',$data);
	}
	public function deletePrice($id)
	{
        $data = $this->PackagePriceModel->fetchPrice($id);

        $this->PackagePriceModel->deletePrice($id);
        redirect('Admin/ShowPackagePrice');
    }
    //Appoinment
	public function addAppoinment()
	{
		$data['user_data']=$this->User_model->userList();
		$this->load->view('Admin/AddAppoinment',$data);
	}
	public function insertAppoinment(){
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['appoinment_date']=$this->input->post('appoinment_date');
		$data['appoinment_time']=$this->input->post('appoinment_time');
		$data['purpose']=$this->input->post('purpose');

		$this->Appoinment_model->insertAppoinment($data);
		redirect('Admin/ShowAppoinment');
	}
	public function bookAppoinment($id,$user_id)
	{
		
		$data1['appoinment_id_pk']=$id;
        $data1['is_confirm']=1;
        $this->Appoinment_model->updateAppoinment($data1);
        $appoinment_data=$this->Appoinment_model->appoinmentData($id);
        $user_data=$this->User_model->userData($user_id);

        $htmlContent = '<h1>Your Appoinment Is Confirmed!!</h1>';
		$htmlContent .= '<p>Hello <b>'.$user_data['f_name'].'&nbsp;'.$user_data['l_name'].'</b>,<br>Your appointment date is <b>'.$appoinment_data["appoinment_date"].'</b> and time is <b>'.$appoinment_data["appoinment_time"].'</b> you can rich at our place at specify time.<br>Thank you!!</p>';

		$this->email->to($user_data['email']);
		$this->email->from('pateldrashti0612@gmail.com','Lens-Trends');
		$this->email->subject('Appoinment Confirmation');
		$this->email->message($htmlContent);

		$this->email->send();

        redirect('Admin/showconfirmappoinment');

	}
	public function declineAppoinment($id,$user_id)
	{
		$data1['appoinment_id_pk']=$id;
        $data1['is_confirm']=2;
        $this->Appoinment_model->updateAppoinment($data1);
        $appoinment_data=$this->Appoinment_model->appoinmentData($id);
        $user_data=$this->User_model->userData($user_id);

        $htmlContent = '<h1>Your Appoinment Is Decline!!</h1>';
		$htmlContent .= '<p>Hello <b>'.$user_data['f_name'].'&nbsp;'.$user_data['l_name'].'</b>,<br>Your appointment date is '.$appoinment_data["appoinment_date"].' and time is '.$appoinment_data["appoinment_time"].' that is not suitable for us so please select another date and time we will notify you if they are suitable for us.<br>Thanks for your understanding!</p>';

		$this->email->to($user_data['email']);
		$this->email->from('pateldrashti0612@gmail.com','Lens-Trends');
		$this->email->subject('Appoinment Decline');
		$this->email->message($htmlContent);

		$this->email->send();

        redirect('Admin/showappoinment');

	}
	public function showAppoinment()
	{
		$data['user_data']=$this->User_model->userList();
		$data['appoinment_data']=$this->Appoinment_model->appoinmentList();
		$this->load->view('Admin/ShowAppoinment',$data);
	}
	public function showConfirmAppoinment()
	{
		$data['user_data']=$this->User_model->userList();
		$data['appoinment_data']=$this->Appoinment_model->appoinmentconfirmList();
		$this->load->view('Admin/showconfirmappoinment',$data);
	}
	public function showPendingAppoinment()
	{
		$data['user_data']=$this->User_model->userList();
		$data['appoinment_data']=$this->Appoinment_model->appoinmentList();
		$this->load->view('Admin/showpendingappoinment',$data);
	}

	public function editAppoinment($id){
		$data['user_data']=$this->User_model->userList();
        $data['appoinment_data']=$this->Appoinment_model->appoinmentData($id);
        $this->load->view('Admin/AddAppoinment',$data);
	}
	public function updateAppoinment(){
		$data['appoinment_id_pk']=$this->input->post('appoinment_id_pk');
		$data['user_id_fk']=$this->input->post('usercombo');
		$data['appoinment_date']=$this->input->post('appoinment_date');
		$data['appoinment_time']=$this->input->post('appoinment_time');
		$data['purpose']=$this->input->post('purpose');

		$this->Appoinment_model->updateAppoinment($data);
		redirect('Admin/ShowAppoinment');
	}
	public function deleteAppoinment($id){
        $this->Appoinment_model->deleteAppoinment($id);

        redirect('Admin/ShowAppoinment');
	}
	//package detail
	public function addPackageDetail()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('Admin/addPackageDetail',$data);
	}
	public function insertPackageDetail(){
		$data['package_id_fk']=$this->input->post('packagecombo');
		$data['Package_Detail']=$this->input->post('Package_Detail');
		$data['package_price']=$this->input->post('package_price');

		$this->PackageDetailModel->insertPackageDetail($data);
		redirect('Admin/ShowallPackageDetail');
	}
	public function showPackageDetail($id)
	{
		$data['package_data']=$this->PackageModel->packageList();
		$data['package_detail_data']=$this->PackageDetailModel->packagedetailList($id);
		$this->load->view('Admin/ShowPackageDetail',$data);
	}
	public function showallPackageDetail()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$data['package_detail_data']=$this->PackageDetailModel->allpackagedetailList();
		$this->load->view('Admin/ShowPackageDetail',$data);
	}
	public function editPackageDetail($id){
		$data['package_data']=$this->PackageModel->packageList();
        $data['package_detail_data']=$this->PackageDetailModel->packagedetailData($id);
        $this->load->view('Admin/AddPackageDetail',$data);
	}
	public function updatePackageDetail(){
		$data['package_detail_id_pk']=$this->input->post('package_detail_id_pk');
		$data['package_id_fk']=$this->input->post('packagecombo');
		$data['package_detail']=$this->input->post('package_detail');
		$data['package_price']=$this->input->post('package_price');
        
		$this->PackageDetailModel->updatePackageDetail($data);
		redirect('Admin/showallPackageDetail');
	}
	public function deletePackageDetail($id){
        $this->PackageDetailModel->deletePackageDetail($id);

        redirect('Admin/ShowallPackageDetail');
	}

}
?>