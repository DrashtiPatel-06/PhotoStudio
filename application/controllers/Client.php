<?php
class Client extends CI_Controller
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
		unset($_SESSION['feedback']);
		$data['video_data']=$this->Video_model->VideoList1();
		$data['image_data']=$this->Album_image_model->showImgGallery();
		$data['package_data']=$this->PackageModel->packageDataList();
		
		$data['album_data']=$this->Album_model->albumTypeList();
		$this->load->view('client/index',$data);
	}
	public function user_login()
	{
		
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$res=$this->User_model->user_login($email,$password);
		if($res!=null)
		{
			$_SESSION['email']=$res['email'];
			$_SESSION['password']=$res['password'];
			$_SESSION['u_type']=$res['u_type'];
			$_SESSION['user_id_pk']=$res['user_id_pk'];

			if($res['u_type']=='client')
			{
				redirect('Client/index');	
			}else
			{
				redirect('Admin/index');
			}
		}else
		{
			$data['video_data']=$this->Video_model->VideoList1();
			$data['image_data']=$this->Album_image_model->showImgGallery();
			$data['package_data']=$this->PackageModel->packageDataList();
			
			$data['album_data']=$this->Album_model->albumTypeList();
			$data['invalid']="invalid email and password";
			$this->load->view('Client/index',$data);
		}
	}

	public function addUser()
	{
		$data['state_data']=$this->User_model->stateList();
		$this->load->view('Client/adduser',$data);
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
		$data['u_type']="client";
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['picture_path']=$this->imageupload();
		$this->User_model->insertUser($data);
		redirect('Client/index');
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
		$this->load->view('client/showuser',$data);
	}
	public function editUser($id)
	{
		$data['city_data']=$this->User_model->cityList();
		$data['state_data']=$this->User_model->stateList();
		$data['user_data']=$this->User_model->userData($id);
		$this->load->view('client/adduser',$data);
	}
	public function deleteUser($id)
	{
		$this->User_model->deleteUser($id);
		redirect('client/showuser');
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
		$data['u_type']='client';
		$data['password']=$this->input->post('password');
		if($_FILES['picture_path']['name']!=null)
		{
			$data['picture_path']=$this->imageupload();
		}
		$this->User_model->updateUser($data);
		redirect('client/profile');
	}
	public function addLogin()
	{
		
		$this->load->view('client/login');
	}
	public function showImgGallery($id)
	{
		$data['album_id_fk']=$id;
		$data['image_data']=$this->Album_image_model->fetchImgGallery($id);
		$this->load->view('client/collection',$data);
	}
	public function collection()
	{
		$data['album_data']=$this->Album_model->albumTypeList1();
		$data['image_data']=$this->Album_image_model->showImgGallery();
		$this->load->view('client/collection',$data);
	}
	public function allcollection()
	{
		$data['album_data']=$this->Album_model->albumTypeList1();
		$data['image_data']=$this->Album_image_model->showImgGallery();
		$this->load->view('client/allcollection',$data);
	}
	public function showAlbum()
	{
		$data['album_data']=$this->Album_model->albumTypeList();
		$this->load->view('client/index',$data);
	}
	public function showProduct()
	{
		$data['product_data']=$this->ProductModel->productList();
		$this->load->view('client/product',$data);
	}

	 public function addContact()
    {
    	$data['user_data']=$this->User_model->userList();
		$this->load->view('client/addcontact',$data);
    }
    public function insertContact()
	{
		$data['user_id_fk']=$this->input->post('name');
		$data['subject']=$this->input->post('subject');
		$data['message']=$this->input->post('message');
		$this->Contact_model->insertContact($data);
		redirect('client/showcontact');
	}
	public function showContact()
	{
		$data['contact_data']=$this->Contact_model->contactList();
		$this->load->view('client/contact',$data);
	}	
	public function showPackage($id)
	{
		$data['package_detail_data']=$this->PackageDetailModel->packagedetailList($id);
		$this->load->view('client/Package',$data);
	}
	public function showPackage1()
	{
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('client/AllPackage',$data);
	}
	public function addAppoinment()
    {
    	$data['user_data']=$this->User_model->userList();
		$this->load->view('client/addappoinment',$data);
    }
	public function insertAppoinment()
	{
		$data['user_id_fk']=$this->input->post('name');
		$data['appoinment_date']=$this->input->post('appoinment_date');
		$data['appoinment_time']=$this->input->post('appoinment_time');
		$data['purpose']=$this->input->post('purpose');
		$this->Appoinment_model->insertAppoinment($data);
		redirect('client/index');
		//echo "done";
	}
	public function profile()
	{
		$this->load->view('client/profile');
	}
	//booking
	public function addBooking()
	{
		$data['user_data']=$this->User_model->userList();
		$data['package_data']=$this->PackageModel->packageList();
		$this->load->view('client/booking',$data);
	}
	public function insertBooking(){
		$data['user_id_fk']=$this->input->post('user_id_fk');
		$data['package_id_fk']=$this->input->post('package_name');
		$data['package_price']=$this->input->post('package_price');
		$data['booking_date']=$this->input->post('booking_date');
        $data['booking_venue']=$this->input->post('booking_venue');

		$this->BookingModel->insertBooking($data);
		redirect('Client/index');
	}
	public function Booking()
	{
		$package=$this->input->post('package');
		$package_id = $this->input->post('package_id');
		$price=$this->input->post('price');
		$package_price = $this->input->post('package_price');
		$package_price_id = $this->input->post('package_price_id');
		
		$total_price = 0;
		$package_detail = '';
		foreach ($package as $value) {
			$package_price = $this->PackageModel->packagePrice($value);
			$total_price += (int) $package_price['package_price'];
			$package_detail .= $value.',';
		}
		$data['package_data']=$this->PackageModel->packageData($package_id);
		$data['booking_data']=$this->BookingModel->bookingList();
		$data['package_detail_data'] = $package_detail;
		$data['package_price'] = $total_price;
		$data['package_detail_data']=$this->PackageDetailModel->packagedetailData($package_price_id);
		$this->load->view('Client/booking',$data);
	}
	public function editBooking($id){
		$data['user_data']=$this->User_model->userList();
		$data['package_data']=$this->PackageModel->packageList();
        $data['booking_data']=$this->BookingModel->bookingData($id);
        $this->load->view('Admin/AddBooking',$data);
	}
	public function updateBooking(){
		$data['booking_id_pk']=$this->input->post('user_id_fk');
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
	public function video()
	{
		$data['video_data']=$this->Video_model->allVideoList();
		$this->load->view('Client/video',$data);
	}

	public function logout()
	{
		$data['video_data']=$this->Video_model->VideoList1();
		$data['image_data']=$this->Album_image_model->showImgGallery();
		$data['package_data']=$this->PackageModel->packageDataList();
		
		$data['album_data']=$this->Album_model->albumTypeList();
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		unset($_SESSION['u_type']);
		unset($_SESSION['user_id_pk']);
		$_SESSION['feedback'] = true;
		$this->load->view('Client/index',$data);
	}
	public function aboutus()
	{
		$this->load->view('client/aboutus');
	}
	public function terms_conditions()
	{
		$this->load->view('client/terms_conditions');
	}
	public function privacy()
	{
		$this->load->view('client/privacy');
	}
	public function faqs()
	{
		$this->load->view('client/faqs');
	}
	public function change_password($id){
		$data['user_id'] = $id;
		$this->load->view('client/password',$data);
	}
	public function password()
	{
		$pass=$this->input->post('pass');
		$password=$this->input->post('password');

		if($pass!=$password)
		{
			$data['user_id'] = $this->input->post('user_id_pk');
			$data['wrong']="password doesn't match";
			$this->load->view('client/password',$data);
		}else
		{
			$data['user_id_pk']=$this->input->post('user_id_pk');
			$data['password']=$this->input->post('password');
			$this->User_model->updateUser($data);
			//print_r($data);
			redirect('client/index');
		}
	}
	public function feedback()
	{
		$data['user_name']=$this->input->post('user_name');
		$data['feedback']=$this->input->post('feedback');
		$this->FeedbackModel->insertFeedback($data);
		redirect('Client/index');
		
	}
	public function forget_password(){
		$this->load->view('client/reset-password');
	}
	public function reset_password()
	{
		$email=$this->input->post('email');
		//echo $email;
		$res=$this->User_model->user_email($email);
		//print_r($res);die;
		if($res!= null)
		{
			redirect('client/change_password/'.$res['user_id_pk']);
		}else
		{
			$data['inva']="Your email id is not registered,Enter your register email id.";
			$this->load->view('client/reset-password',$data);
		}
		
	}
}
?>