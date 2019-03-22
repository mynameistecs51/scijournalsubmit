<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('authen_model');
		$this->layout = 'frontoffice/authen/';
		$this->table = 'user';

	}

	public function index()
	{

	}

	public function regis()
	{
		$this->data['status'] = 'register';
		$this->app->render('Science Journal UDRU '.CI_VERSION, 'backoffice/authen/regis', $this->data, true);
	}

	public function addRegis()
	{

		if ($_POST) {
			$data = array(
				'user_email'       => $this->input->post('email'),
				'user_password'    => md5($this->input->post('password')),
				'user_name'    => $this->input->post('name'),
				'user_lastname'    => $this->input->post('lastname'),
				'user_position' => $this->input->post('position'),
				'user_gender' => $this->input->post('gender'),
				'user_department' => $this->input->post('department'),
				'user_status' => $this->input->post('status'),
				'user_address' => $this->input->post('address'),
				'user_walkin' => $this->input->post('walkin'),
				'user_telephone' => $this->input->post('telephone'),
				'user_mobile' => $this->input->post('mobile'),
				'user_group' => '2',// 2 user หรือผู้เข้าร่วม
			);
			$this->crud_model->Insert('user', $data);
			redirect(base_url('index.php/welcome/#login'),'refresh');
		}
	}

	public function checkLogin()
	{
		if ($_POST) {
			$authenRS = $this->authen_model->CheckValidLogin($this->input->post('email'), trim(md5($this->input->post('password'))));
			if (!empty($authenRS)) {
				$this->setSession($authenRS);
			} else {
				$this->data['loginfail'] = $this->session->set_flashdata('message', '!! USER E-MAIL OR PASSWORD FAIL !!');
				redirect('index.php/welcome/#login', 'refresh');
			}
		}
		else {
			redirect('index.php/authen/regis', 'refresh');
		}
	}

	public function setSession($authenRS)
	{

		$loginSession = array(
			'user_id' => $authenRS[0]['user_id'],
			'user_email' => $authenRS[0]['user_email'],
			'user_prefixname' => $authenRS[0]['user_prefixname'],
			'user_name' => $authenRS[0]['user_name'],
			'user_lastname' => $authenRS[0]['user_lastname'],
			'user_position' => $authenRS[0]['user_position'],
			'user_gender' => $authenRS[0]['user_gender'],
			'user_department' => $authenRS[0]['user_department'],
			'user_status' => $authenRS[0]['user_status'],
			'user_address' => $authenRS[0]['user_address'],
			'user_telephone' => $authenRS[0]['user_telephone'],
			'user_mobile' => $authenRS[0]['user_mobile'],
			'user_group' => $authenRS[0]['usergroup_id'],

		);
		$this->session->set_userdata($loginSession);
// เสร็จแล้วไปที่หน้า dashboard
		redirect('index.php/datame/', 'refresh');
	}

	public function logOut()
	{
		$userID   = $this->session->unset_userdata("userID");
		$email    = $this->session->unset_userdata("email");
		$fullname = $this->session->unset_userdata("fullname");
		// session_destroy();

		$this->session->sess_destroy();
		redirect('index.php/welcome/', 'refresh');
	}


}

/* End of file Authen.php */
/* Location: ./application/controllers/Authen.php */