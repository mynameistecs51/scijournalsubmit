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
		$team = $this->datame_model->detailMe($this->data['dataLogin']);
		foreach ($team as $fieldteam) {
			$this->data['datateam'] = array(
				'user_department'				=> $fieldteam->user_department,
				'user_prefixname'				=> $fieldteam->user_prefixname,
				'user_name'							=> $fieldteam->user_name,
				'user_lastname'					=> $fieldteam->user_lastname,
				'regis_id'							=> $fieldteam->regis_id,
				'regis_prenamehead'     => $fieldteam->regis_prenamehead,
				'regis_namehead'        => $fieldteam->regis_namehead,
				'regis_lastnamehead'    => $fieldteam->regis_lastnamehead,
				'regis_prenameteam'     => $fieldteam->regis_prenameteam,
				'regis_nameteam'        => $fieldteam->regis_nameteam,
				'regis_lastnameteam'    => $fieldteam->regis_lastnameteam,
				'regis_prenameadvisor'  => $fieldteam->regis_prenameadvisor,
				'regis_projectnameThai' => $fieldteam->regis_projectnameThai,
				'regis_projectnameEng'  => $fieldteam->regis_projectnameEng,
				'regis_nameadvisor'     => $fieldteam->regis_nameadvisor,
				'regis_lastnameadvisor' => $fieldteam->regis_lastnameadvisor,
				'regis_walkin'          => $fieldteam->walkin,
				'title_name'            => $fieldteam->title_name,
				'title_group'           => $fieldteam->title_group,
				'pay_id'								=> $fieldteam->pay_id,
				'pay_status'						=> $fieldteam->pay_status,
				'pay_file'							=> $fieldteam->pay_file,
				'pay_bank'							=> $fieldteam->pay_bank,
				'pay_time'							=> $fieldteam->pay_time,
			);
		}
		$this->app->render('รายละเอียด', $this->layout.'detail', $this->data, true);
	}

	public function editMe()
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
