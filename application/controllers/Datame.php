<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datame extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'backoffice/datame/';
		$this->load->model('datame_model');
		$this->load->model('crud_model');
		$userID = $this->session->userdata('user_id');

		if (!empty($userID)) {
			$this->data['dataLogin']   = $this->session->userdata('user_id');
			$this->data['sessiondata'] = $this->session->userdata();
		} else {
			redirect('index.php/welcome/#login', 'refresh');
		}
	}

	public function index()
	{
		$dataMe = $this->datame_model->getuser($this->data['dataLogin']);
		foreach ($dataMe as $rowMe) {
			$this->data['me'] = array(
				'user_id'         => $rowMe->user_id,
				'user_email'      => $rowMe->user_email,
				'user_prefixname' => $rowMe->user_prefixname,
				'user_name'       => $rowMe->user_name,
				'user_lastname'   => $rowMe->user_lastname,
				'user_position'   => $rowMe->user_position,
				'user_gender'     => $rowMe->user_gender,
				'user_department' => $rowMe->user_department,
				'user_status'     => $rowMe->user_status,
				'user_address'    => str_replace('<br>',"\n",$rowMe->user_address),
				'user_walkin'			=> $rowMe->walkin,
				'user_telephone'  => $rowMe->user_telephone,
				'user_mobile'     => $rowMe->user_mobile,
			);
		}
		$this->app->render('จัดการข้อมูลส่วนตัว', $this->layout . 'index.php', $this->data, true);
	}

	public function submit()
	{
		if ($_POST) {
			$data = array(
				'user_email'      => $this->input->post('email'),
                // 'user_password'    => md5($this->input->post('password')),
				'user_name'       => $this->input->post('name'),
				'user_lastname'   => $this->input->post('lastname'),
				'user_position'   => $this->input->post('position'),
				'user_gender'     => $this->input->post('gender'),
				'user_department' => $this->input->post('department'),
				'user_status'     => $this->input->post('status'),
				'user_address'    => str_replace("<br>\n", "<br>", $this->input->post('address')),
				'user_walkin'			=> $this->input->post('walkin'),
				'user_telephone'  => $this->input->post('telephone'),
				'user_mobile'     => $this->input->post('mobile'),
			);
			$update = $this->crud_model->Update('user', 'user_id', $this->input->post('user_id'), $data);
			redirect('index.php/datame','refresh');
		}
	}

}

/* End of file Datame.php */
/* Location: ./application/controllers/Datame.php */
